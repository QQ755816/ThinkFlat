<?php

namespace Manage\Model;

class UsersModel extends CommonModel {

    protected $fields = array('id', 'status', 'nickname', 'username', 'password', 'salt');
    protected $insertFields = array('status', 'nickname', 'username', 'password', 'salt');
    protected $updateFields = array('status', 'nickname', 'username', 'password');
    protected $_validate = array(
        //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        //验证条件					验证时间
        //0 存在字段就验证（默认）		1 新增数据时候验证
        //1 必须验证					2 编辑数据时候验证
        //2 值不为空的时候验证			3 全部情况下验证 （默认）
        array('username', 'require', '用户名必须设置', 1, '', 1),
        array('username', '', '帐号名称已经存在！', 0, 'unique', 3),
        array('password', 'require', '模型名称必须设置', 2, '', 3),
        array('salt', 'require', '模型名称必须设置', 2, '', 1),
    );

    public function gridDatas($fields, $where, $order, $listRows, $firstRow) {
        if (!$fields) {
            $fields = $this->fields;
        }
        $datas = parent::gridDatas($this, $fields, $where, $order, $listRows, $firstRow);
        return $datas;
    }

}
