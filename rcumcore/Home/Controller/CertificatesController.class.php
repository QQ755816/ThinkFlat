<?php

namespace Home\Controller;

class CertificatesController extends CommonController {

    public function index($type = 0, $title = '') {
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
        $certificate = D('Certificates')->relation(true)->where($map)->find($id);
        $this->assign('certificate', $certificate);
        foreach ($certificate['downstreams'] as $key=>$downstream) {
            if($downstream['roletype']==1){
                $this->assign('manufacturer', $downstream);
            }
            if($downstream['roletype']==2){
                $this->assign('downstream', $downstream);
            }
            if($downstream['roletype']==3){
                $this->assign('euimporter', $downstream);
            }
        }
        switch ($certificate['certtype']){
            case 1:
                $this->assign('title', L('CERTDIRECT'));
                break;
            case 2:
                $this->assign('title', L('CERTTJREEPARTY'));
                break;
            case 3:
                $this->assign('title', L('CERTINDIRECT'));
                break;
        }
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
