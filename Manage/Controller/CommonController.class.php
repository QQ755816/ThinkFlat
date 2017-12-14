<?php

namespace Manage\Controller;

use Think\Controller;

class CommonController extends Controller {

    protected function _initialize() {
        if (!session('user')) {
            $this->redirect('Public/index');
        }
        C('system', F('system', '', CACHE_MAIN.'/sys/'));
        $random = time() . '-' . rand(100, 999);
        $this->assign('random', $random);
    }

    protected function ajaxsuccess($info = null, $id = null, $return = array()) {
        header('Content-Type:application/json');
        echo '{"status":1,"info":' . json_encode($info) . ',"id":"' . $id . '","return":' . json_encode($return) . '}';
        die();
    }

    protected function ajaxerror($info = null) {
        header('Content-Type:application/json');
        echo '{"status":0,"info":' . json_encode($info) . '}';
        die();
    }

    protected function json($data = array()) {
        header('Content-Type:application/json');
        echo json_encode($data);
        die();
    }

}
