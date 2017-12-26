<?php

namespace Home\Controller;

class EmptyController extends CommonController {

    public function _empty() {
        $this->assign('title', CONTROLLER_NAME);
        $this->display($tpl);
    }

    public function pjaxerror() {
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
