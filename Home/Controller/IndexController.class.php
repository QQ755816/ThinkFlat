<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    protected function _initialize() {
        C('system', F('system', '', CACHE_MAIN . '/sys/'));
    }

    public function index() {
        if (IS_POST) {
            $code = I('post.verify');
            if (!$this->check_verify($code)) {
                $this->error('验证码错误!');
            } else {
                $map['status'] = 1;
                $map['company'] = I('post.comp');
                $map['documentid'] = I('post.docid');
                $document = D('Certificates')->relation(true)->where($map)->find();
                if ($document) {
                    $this->assign('document', $document);
                    if ($document['showtype']) {
                        cookie('uuid', $document['certficate']);
                        cookie('time', $document['createat']);
                        cookie('pages', $document['pages']);
                    } else {
                        cookie('certficate', $document['certficate']);
                    }
                } else {
                    $this->error('未查询到你输入的报告信息!');
                }
            }
        }
        $this->display();
    }

    /**
     * 验证码校检
     * @param string $code
     * @param int $id
     * @return boolen
     */
    private function check_verify($code, $id = 1) {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
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

    public function search() {
        
    }

}
