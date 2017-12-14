<?php

namespace Home\Common\Taglib;

use Think\Template\TagLib;

defined('THINK_PATH') or exit();

//namespace Think\Template\TagLib;
class My extends TagLib {

    // 定义标签
    protected $tags = array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'arclist' => array('attr' => 'id,field,order,where,key,mod,empty'),
        'list' => array('attr' => 'id,field,order,where,key,mod,empty,modelid,catid,count'),
        'addon' => array('attr' => 'id,addonid'),
        'pagelist' => array('attr' => 'listno,where,tail,html,lang', 'close' => 0),
        'breadcrumb' => array('attr' => 'topid,homedir,homename', 'close' => 0),
        'channelartlist' => array('attr' => 'id,topid', 'level' => 3),
        'channel' => array('attr' => 'id'),
        'prenext' => array('attr' => 'id,type,empty'),
    );

    public function _arclist($tag, $content) {
        $id = isset($tag['id']) ? $tag['id'] : 'vo';
        $field = isset($tag['field']) ? $tag['field'] : '*';
        $order = isset($tag['order']) ? $tag['order'] : 'pubdate desc,id desc';
        $key = !empty($tag['key']) ? $tag['key'] : 'i';
        $mod = isset($tag['mod']) ? $tag['mod'] : '2';
        $where = isset($tag['where']) ? $tag['where'] : '';
        $empty = isset($tag['empty']) ? $tag['empty'] : '';

        $parseStr = '<?php ';
        $parseStr .= '$_result=_arclist($cate,"' . $field . '","' . $order . '",$page,"' . $where . '");';
        //$parseStr .= 'dump($_result);';
        $parseStr .= 'if(is_array($_result)): $' . $key . ' = 0;';
        $parseStr .= '$__LIST__ = $_result;';
        $parseStr .= 'if( count($__LIST__)==0 ) : echo "' . $empty . '" ;';
        $parseStr .= 'else: ';
        $parseStr .= 'foreach($__LIST__ as $key=>$' . $id . '): ';
        $parseStr .= '$mod = ($' . $key . ' % ' . $mod . ' );';
        $parseStr .= '++$' . $key . ';?>';
        $parseStr .= $this->tpl->parse($content);
        $parseStr .= '<?php endforeach; endif; else: echo "' . $empty . '" ;endif; ?>';
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    public function _list($tag, $content) {
        $id = isset($tag['id']) ? $tag['id'] : 'vo';
        $field = isset($tag['field']) ? $tag['field'] : '*';
        $order = isset($tag['order']) ? $tag['order'] : 'pubdate desc,id desc';
        $key = !empty($tag['key']) ? $tag['key'] : 'i';
        $mod = isset($tag['mod']) ? $tag['mod'] : '2';
        $where = isset($tag['where']) ? $tag['where'] : '';
        $empty = isset($tag['empty']) ? $tag['empty'] : '';
        $modelid = isset($tag['modelid']) ? $tag['modelid'] : '0';
        $catid = isset($tag['catid']) ? $tag['catid'] : '0';
        $count = isset($tag['count']) ? $tag['count'] : '10';
        if ($modelid == 0) {
            return;
        } else {
            $parseStr = '<?php ';
            $parseStr .= '$_result=_list("' . $modelid . '","' . $catid . '","' . $field . '","' . $order . '",' . $count . ',"' . $where . '");';
            $parseStr .= 'if(is_array($_result)): $' . $key . ' = 0;';
            $parseStr .= '$__LIST__ = $_result;';
            $parseStr .= 'if( count($__LIST__)==0 ) : echo "' . $empty . '" ;';
            $parseStr .= 'else: ';
            $parseStr .= 'foreach($__LIST__ as $key=>$' . $id . '): ';
            $parseStr .= '$mod = ($' . $key . ' % ' . $mod . ' );';
            $parseStr .= '++$' . $key . ';?>';
            $parseStr .= $this->tpl->parse($content);
            $parseStr .= '<?php endforeach; endif; else: echo "' . $empty . '" ;endif; ?>';
            if (!empty($parseStr)) {
                return $parseStr;
            }
            return;
        }
    }

    public function _pagelist($tag) {
        $listno = isset($tag['listno']) ? $tag['listno'] : '5'; //每侧显示的按钮数
        $where = isset($tag['where']) ? $tag['where'] : '';
        $tail = isset($tag['tail']) ? $tag['tail'] : '';
        $html = isset($tag['html']) ? $tag['html'] : '1';
        $lang = isset($tag['lang']) ? $tag['lang'] : '0';
        $page = '页';
        if($lang){
            $page = 'Page(s)';
        }
        if ($html) {
            if ($tail) {
                $tail = '?' . $tag['tail'];
            }
            $parseStr = '<ul class="pagelist">';
            $parseStr .= '<?php ';
            $parseStr .= '$pages=_pagelist($cate,"' . $where . '");';
            $parseStr .= 'if($page<=$pages):';
            $parseStr .= 'if($page==1):?>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-step-backward"></span> </li>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-chevron-left"></span> </li>';
            $parseStr .= '<?php else:?>';
            $parseStr .= '<li><a href="{$cate.folderurl}/index.html' . $tail . '"> <span class="glyphicon glyphicon-step-backward"></span> </a></li>';
            $parseStr .= '<li><a href="{$cate.folderurl}/page-{$page-1}.html' . $tail . '"> <span class="glyphicon glyphicon-chevron-left"></span> </a></li>';
            $parseStr .= '<?php endif;';
            $parseStr .= '$start = $page-' . $listno . ';';
            $parseStr .= 'if($start<=0):$start=1;endif;';
            $parseStr .= '$end = $page+' . $listno . ';';
            $parseStr .= 'if($end>$pages):$end=$pages;endif;';
            $parseStr .= 'for($i=$start; $i<=$end; $i++){ ';
            $parseStr .= 'if($page==$i):?>';
            $parseStr .= '<li class="active"> {$i} </li>';
            $parseStr .= '<?php else:?>';
            $parseStr .= '<li><a href="{$cate.folderurl}/page-{$i}.html' . $tail . '"> {$i} </a></li>';
            $parseStr .= '<?php endif;};';
            $parseStr .= 'if($page==$pages):?>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-chevron-right"></span> </li>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-step-forward"></span> </li>';
            $parseStr .= '<?php else:?>';
            $parseStr .= '<li><a href="{$cate.folderurl}/page-{$page+1}.html' . $tail . '"> <span class="glyphicon glyphicon-chevron-right"></span> </a></li>';
            $parseStr .= '<li><a href="{$cate.folderurl}/page-{$pages}.html' . $tail . '"> <span class="glyphicon glyphicon-step-forward"></span> </a></li>';
            $parseStr .= '<?php endif;?>';
            $parseStr .= '<li class="info">{$pages} '.$page.'</li>';
            $parseStr .= '<?php endif;?>';
            $parseStr .= '</ul>';
        } else {
            if ($tail) {
                $tail = '&' . $tag['tail'];
            }
            $parseStr = '<ul class="pagelist">';
            $parseStr .= '<?php ';
            $parseStr .= '$pages=_pagelist($cate,"' . $where . '");';
            $parseStr .= 'if($page<=$pages):';
            $parseStr .= 'if($page==1):?>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-step-backward"></span> </li>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-chevron-left"></span> </li>';
            $parseStr .= '<?php else:?>';
            $parseStr .= '<li><a href="{$cate.folderurl}?page=1' . $tail . '"> <span class="glyphicon glyphicon-step-backward"></span> </a></li>';
            $parseStr .= '<li><a href="{$cate.folderurl}?page={$page-1}' . $tail . '"> <span class="glyphicon glyphicon-chevron-left"></span> </a></li>';
            $parseStr .= '<?php endif;';
            $parseStr .= '$start = $page-' . $listno . ';';
            $parseStr .= 'if($start<=0):$start=1;endif;';
            $parseStr .= '$end = $page+' . $listno . ';';
            $parseStr .= 'if($end>$pages):$end=$pages;endif;';
            $parseStr .= 'for($i=$start; $i<=$end; $i++){ ';
            $parseStr .= 'if($page==$i):?>';
            $parseStr .= '<li class="active"> {$i} </li>';
            $parseStr .= '<?php else:?>';
            $parseStr .= '<li><a href="{$cate.folderurl}?page={$i}' . $tail . '"> {$i} </a></li>';
            $parseStr .= '<?php endif;};';
            $parseStr .= 'if($page==$pages):?>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-chevron-right"></span> </li>';
            $parseStr .= '<li> <span class="glyphicon glyphicon-step-forward"></span> </li>';
            $parseStr .= '<?php else:?>';
            $parseStr .= '<li><a href="{$cate.folderurl}?page={$page+1}' . $tail . '"> <span class="glyphicon glyphicon-chevron-right"></span> </a></li>';
            $parseStr .= '<li><a href="{$cate.folderurl}?page={$pages}' . $tail . '"> <span class="glyphicon glyphicon-step-forward"></span> </a></li>';
            $parseStr .= '<?php endif;?>';
            $parseStr .= '<li class="info">{$pages} '.$page.'</li>';
            $parseStr .= '<?php endif;?>';
            $parseStr .= '</ul>';
        }
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    public function _addon($tag, $content) {
        $id = isset($tag['id']) ? $tag['id'] : 'vo';
        $addonid = $tag['addonid'];
        $key = !empty($tag['key']) ? $tag['key'] : 'i';
        $empty = isset($tag['empty']) ? $tag['empty'] : '';
        $parseStr = '<?php ';
        $parseStr .= '$' . $id . '=_addon("' . $addonid . '");';
        $parseStr .= 'if($' . $id . ') : ?>';
        $parseStr .= $this->tpl->parse($content);
        $parseStr .= '<?php else:echo "" ;';
        $parseStr .= 'endif;?>';
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    public function _prenext($tag, $content) {
        //id,type,empty
        $id = isset($tag['id']) ? $tag['id'] : 'vo';
        $type = $tag['type'] == 'next' ? 'next' : 'pre';
        $empty = isset($tag['empty']) ? $tag['empty'] : '';
        $parseStr = '<?php ';
        $parseStr .= '$' . $id . '=_prenext($article,"' . $type . '");';
        $parseStr .= 'if($' . $id . ') : ?>';
        $parseStr .= $this->tpl->parse($content);
        $parseStr .= '<?php else:echo "' . $empty . '" ;';
        $parseStr .= 'endif;?>';
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    public function _breadcrumb($tag, $content) {
        $id = isset($tag['id']) ? $tag['id'] : 'vo';
        $topid = isset($tag['topid']) ? $tag['topid'] : '0';
        $key = !empty($tag['key']) ? $tag['key'] : 'i';
        $homedir = isset($tag['homedir']) ? $tag['homedir'] : '';
        $homename = isset($tag['homename']) ? $tag['homename'] : '';
        $class = isset($tag['class']) ? $tag['class'] : '';
        $parseStr = '<?php ';
        $parseStr .= '$_result=_breadcrumb($cate,' . $topid . ',"' . $homedir . '","' . $homename . '");';
        $parseStr .= 'if(is_array($_result)): $' . $key . ' = 0;';
        $parseStr .= '$__LIST__ = $_result;';
        $parseStr .= 'if(count($__LIST__)==0) : echo "" ;';
        $parseStr .= 'else:?>';
        if ($content) {
            $parseStr .= '<?php foreach($__LIST__ as $key=>$' . $id . '):if($' . $id . '["status"]==0){continue;};?>';
            $parseStr .= $this->tpl->parse($content);
            $parseStr .= '<?php endforeach;?>';
        } else {
            $parseStr .= '<ol class="breadcrumb ' . $class . '">';
            $parseStr .= '<?php foreach($__LIST__ as $key=>$' . $id . '):if($' . $id . '["status"]==0){continue;};?>';
            $parseStr .= '<li><a href="{$' . $id . '.folderurl}" target="{$' . $id . '.urltarget}">{$' . $id . '.category}</a></li>';
            $parseStr .= '<?php  endforeach; ?>';
            $parseStr .= '</ol>';
        }
        $parseStr .= '<?php endif; else: echo "" ;endif; ?>';
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    public function _channelartlist($tag, $content) {
        $id = isset($tag['id']) ? $tag['id'] : 'vo';
        $son = isset($tag['son']) ? $tag['son'] : '0';
        $topid = isset($tag['topid']) ? $tag['topid'] : '0';
        $key = !empty($tag['key']) ? $tag['key'] : 'i';
        $parseStr = '<?php ';
        $parseStr .= '$_result=_channelartlist($cate,' . $topid . ',' . $son . ');';
        $parseStr .= 'if(is_array($_result)): $' . $key . ' = 0;';
        $parseStr .= '$__LIST__ = $_result;';
        $parseStr .= 'if(count($__LIST__)==0) : echo "" ;';
        $parseStr .= 'else: ?>';
        if ($content) {
            $parseStr .= '<?php foreach($__LIST__ as $key=>$' . $id . '):?>';
            $parseStr .= $this->tpl->parse($content);
            $parseStr .= '<?php endforeach;?>';
        } else {
            $parseStr .= '<ul>';
            $parseStr .= '<?php foreach($__LIST__ as $key=>$' . $id . '):?>';
            $parseStr .= '<li data-id="{$' . $id . '.id}" data-parent="{$' . $id . '.parentid}"><a href="{$' . $id . '.folderurl}">{$' . $id . '.category}</a></li>';
            $parseStr .= '<?php endforeach;?>';
            $parseStr .= '</ul>';
        }
        $parseStr .= '<?php endif; else: echo "" ;endif; ?>';
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

    public function _channel($tag, $content) {
        $id = isset($tag['id']) ? $tag['id'] : '0';
        $parseStr = '<?php ';
        if ($id) {
            $parseStr .= '$channel=_channel(' . $id . ');';
        } else {
            $parseStr .= '$channel=_channel($cate[\'id\']);';
        }
        $parseStr .= 'if($channel) : ?>';
        $parseStr .= $this->tpl->parse($content);
        $parseStr .= '<?php else:echo "" ;';
        $parseStr .= 'endif;?>';
        if (!empty($parseStr)) {
            return $parseStr;
        }
        return;
    }

}

?>