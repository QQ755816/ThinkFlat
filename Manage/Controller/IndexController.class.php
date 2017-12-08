<?php

namespace Manage\Controller;

use Think\Controller;

class IndexController extends CommonController {

    public function index() {
        //读取授权的控制器信息
        $this->display();
    }

    public function decorate() {
        $this->display();
    }

    public function modifypass() {
        if (IS_POST) {
            $password = I('post.password');
            $map['id'] = session('user.userid');
            $Model = D('Users');
            $salt = $Model->where($map)->find('salt');
            $password = M()->query("select md5('" . $password . "'+'" . $salt . "') newpassword;");
            $return = $Model->where($map)->setField('password', $password[0]['newpassword']);
            if ($return) {
                $this->ajaxsuccess('操作成功');
            } else {
                $this->ajaxerror('操作失败');
            }
        } else {
            $this->display();
        }
    }

    public function logout() {
        session('user', null);
        $this->redirect('Index/index');
    }

    public function keep() {
        $this->ajaxsuccess('Success');
    }

    public function upcat() {
        $Model = D('Categorys');
        $map['status'] = 0;
        $cats = $Model->where($map)->select();
        foreach ($cats as $key => $cat) {
            $content = $cat['content'];
            $str = strip_tags(htmlspecialchars_decode($content));
            $str = preg_replace('/&nbsp;/', ' ', $str);
            $str = preg_replace('/[\n\r\t]/', ' ', $str);
            $str = preg_replace('/\s(?=\s)/', '', $str);
            $data['content'] = htmlspecialchars($content);
            $data['contenttext'] = $str;
            $data['status'] = 1;
            $Model->where('id=' . $cat['id'])->setField($data);
        }
        $this->show('ok');
    }

    public function uparticles() {
        $Model = M('db_shearfiles');
        $map['filepoint'] = 0;
        $arts = $Model->where($map)->select();
        foreach ($arts as $key => $art) {
            $content = $art['fileinfo'];
            $str = strip_tags(htmlspecialchars_decode($content));
            $str = preg_replace('/&nbsp;/', ' ', $str);
            $str = preg_replace('/[\n\r\t]/', ' ', $str);
            $str = preg_replace('/\s(?=\s)/', '', $str);
            $data['fileinfotext'] = $str;
            $data['fileinfo'] = htmlspecialchars($content);
            $data['filepoint'] = 1;
            $Model->where('id=' . $art['id'])->setField($data);
        }
        $this->show('ok');
    }

    public function updownloads() {
        $Model = M('db_downloads');
        $map['replaced'] = 0;
        $arts = $Model->where($map)->select();
        foreach ($arts as $key => $art) {
            $content = $art['fileinfo'];
            $str = strip_tags(htmlspecialchars_decode($content));
            $str = preg_replace('/&nbsp;/', ' ', $str);
            $str = preg_replace('/[\n\r\t]/', ' ', $str);
            $str = preg_replace('/\s(?=\s)/', '', $str);
            $data['fileinfotext'] = $str;
            $data['fileinfo'] = htmlspecialchars($content);
            $data['replaced'] = 1;
            $Model->where('id=' . $art['id'])->setField($data);
        }
        $this->show('ok');
    }

    private function subcatids($catid, $catids) {
        array_push($catids, $catid);
        $map['parentid'] = $catid;
        $subcatids = D('Categorys')->where($map)->getField('id', true);
        foreach ($subcatids as $key => $subcatid) {
            $catids = $this->subcatids($subcatid, $catids);
        }
        return $catids;
    }

}
