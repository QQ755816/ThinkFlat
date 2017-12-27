<?php

namespace Home\Controller;

class IndexController extends CommonController {

    public function index() {
        $this->assign('title', 'Dashboard');
        $this->_display();
    }

}
