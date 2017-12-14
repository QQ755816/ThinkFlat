<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" /><!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" /><!-- Apple devices fullscreen -->
    <title><?php echo ($title); ?></title>
    <!-- Jquery -->
<script src="/Public/assets/js/jquery.min.js"></script>
<!-- Jquery perfect scrollbar -->
<link href="/Public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<script src="/Public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Jquery pjax -->
<script src="/Public/assets/plugins/pjax/jquery.pjax.js"></script>
<!-- Jquery pace -->
<script src="/Public/assets/plugins/pace/pace.min.js"></script>
<link href="/Public/assets/plugins/pace/themes/green/pace-theme-flat-top.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Font -->
<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap  editable -->
<script src="/Public/assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script>
<link href="/Public/assets/plugins/bootstrap-editable/css/bootstrap-editable.css" type="text/css" rel="stylesheet"/>
<link href="/Public/assets/plugins/inputs-ext/address/address.css" type="text/css" rel="stylesheet"/>
<script src="/Public/assets/plugins/inputs-ext/address/address.js"></script>
<!-- dataTables -->
<link href="/Public/assets/plugins/datatable/TableTools.css" type="text/css" rel="stylesheet"/>
<script src="/Public/assets/plugins/datatable/jquery.dataTables.min.js"></script>
<!-- Theme CSS -->
<link href="/Public/assets/css/style.css" type="text/css" rel="stylesheet" />
<!-- App Script -->
<script src="/Public/assets/js/app.js"></script>
<!-- Favicon -->
<link href="/Public/assets/images/favicon.ico" rel="shortcut icon" />
<!-- Apple devices Homescreen icon -->
<link href="/Public/assets/images/apple-touch-icon-precomposed.png" rel="apple-touch-icon-precomposed" />
</head>
<body data-layout-sidebar="fixed" data-layout-topbar="fixed">
<div class="navigation">
    <div class="container-fluid"> 
        <a data-pjax="true" href="/" class="logo">RCUM</a> 
        <a href="javascript:;" class="toggle-nav">
            <i class="fa fa-bars"></i>
        </a>
        <ul class="main-nav">
            <li> 
                <a data-pjax="true" href="/">首页</a> 
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> 
                    <span>物质信息</span> 
                    <span class="caret"></span> 
                </a>
                <ul class="dropdown-menu">
                    <li> <a data-pjax="true" href="/flat.php/substance/prereg.html">预注册物质</a> </li>
                    <li> <a data-pjax="true" href="/flat.php/substance/reg.html">注册物质</a> </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'> 
                    <span>吨位涵盖证明</span> 
                    <span class="caret"></span> 
                </a>
                <ul class="dropdown-menu">
                    <li> <a data-pjax='true' href="javascript:;">直接吨位涵盖证明</a> </li>
                    <li> <a data-pjax='true' href="javascript:;">三方吨位涵盖证明</a> </li>
                    <li> <a data-pjax='true' href="javascript:;">间接吨位涵盖证明</a> </li>
                </ul>
            </li>
            <li class="dropdown"> 
                <a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'> 
                    <span>相关文件</span> 
                    <span class="caret"></span> 
                </a>
                <ul class="dropdown-menu">
                    <li> <a data-pjax='true' href="javascript:;">物质文件</a> </li>
                    <li> <a data-pjax='true' href="javascript:;">其他文件</a> </li>
                </ul>
            </li>
            <li> <a data-pjax='true' href="javascript:;">公司信息</a> </li>
        </ul>
        <div class="icon-nav">
            <div class='dropdown icon-msg'>
                <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                    <i class="fa fa-envelope fa-lg"></i><span class="label label-lightred">4</span>
                </a>
                <ul class="dropdown-menu pull-right message-ul">
                    <li> <a href="#"> <img class="img-circle" src="/Public/assets/images/users/user-1.jpg" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message"> Lorem ipsum Commodo quis Commodo quis nisi ... </div>
                            </div>
                        </a> </li>
                    <li> <a href="#"> <img class="img-circle" src="/Public/assets/images/users/user-2.jpg" alt="">
                            <div class="details">
                                <div class="name">John Doedoe</div>
                                <div class="message"> Ut ad laboris est anim ut ... </div>
                            </div>
                        </a> </li>
                    <li> <a href="#"> <img class="img-circle" src="/Public/assets/images/users/user-3.jpg" alt="">
                            <div class="details">
                                <div class="name">Bob Doe</div>
                                <div class="message"> Excepteur Duis magna dolor! </div>
                            </div>
                        </a> </li>
                    <li> <a href="components-messages.html" class='more-messages'>Go to Message center <i class="fa fa-arrow-right"></i></a> </li>
                </ul>
            </div>
            <div class="dropdown language-select">
                <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                    <img src="/Public/assets/images/flags/us.gif" alt="">
                    <span>English</span>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li> <a href="#"><img src="/Public/assets/images/flags/us.gif" alt=""><span>English</span></a> </li>
                    <li> <a href="#"><img src="/Public/assets/images/flags/cn.gif" alt=""><span>中文</span></a> </li>
                </ul>
            </div>
            <div class="dropdown icon-user">
                <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                    John Doe
                    <img class="user-photo img-circle" src="/Public/assets/images/users/user-avatar.jpg" alt="">
                </a>
                <ul class="dropdown-menu pull-right">
                    <li> <a href="more-userprofile.html">Edit profile</a> </li>
                    <li> <a href="#">Account settings</a> </li>
                    <li> <a href="more-login.html">Sign out</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="fixnavigation"></div>
<div class="sidenav">
    <form action="search-results.html" method="post" class='search-form'>
        <div class="search-pane">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
    <div class="subnav">
        <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="fa fa-angle-down"></i><span>物质信息</span></a> </div>
        <ul class="subnav-menu">
            <li> <a data-pjax='true' href="<?php echo U('substance/prereg');?>">预注册物质</a> </li>
            <li> <a data-pjax='true' href="<?php echo U('substance/reg');?>">注册物质</a> </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="fa fa-angle-down"></i><span>吨位涵盖证明</span></a> </div>
        <ul class="subnav-menu">
            <li> <a data-pjax='true' href="<?php echo U('certificate/direct');?>">直接吨位涵盖证明</a> </li>
            <li> <a data-pjax='true' href="<?php echo U('certificate/indirect');?>">三方吨位涵盖证明</a> </li>
            <li> <a data-pjax='true' href="<?php echo U('certificate/direct');?>">间接吨位涵盖证明</a> </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="fa fa-angle-down"></i><span>相关文件</span></a> </div>
        <ul class="subnav-menu">
            <li> <a data-pjax='true' href="<?php echo U('files/linktosubstance');?>">物质文件</a> </li>
            <li> <a data-pjax='true' href="<?php echo U('files/linktocompany');?>">其他文件</a> </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title"> <a href="javascript:;" class='toggle-subnav'><i class="fa fa-angle-down"></i><span>账户设置</span></a></a> </div>
        <ul class="subnav-menu">
            <li> <a data-pjax='true' href="<?php echo U('company/index');?>">公司信息</a> </li>
            <li> <a data-pjax='true' href="<?php echo U('company/account');?>">用户信息</a> </li>
        </ul>
    </div>
</div>

    <?php if($pjax): ?><title><?php echo ($title); ?></title><?php endif; ?>
<div id="mainarea"></div>

</body>
</html>