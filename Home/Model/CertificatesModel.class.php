<?php

namespace Home\Model;

use Think\Model\RelationModel;

class CertificatesModel extends RelationModel {

    protected $_link = array(
        'certificatetypes' => array(
            'mapping_type' => self::BELONGS_TO,
            'mapping_fields' => 'typename',
            'foreign_key' => 'filetype',
            'as_fields' => 'typename',
        )
    );

}
