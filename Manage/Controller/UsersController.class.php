<?php

namespace Manage\Controller;

use Think\Controller;

class UsersController extends CommonController {

    protected function _initialize() {
        parent::_initialize();
        if (session('user.userid') != 1) {
            die('无权限！');
        }
    }

    public function index() {
        if (IS_POST) {
            $Model = D('Users');
            $fields = 'id,username,nickname';
            $order = 'id asc';
            $datas = $Model->gridDatas($fields, $where, $order, $listRows, $firstRow);
            $this->json($datas);
        } else {
            $this->display();
        }
    }

    public function add() {
        if (IS_POST) {
            $data = I('post.');
            $data['salt'] = guid();
            $password = M()->query("select md5('" . $data['password'] . "'+'" . $data['salt'] . "') password;");
            $data['password'] = $password[0]['password'];
            $Model = D('Users');
            $valid = $Model->create($data);
            if ($valid) {
                $id = $Model->add();
                $this->ajaxsuccess('创建用户成功！', $id);
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
            $fields = 'id,username,nickname';
            $Model = D('Users');
            if ($data['password']) {
                $salt = $Model->where('id=' . $data['id'])->getField('salt');
                $password = M()->query("select md5('" . $data['password'] . "'+'" . $salt . "') password;");
                $data['password'] = $password[0]['password'];
                $fields = 'id,username,nickname,password';
            }
            $data = array_map('trim', $data);
            $valid = $Model->field($fields)->create($data);
            if ($valid) {
                $Model->save();
                $this->ajaxsuccess('编辑用户成功！');
            } else {
                $this->ajaxerror($Model->getError());
            }
        } else {
            $id = I('get.id');
            $Model = D('Users');
            $data = $Model->field('id,username,nickname')->find($id);
            $this->assign('data', json_encode($data));
            $this->display();
        }
    }

    public function delete() {
        if (IS_POST) {
            $id = I('post.id');
            $Model = D('Users');
            $user = $Model->find($id);
            if ($user['id'] == 1) {
                $this->ajaxerror('超级管理员不允许删除');
            } else {
                $Model->delete($id);
                $this->ajaxsuccess('删除用户成功！');
            }
        } else {
            $this->display();
        }
    }

}
