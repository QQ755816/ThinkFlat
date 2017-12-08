<?php
function is_login(){
	if(session('user')){
		return true;	
	}
	return false;
}
function percent($val,$total){
	return round($val/$total*100,2);
}
function opuser(){
	return session('user.userid');//返回当前登录ID的userid
}
function jsonparse($val){
	$val = preg_replace('/\'/','\\\'',$val);
	$val = preg_replace("/\\\\\\\\/",'\\\\\\\\\\\\\\\\',$val);
	$val = preg_replace("/\\\\r/",'\\\\\\\\r',$val);
	$val = preg_replace("/\\\\n/",'\\\\\\\\n',$val);
	return $val;
}
function guid(){
	if(function_exists('com_create_guid')){
		return com_create_guid();
	}else{
		mt_srand((double)microtime()*10000);
		$charid = strtoupper(md5(uniqid(rand(), true)));
		$hyphen = chr(45);// "-"
		//$uuid = chr(123)// "{"
		$uuid = substr($charid, 0, 8).$hyphen
		.substr($charid, 8, 4).$hyphen
		.substr($charid,12, 4).$hyphen
		.substr($charid,16, 4).$hyphen
		.substr($charid,20,12);
		//.chr(125);// "}"
		return $uuid;
	}
}
//中文分词
function get_keywords($str){
//	Vendor('Pscws4.phpanalysis#class');
//	$pa = new \PhpAnalysis('utf-8', 'utf-8', false);
//	$pa::$loadInit = false;
//	$pa->LoadDict();
//	$pa->SetSource($str);
//	$pa->StartAnalysis( false );
//	$tags = $pa->GetFinallyResult();
//	return $tags;
	Vendor('Pscws4.pscws4#class');
	$pscws = new PSCWS4('utf8');
	$pscws->set_dict('./Public/scws/dict.utf8.xdb');
	$pscws->set_rule('./Public/scws/rules.utf8.ini');
	$pscws->set_ignore(true);
	$pscws->send_text($str);
	$words = $pscws->get_tops(5);
	$tags = array();
	foreach ($words as $val) {
		$tags[] = $val['word'];
	}
	$pscws->close();
	return join(',',$tags);
}