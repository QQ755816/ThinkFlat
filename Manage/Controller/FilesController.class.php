<?php

namespace Manage\Controller;

use Think\Controller;

class FilesController extends CommonController {

    public function certficate() {
        $dir = I('get.dir');
        $config = array(
            'maxSize' => 20971520,
            'saveName' => time() . '_' . rand(10000, 99999),
            'rootPath' => './Uploads/', //'./htdocs/',
            'autoSub' => true,
            'subName' => array('date', 'Ym')
        );
        $config['exts'] = array('pdf'); //设置附件上传类型
        $config['savePath'] = 'certficate/'; //设置附件上传（子）目录
        $upload = new \Think\Upload($config); //实例化上传类
        $info = $upload->uploadOne($_FILES['kindeditorFile']);
        if (!$info) {
            $this->json(array('error' => 1, 'message' => $upload->getError()));
        } else {
            $this->json(array('error' => 0, 'url' => '/Uploads/' . $info['savepath'] . urlencode($info['savename']), 'filename' => $_FILES['kindeditorFile']['name']));
        }
    }

}
