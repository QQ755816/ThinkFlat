<?php

namespace Manage\Model;

class CerttypesModel extends CommonModel {

    protected $tableName = 'certificatetypes';
    protected $_validate = array(
        array('typename', '', '证书类型已经存在！', 1, 'unique', 3),
        array('typename', 'require', '证书类型必须设置', 1, '', 3),
    );

    public function gridDatas($fields, $where, $order, $listRows, $firstRow) {
        if (!$fields) {
            $fields = $this->fields;
            unset($fields ['_type'], $fields ['_pk']);
        }
        $datas = parent::gridDatas($this, $fields, $where, $order, $listRows, $firstRow);
        return $datas;
    }

}
