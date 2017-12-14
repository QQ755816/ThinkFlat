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
    
    <title>validate</title>
<div id="main">
    <script>
        $(document).ready(function () {
            $('.form-validate').each(function () {
                var id = $(this).attr('id');
                $("#" + id).validate({
                    errorElement: 'span',
                    errorClass: 'help-block error',
                    errorPlacement: function (error, element) {
                        element.parents('.controls').append(error);
                    },
                    highlight: function (label) {
                        $(label).closest('.control-group').removeClass('error success').addClass('error');
                    },
                    success: function (label) {
                        label.addClass('valid').closest('.control-group').removeClass('error success').addClass('success');
                    }
                });
            });
        })
    </script>
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1><?php echo I('get.id');?> Validation<?php echo ($tpl); ?></h1>
            </div>
            <div class="pull-right">
                <ul class="minitiles">
                    <li class="grey"> <a href="#"><i class="icon-cogs"></i></a> </li>
                    <li class="lightgrey"> <a href="#"><i class="icon-globe"></i></a> </li>
                </ul>
                <ul class="stats">
                    <li class="satgreen"> <i class="icon-money"></i>
                        <div class="details"> <span class="big">$343,12</span> <span>Balance</span> </div>
                    </li>
                    <li class="lightred"> <i class="icon-calendar"></i>
                        <div class="details"> <span class="big">February 28, 2017</span> <span>Tuesday, 9:17</span> </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li> <a href="more-login.html">Home</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="forms-basic.html">Forms</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="forms-validation.html">Validation</a> </li>
            </ul>
            <div class="close-bread"> <a href="#"><i class="icon-remove"></i></a> </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3> <i class="icon-ok"></i> Basic validation </h3>
                    </div>
                    <div class="box-content">
                        <form action="#" method="POST" class="form-horizontal form-validate" id="bb" novalidate>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Text input</label>
                                <div class="controls">
                                    <input type="text" name="textfield" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="emailfield" class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" name="emailfield" id="emailfield" class="input-xlarge" data-rule-email="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="pwfield" class="control-label">Password</label>
                                <div class="controls">
                                    <input type="text" name="pwfield" id="pwfield" class="input-xlarge" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="confirmfield" class="control-label">Confirm password</label>
                                <div class="controls">
                                    <input type="text" name="confirmfield" id="confirmfield" class="input-xlarge" data-rule-equalto="#pwfield" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="policy" class="control-label">Agree our policy</label>
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" name="policy" value="agree" data-rule-required="true">
                                        I agree the policy. </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3> <i class="icon-ok"></i> More validation elements </h3>
                    </div>
                    <div class="box-content">
                        <form action="#" method="POST" class='form-horizontal form-validate' id="aaa">
                            <div class="control-group">
                                <label for="textfield" class="control-label">Select</label>
                                <div class="controls">
                                    <select name="aaa" id="bbb" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                        <option value="4">Option-4</option>
                                        <option value="5">Option-5</option>
                                        <option value="6">Option-6</option>
                                        <option value="7">Option-7</option>
                                        <option value="8">Option-8</option>
                                        <option value="9">Option-9</option>
                                        <option value="10">Option-10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="urlfield" class="control-label">URL <small>with http://</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter valid URL" name="urlfield" id="urlfield" data-rule-url="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="minlengthfield" class="control-label">Minlength <small>minlength: 3</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="At least 3 characters" name="minlengthfield" id="minlengthfield" data-rule-minlength="3" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="maxlengthfield" class="control-label">Maxlength <small>maxlength: 6</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="At least 3 characters" name="maxlengthfield" id="maxlengthfield" data-rule-maxlength="6" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="datefield" class="control-label">Date <small>YYYY-MM-DD</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="Only numbers" name="datefield" id="datefield" data-rule-dateISO="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="numberfield" class="control-label">Number</label>
                                <div class="controls">
                                    <input type="text" placeholder="Only numbers" name="numberfield" id="numberfield" data-rule-number="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="digitsfield" class="control-label">Digits</label>
                                <div class="controls">
                                    <input type="text" placeholder="Only digits" name="digitsfield" id="digitsfield" data-rule-digits="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="creditcardfield" class="control-label">Creditcard <small>try 446-667-651</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter valid creditcard" name="creditcardfield" id="creditcardfield" data-rule-creditcard="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>