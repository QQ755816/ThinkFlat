<?php

namespace Home\Controller;

use Think\Controller;

class EmptyController extends Controller {

    public function _empty() {
        $this->assign('title',CONTROLLER_NAME);
        if(is_pjax()){
            $tpl = T('pjax/'.CONTROLLER_NAME.'/'.ACTION_NAME);
            $this->assign('pjax',true);
        }else{
            $tpl = T(CONTROLLER_NAME.'/'.ACTION_NAME);
        }
        $this->assign('tpl',$tpl);
        $this->display($tpl);
    }
    
    public function pjaxerror(){
        $this->display(T('pjax/Index/error'));
    }
    
    public function success() {
        echo '{"success": true}';
    }

    public function error() {
        echo '{"success": false, "msg": "data not accepted!"}';
    }

    public function options() {
        //header('Content-Type:application/json');
        echo '[{"value": 0, "text": "Guest"},
              {"value": 1, "text": "Member"},
              {"value": 2, "text": "Vip"},
              {"value": 3, "text": "Admin"}]';
    }

}
