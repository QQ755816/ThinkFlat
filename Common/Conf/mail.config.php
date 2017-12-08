<?php

return array(
    //邮件配置
    'THINK_EMAIL' => array(
        'SMTP_HOST' => 'smtpdm.aliyun.com', //SMTP服务器
        'SMTP_PORT' => '465', //SMTP服务器端口
        'SMTP_USER' => 'freedoc@auto.cirs-group.com', //SMTP服务器用户名
        'SMTP_PASS' => 'RY1reN51j8', //SMTP服务器密码
        'FROM_EMAIL' => 'freedoc@auto.cirs-group.com', //发件人EMAIL
        'FROM_NAME' => 'CIRS Freedoc', //发件人名称
        'REPLY_EMAIL' => 'info@cirs-group.com', //回复EMAIL（留空则为发件人EMAIL）
        'REPLY_NAME' => 'CIRS', //回复名称（留空则为发件人名称）
    ),
);
