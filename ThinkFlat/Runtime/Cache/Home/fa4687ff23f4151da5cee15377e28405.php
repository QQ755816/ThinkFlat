<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" /><!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" /><!-- Apple devices fullscreen -->
    <title><?php echo ($title); ?></title>
    <script src="/Public/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="/Public/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script src="/Public/js/plugins/validation/jquery.validate.min.js"></script>
<script src="/Public/js/plugins/pjax/jquery.pjax.js"></script>
<script src="/Public/js/plugins/pace/pace.min.js"></script>
<link rel="stylesheet" href="/Public/js/plugins/pace/themes/green/pace-theme-flat-top.css">
<!-- Bootstrap -->
<script src="/Public/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
<!-- editable -->
<script src="/Public/js/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script>
<link href="/Public/js/plugins/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script type="text/javascript" src="/Public/js/plugins/momentjs/jquery.moment.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/js/plugins/inputs-ext/address/address.css"/>
<script type="text/javascript" src="/Public/js/plugins/inputs-ext/address/address.js"></script>
<!-- dataTables -->
<link rel="stylesheet" type="text/css" href="/Public/css/plugins/datatable/TableTools.css"/>
<script src="/Public/js/plugins/datatable/jquery.dataTables.min.js"></script>
<!-- Theme scripts -->
<script src="/Public/js/app.js"></script>
<!-- Theme CSS -->
<link rel="stylesheet" href="/Public/css/themes.css">
<link rel="stylesheet" href="/Public/css/style.css">
<!-- Favicon -->
<link rel="shortcut icon" href="/Public/img/favicon.ico" />
<!-- Apple devices Homescreen icon -->
<link rel="apple-touch-icon-precomposed" href="/Public/img/apple-touch-icon-precomposed.png" />
</head>
<body data-layout-sidebar="fixed" data-layout-topbar="fixed">
<div id="navigation">
    <div class="container-fluid"> <a href="#" id="brand">RCUM</a> <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
        <ul class='main-nav'>
            <li> <a data-pjax='true' href="/"> <span>首页</span> </a> </li>
            <li> <a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'> <span>物质信息</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a data-pjax='true' href="<?php echo U('substance/prereg');?>">预注册物质</a> </li>
                    <li> <a data-pjax='true' href="<?php echo U('substance/reg');?>">注册物质</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'> <span>吨位涵盖证明</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a data-pjax='true' href="<?php echo U('certificate/direct');?>">直接吨位涵盖证明</a> </li>
                    <li> <a data-pjax='true' href="<?php echo U('certificate/indirect');?>">三方吨位涵盖证明</a> </li>
                    <li> <a data-pjax='true' href="<?php echo U('certificate/direct');?>">间接吨位涵盖证明</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'> <span>相关文件</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a data-pjax='true' href="<?php echo U('files/linktosubstance');?>">物质文件</a> </li>
                    <li> <a data-pjax='true' href="<?php echo U('files/linktocompany');?>">其他文件</a> </li>
                </ul>
            </li>
            <li> <a data-pjax='true' href="<?php echo U('company');?>">公司信息</a> </li>
        </ul>
        <div class="user">
            <ul class="icon-nav">
                <li class='dropdown'> <a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
                    <ul class="dropdown-menu pull-right message-ul">
                        <li> <a href="#"> <img src="/Public/img/demo/user-1.jpg" alt="">
                                <div class="details">
                                    <div class="name">Jane Doe</div>
                                    <div class="message"> Lorem ipsum Commodo quis nisi ... </div>
                                </div>
                            </a> </li>
                        <li> <a href="#"> <img src="/Public/img/demo/user-2.jpg" alt="">
                                <div class="details">
                                    <div class="name">John Doedoe</div>
                                    <div class="message"> Ut ad laboris est anim ut ... </div>
                                </div>
                                <div class="count"> <i class="icon-comment"></i> <span>3</span> </div>
                            </a> </li>
                        <li> <a href="#"> <img src="/Public/img/demo/user-3.jpg" alt="">
                                <div class="details">
                                    <div class="name">Bob Doe</div>
                                    <div class="message"> Excepteur Duis magna dolor! </div>
                                </div>
                            </a> </li>
                        <li> <a href="components-messages.html" class='more-messages'>Go to Message center <i class="icon-arrow-right"></i></a> </li>
                    </ul>
                </li>
                <li class='dropdown language-select'> <a href="#" class='dropdown-toggle' data-toggle="dropdown"><img src="/Public/img/demo/flags/us.gif" alt=""><span>US</span></a>
                    <ul class="dropdown-menu pull-right">
                        <li> <a href="#"><img src="/Public/img/demo/flags/br.gif" alt=""><span>English</span></a> </li>
                        <li> <a href="#"><img src="/Public/img/demo/flags/de.gif" alt=""><span>中文</span></a> </li>
                    </ul>
                </li>
            </ul>
            <div class="dropdown"> <a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="/Public/img/demo/user-avatar.jpg" alt=""></a>
                <ul class="dropdown-menu pull-right">
                    <li> <a href="more-userprofile.html">Edit profile</a> </li>
                    <li> <a href="#">Account settings</a> </li>
                    <li> <a href="more-login.html">Sign out</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="content">
    <div id="left">
        <form action="search-results.html" method="GET" class='search-form'>
            <div class="search-pane">
                <input type="text" name="search" placeholder="Search here...">
                <button type="submit"><i class="icon-search"></i></button>
            </div>
        </form>
        <div class="subnav">
            <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="icon-angle-down"></i><span>测试</span></a> </div>
            <ul class="subnav-menu">
                <li> <a data-pjax='true' href="/index/tabs">footer</a> </li>
                <li> <a data-pjax='true' href="/index/footer">footer</a> </li>
                <li> <a data-pjax='true' href="/index/plugins">plugins</a> </li>
                <li> <a data-pjax='true' href="/index/validate">validate</a> </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="icon-angle-down"></i><span>物质信息</span></a> </div>
            <ul class="subnav-menu">
                <li> <a data-pjax='true' href="<?php echo U('substance/prereg');?>">预注册物质</a> </li>
                <li> <a data-pjax='true' href="<?php echo U('substance/reg');?>">注册物质</a> </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="icon-angle-down"></i><span>吨位涵盖证明</span></a> </div>
            <ul class="subnav-menu">
                <li> <a data-pjax='true' href="<?php echo U('certificate/direct');?>">直接吨位涵盖证明</a> </li>
                <li> <a data-pjax='true' href="<?php echo U('certificate/indirect');?>">三方吨位涵盖证明</a> </li>
                <li> <a data-pjax='true' href="<?php echo U('certificate/direct');?>">间接吨位涵盖证明</a> </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="icon-angle-down"></i><span>相关文件</span></a> </div>
            <ul class="subnav-menu">
                <li> <a data-pjax='true' href="<?php echo U('files/linktosubstance');?>">物质文件</a> </li>
                <li> <a data-pjax='true' href="<?php echo U('files/linktocompany');?>">其他文件</a> </li>
            </ul>
        </div>
        <div class="subnav">
            <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="icon-angle-down"></i><span>账户设置</span></a></a> </div>
            <ul class="subnav-menu">
                <li> <a data-pjax='true' href="<?php echo U('company/index');?>">公司信息</a> </li>
                <li> <a data-pjax='true' href="<?php echo U('company/account');?>">用户信息</a> </li>
            </ul>
        </div>
    </div>
    
    <title>plugins</title>
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Site with footer<?php echo ($tpl); ?></h1>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li> <a href="/index/index">Home</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="/index/plugins">Plugins</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="plugins-elements.html">Editable elements</a> </li>
            </ul>
            <div class="close-bread">
                <a href="#"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3>
                            <i class="icon-reorder"></i>
                            Basic Widget
                        </h3>
                    </div>
                    <div class="box-content">
                        Content
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>