<?php

namespace Manage\Controller;

use Think\Controller;

class SystemController extends CommonController {

    protected function _initialize() {
        parent::_initialize();
        if (session('user.userid') != 1) {
            die('无权限！');
        }
    }

    public function index() {
        $system = F('system', '', CACHE_MAIN.'/sys/');
        if (!$system) {
            $system = C('syscache');
            F('system', $system, CACHE_MAIN.'/sys/');
        }
        $this->assign('system', json_encode($system));
        $this->display();
    }

    public function save() {
        $data = I('post.');
        F('system', $data, CACHE_MAIN.'/sys/');
        $this->ajaxsuccess();
    }

    public function clearcache() {
        if (IS_POST) {
            $homeCache = CACHE_MAIN . 'runtime/Home/';
            if (!$this->dropDir($homeCache)) {
                $this->ajaxerror('前台缓存清除失败!');
            }
            $homeCache = CACHE_MAIN . 'runtime/Manage/';
            if (!$this->dropDir($homeCache)) {
                $this->ajaxerror('后台缓存清除失败!');
            }
            $this->ajaxsuccess();
        } else {
            $this->display();
        }
    }

    private function dropDir($path = '') {
        //$path = trimRepeatSlash($path);
        if (is_file($path)) {
            $this->totalSize += filesize($path);
            $this->totalFile++;
            $GLOBALS['arrFiles'][] = $path;
            unlink($path);
        } else if (is_dir($path)) {
            if (($dir = opendir($path)) !== false) {
                while (($file = readdir($dir)) !== false) {
                    if ($file != '.' && $file != '..') {
                        $this->dropDir($path . '/' . $file);
                    }
                }
                return rmdir($path);
            }
        }
    }

}
