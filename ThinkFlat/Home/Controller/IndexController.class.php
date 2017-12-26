<?php

namespace Home\Controller;

class IndexController extends CommonController {

    public function index() {
        $this->assign('title', CONTROLLER_NAME);
        $this->display($this->tpl);
    }

}
