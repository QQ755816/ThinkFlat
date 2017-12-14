<?php

namespace Manage\Model;

class CertificatesModel extends CommonModel {

    protected $_validate = array(
        // array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        // 验证条件			验证时间
        // 0 存在字段就验证（默认）		1 新增数据时候验证
        // 1 必须验证			2 编辑数据时候验证
        // 2 值不为空的时候验证		3 全部情况下验证 （默认）
        array('company', 'require', '公司信息必须设置', 1, '', 3),
        array('documentid', '', '证书编号已经存在！', 1, 'unique', 3),
        array('documentid', 'require', '证书编号必须设置', 1, '', 3),
        array('certficate', 'require', '证书文件必须设置', 1, '', 3),
    );

//    protected $_link = array(
//        'certificatetypes' => array(
//            'mapping_type' => self::BELONGS_TO,
//            'mapping_fields' => 'typename',
//            'foreign_key' => 'filetype',
//            'as_fields' => 'typename',
//        )
//    );

    public function gridDatas($fields, $where, $order, $listRows, $firstRow) {
        if (!$fields) {
            $fields = $this->fields;
            unset($fields ['_type'], $fields ['_pk']);
        }
        $datas = parent::gridDatas($this, $fields, $where, $order, $listRows, $firstRow);//$this->relation(true)
        if ($datas['rows']) {
            $types = array();
            foreach ($datas['rows'] as $key => $data) {
                if (!in_array($data['filetype'], $types)) {
                    array_push($types, $data['filetype']);
                }
            }
            $map['id'] = array('in', $types);
            $certtypes = D('Certtypes')->where($map)->field('id,typename')->select();
            foreach ($datas['rows'] as $k => $data) {
                foreach ($certtypes as $t => $type) {
                    if ($type['id'] == $data['filetype']) {
                        $datas['rows'][$k]['typename'] = $type['typename'];
                    }
                }
            }
        }
        return $datas;
    }

}
