<?php

namespace Manage\Controller;

use Think\Controller;

class CertificatesController extends CommonController {

    public function index() {
        if (IS_POST) {
            $Model = D('Certificates');
            $listRows = I('post.rows') ? I('post.rows') : null;
            $firstRow = I('post.page') ? I('post.rows') * (I('post.page') - 1) : null;
            $order = 'id desc';
            $certificates = $Model->gridDatas('', '', $order, $listRows, $firstRow);
            $this->json($certificates);
        } else {
            $this->display();
        }
    }

    public function add() {
        if (IS_POST) {
            $data = I('post.');
            $data = array_map('trim', $data);
            $data['createat'] = time();
            $data['createby'] = session('user.userid');
            $Model = D('Certificates');
            if ($Model->create($data)) {
                $id = $Model->add();
                $this->ajaxsuccess('添加证书成功！', $id);
            } else {
                $this->ajaxerror($Model->getError());
            }
        } else {
            $Model = D('Certtypes');
            $map['status'] = 1;
            $filetypes = $Model->field('id,typename')->where($map)->select();
            $this->assign('filetypes', $filetypes);
            $this->display();
        }
    }

    public function update() {
        if (IS_POST) {
            $data = I('post.');
            $data['id'] = I('get.id');
            $data = array_map('trim', $data);
            if($data['newfile']){
                $data['showtype'] = 0;
            }
            unset($data['newfile']);
            $Model = D('Certificates');
            if ($Model->create($data)) {
                $Model->save();
                $this->ajaxsuccess('保存证书成功！', $data['id']);
            } else {
                $this->ajaxerror($Model->getError());
            }
        } else {
            $id = I('get.id');
            $Model = D('Certificates');
            $data = $Model->find($id);
            $this->assign('data', json_encode($data));
            unset($map);
            $Model = D('Certtypes');
            $map['status'] = 1;
            $filetypes = $Model->field('id,typename')->where($map)->select();
            $this->assign('filetypes', $filetypes);
            $this->display();
        }
    }

    public function status() {
        $id = I('post.id');
        $status = I('post.status');
        $map['id'] = I('post.id');
        $Model = D('Certificates');
        $Model->where($map)->setField('status', $status);
        $this->ajaxsuccess('修改状态成功！');
    }

}
