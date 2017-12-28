<?php

namespace Home\Controller;

class CertificatesController extends CommonController {

    public function index($type = 0, $title = CONTROLLER_NAME) {
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
            if ($type) {
                $where['certtype'] = $type;
            }
            $certificates = D('Certificates')->gridDatas($fields, $where, $order, $readrow, $startrow);
            $this->json($certificates);
        } else {
            if ($title) {
                $this->assign('title', $title);
            } else {
                $this->assign('title', L('CERTIFICATES'));
            }
            $this->_display();
        }
    }

    public function certificate() {
        $id = I('get.id');
        $certificate = D('Certificates')->where($map)->find($id);
        $this->assign('certificate', $certificate);
        $this->_display();
    }

    public function direct() {
        $this->index(1, L('CERTDIRECT'));
    }

    public function threeparty() {
        $this->index(2, L('CERTTJREEPARTY'));
    }

    public function indirect() {
        $this->index(3, L('CERTINDIRECT'));
    }

}
