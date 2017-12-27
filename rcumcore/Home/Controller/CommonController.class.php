<?php

namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller {

    protected $tpl;

    protected function is_pjax() {
        return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'] === 'true';
    }

    protected function _initialize() {
        if ($this->is_pjax()) {
            $this->tpl = T('pjax/' . CONTROLLER_NAME . '/' . ACTION_NAME);
            $this->assign('pjax', true);
        } else {
            $this->tpl = T(CONTROLLER_NAME . '/' . ACTION_NAME);
        }
    }

    public function verify($id = 1) {
        $config = array(
            'fontSize' => 15, // 验证码字体大小
            'length' => 4, // 验证码位数
            'imageW' => 0,
            'imageH' => 32,
            'useCurve' => false,
            'useNoise' => false,
        );
        $verify = new \Think\Verify($config);
        $verify->entry($id);
    }

    protected function checkVerify($code, $id = 1) {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }

    protected function ajaxSuccess($info = null, $id = null, $return = array()) {
        header('Content-Type:application/json');
        echo '{"status":1,"info":' . json_encode($info) . ',"id":"' . $id . '","return":' . json_encode($return) . '}';
        die();
    }

    protected function ajaxError($info = null) {
        header('Content-Type:application/json');
        echo '{"status":0,"info":' . json_encode($info) . '}';
        die();
    }

    protected function json($data = array()) {
        header('Content-Type:application/json');
        echo json_encode($data);
        die();
    }

    protected function _display() {
        $this->display($this->tpl);
    }

    public function _empty() {
        $this->assign('title', L('PAGENOTFOUND'));
        if ($this->is_pjax()) {
            $this->tpl = T('pjax/Error/404');
            $this->assign('pjax', true);
        } else {
            $this->tpl = T('Error/404');
        }
        $this->_display();
    }

}
