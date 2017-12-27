<?php

namespace Home\Model;

class CertificatesModel extends CommonModel {

    protected $_link = array(
        'substances' => array(
            'class_name' => 'certificatesubs_view',
            'mapping_type' => self::HAS_MANY,
            'foreign_key' => 'certid',
            'mapping_key' => 'id',
            'mapping_fields' => 'cas,ec,ecname,regtype,regcode,regdeadline,tonrange,ton,subuse,tonuse',
            'mapping_order' => 'id asc'
        ),
        'downstreams' => array(
            'class_name' => 'certificateparty',
            'mapping_type' => self::HAS_MANY,
            'foreign_key' => 'certid',
            'mapping_key' => 'id',
            'mapping_fields' => 'roletype,compid,company,address,tel,fax,contacter,email',
            'mapping_order' => 'id asc'
        )
    );
    protected $insertFields = array('createat', 'compid', 'certuuid', 'certtype', 'certno', 'year', 'month', 'extendtype', 'extendinfo', 'status', 'step', 'remark', 'file', 'rejectby');
    protected $updateFields = array('year', 'month', 'extendtype', 'extendinfo', 'status', 'step', 'remark', 'file', 'rejectby');
    protected $_validate = array(
        //array(验证字段,验证规则,错误提示,[验证条件 0存在/1必须/2不为空,附加规则,验证时间 1新增/2编辑/3全部])
        array('compid', 'require', '{%COMPANYREQUIRED}', 1, '', 3),
        array('catetype', 'require', '{%CERTTYPEREQUIRED}', 1, '', 3),
        array('year', 'require', '{%CERTYEARREQUIRED}', 1, '', 3),
    );

    public function gridDatas($fields, $where, $order, $listRows, $firstRow) {
        $datas = parent::gridDatas($this->relation(true), $fields, $where, $order, $listRows, $firstRow);
        return $datas;
    }

}
