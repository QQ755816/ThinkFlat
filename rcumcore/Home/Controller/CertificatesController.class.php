<?php

namespace Home\Controller;

class CertificatesController extends CommonController {

    public function index() {
        if (IS_POST) {
            $certificates = D('Certificates')->gridDatas($fields, $where, $order, 1, 0);
            $this->json($certificates);
        } else {
            $this->assign('title', CONTROLLER_NAME);
            $this->_display();
        }
    }

}
