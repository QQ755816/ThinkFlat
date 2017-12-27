<?php

return array(
    /* 调试 */
    //'SHOW_PAGE_TRACE' => true,
    /* 模块相关配置 */
    'DEFAULT_MODULE' => 'USER', //默认模块
    'MODULE_DENY_LIST' => array('Common', 'Runtime'),
    /* URL配置 */
    'URL_MODEL' => 1, //URL模式
    'VAR_URL_PARAMS' => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR' => '/', //PATHINFO URL分割符
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_HTML_SUFFIX' => 'html|js|json', //URL后缀
    /* session */
    'SESSION_AUTO_START' => true, //是否开启session
    'SESSION_OPTIONS' => array('path' => CACHE_MAIN . 'sess/', 'expire' => 7200),
    /* 读取字段自动映射 */
    'READ_DATA_MAP' => true,
    'DEFAULT_FILTER' => 'trim,htmlspecialchars,strip_tags',
    //加载其他配置
    'LOAD_EXT_CONFIG' => 'db,mail.config',
);
