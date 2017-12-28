<?php

namespace Home\Controller;

class CertificatesController extends CommonController {

    public function index() {
        if (IS_POST) {
            $fields = array(
                'id',
                'createat',
                'certno',
                'certtype',
                'certyear',
                'certmonth',
                'certstatus',
                'step'
            );
            $page = I('post._page')['page'];
            $readrow = I('post._page')['rows'];
            $startrow = $readrow * ($page - 1);
            $certificates = D('Certificates')->gridDatas($fields, $where, $order, $readrow, $startrow);
            $this->json($certificates);
        } else {
            $this->assign('title', CONTROLLER_NAME);
            $this->_display();
        }
    }

    public function certificate() {
        $id = I('get.id');
        $certificate = D('Certificates')->where($map)->find($id);
        $this->assign('certificate', $certificate);
        $this->_display();
    }

    protected function certificates($type=1){
        if (IS_POST) {
            $fields = array(
                'id',
                'createat',
                'certno',
                'certtype',
                'certyear',
                'certmonth',
                'certstatus',
                'step'
            );
            $page = I('post._page')['page'];
            $readrow = I('post._page')['rows'];
            $startrow = $readrow * ($page - 1);
            $where['certtype'] = $type;
            $certificates = D('Certificates')->gridDatas($fields, $where, $order, $readrow, $startrow);
            $this->json($certificates);
        } else {
            $this->assign('title', CONTROLLER_NAME);
            $this->_display();
        }
    }
    public function direct() {
        $this->certificates(1);
    }

    public function threeparty() {
        $this->certificates(2);
    }
    public function indirect() {
        $this->certificates(3);
    }

}
