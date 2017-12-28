<?php

namespace Home\Controller;

class IndexController extends CommonController {

    public function index() {
        $this->assign('title', L('DASHBOARD'));
        $this->_display();
    }

}
