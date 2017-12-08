<?php

namespace Manage\Controller;

use Think\Controller;

class PublicController extends Controller {

    public function verify() {
        $config = array(
            'fontSize' => 30, // 验证码字体大小
            'length' => 5, // 验证码位数
            'imageW' => 290,
            'imageH' => 70,
            'useCurve' => false,
        );
        $verify = new \Think\Verify($config);
        $verify->entry(1);
    }

    private function check_verify($code, $id = 1) {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    public function index() {
        if (IS_POST) {
            $verify = I('post.verify');
            if (!$this->check_verify($verify)) {
                $this->ajaxerror($verify);
            }
            $username = I('post.username');
            $password = I('post.password');
            $login = $this->login($username, $password);
            if ($login) {
                $this->ajaxsuccess('登录成功');
            } else {
                $this->ajaxerror('登录失败');
            }
        } else {
            C('system', F('system', '', CACHE_MAIN.'/sys/'));
            if (is_login()) {
                $this->redirect('Index/index');
            } else {
                $this->display();
            }
        }
    }

    public function winlogin() {
        $this->display();
    }

    private function login($username, $password) {
        $userdata = D('Users')->where("username='%s' and password=md5('%s'+`salt`)", $username, $password)->find();
        if ($userdata['status']) {
            session('user.userid', $userdata['id']);
            session('user.username', ucfirst($userdata['username']));
            session('user.nickname', ucfirst($userdata['nickname']));
            return true;
        } else {
            return false;
        }
    }

    public function ajaxsuccess($info = null, $id = null, $return = array()) {
        die('{"status":1,"info":' . json_encode($info) . '}');
    }

    public function ajaxerror($info = null) {
        die('{"status":0,"info":' . json_encode($info) . '}');
    }

}
