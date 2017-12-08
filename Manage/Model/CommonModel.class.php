<?php

namespace Manage\Model;

use Think\Model\RelationModel;

class CommonModel extends RelationModel {

    public function gridDatas($Model, $fields, $where, $order, $listRows, $firstRow) {
        //$datas = $Model->field($fields)->page($firstRow, $listRows)->select();
        //dump($datas);

        if (isset($fields)) {
            $Model = $Model->field($fields);
        }
        if (isset($where)) {
            $Model = $Model->where($where);
        }
        if (isset($order)) {
            $Model = $Model->order($order);
        } else {
            $Model = $Model->order('id desc');
        }
        if (isset($firstRow) && isset($listRows)) {
            $Model = $Model->limit($firstRow . ',' . $listRows);
        } else if (isset($listRows) && empty($firstRow)) {
            $Model = $Model->limit($listRows);
        }
        if ($relation) {
            $Model->relation(true);
        }
        $datas['rows'] = $Model->select();
        //dump(M()->getLastSQL());

        if (isset($firstRow)) {
            if (isset($where)) {
                $Model = $Model->where($where);
            }
            $datas['total'] = $Model->count();

            if ($datas['total'] == 0) {
                $datas['rows'] = array();
                return $datas;
            }
        } else {
            $datas = $datas['rows'];
        }
        return $datas;
    }

}
