<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 检测PHP版本 Thinkphp需求5.3.0以上版本
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
// 定义安全目录 安全文件
define('DIR_SECURE_FILENAME', 'index.html');
// 网站文件入口位置
define('WEB_ROOT', dirname(__FILE__) . '/');
// 开启调试模式
define('APP_DEBUG',true);
// 定义APP目录
define('APP_PATH','./ThinkFlat/');
// 绑定默认模块 不设置默认为Home
define('BIND_MODULE','Home');
// 运行缓存目录
define('CACHE_MAIN', '../cache/');
define('RUNTIME_PATH', CACHE_MAIN . 'runtime/');
// 引入Thinkphp框架
require '../../cgi-bin/ThinkPHP.php';