<?php

namespace Manage\Controller;

use Think\Controller;

class CerttypesController extends CommonController {

    public function index() {
        if (IS_POST) {
            $Model = D('Certtypes');
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
            $Model = D('Certtypes');
            if ($Model->create($data)) {
                $id = $Model->add();
                $this->ajaxsuccess('添加证书类型成功！', $id);
            } else {
                $this->ajaxerror($Model->getError());
            }
        } else {
            $this->display();
        }
    }

    public function update() {
        if (IS_POST) {
            $data = I('post.');
            $data['id'] = I('get.id');
            $data = array_map('trim', $data);
            $Model = D('Certtypes');
            if ($Model->create($data)) {
                $Model->save();
                $this->ajaxsuccess('保存证书类型成功！', $data['id']);
            } else {
                $this->ajaxerror($Model->getError());
            }
        } else {
            $id = I('get.id');
            $Model = D('Certtypes');
            $data = $Model->find($id);
            $this->assign('data', json_encode($data));
            $this->display();
        }
    }

    public function status() {
        $id = I('post.id');
        $status = I('post.status');
        $map['id'] = I('post.id');
        $Model = D('Certtypes');
        $Model->where($map)->setField('status', $status);
        $this->ajaxsuccess('修改状态成功！');
    }

}
