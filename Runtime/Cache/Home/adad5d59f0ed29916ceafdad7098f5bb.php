<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" /><!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" /><!-- Apple devices fullscreen -->
        <title>Index</title>
    <!--
 Jquery 
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
 Bootstrap 
<link href="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js" type="text/javascript"></script>
-->
<!-- Jquery -->
<script src="/Public/plugs/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<link href="/Public/plugs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/plugs/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="/Public/plugs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<!-- Jquery perfect scrollbar -->
<link href="/Public/plugs/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<script src="/Public/plugs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Jquery pjax -->
<script src="/Public/plugs/pjax/jquery.pjax.js"></script>
<!-- Jquery pace -->
<script src="/Public/plugs/pace/pace.min.js"></script>
<link href="/Public/plugs/pace/themes/green/pace-theme-flat-top.css" rel="stylesheet">
<!-- Bootstrap  editable -->
<script src="/Public/plugs/bootstrap-editable/js/bootstrap-editable.min.js"></script>
<link href="/Public/plugs/bootstrap-editable/css/bootstrap-editable.css" type="text/css" rel="stylesheet"/>
<link href="/Public/plugs/inputs-ext/address/address.css" type="text/css" rel="stylesheet"/>
<script src="/Public/plugs/inputs-ext/address/address.js"></script>
<!-- datatables -->
<script src="/Public/plugs/datatables/datatables.min.js" type="text/javascript"></script>
<!-- Theme CSS -->
<link href="/Public/assets/css/style.css" type="text/css" rel="stylesheet" />
<link href="/Public/assets/css/table.css" type="text/css" rel="stylesheet" />
<!-- App Script -->
<script src="/Public/assets/js/app.js"></script>
<!-- Favicon -->
<link href="/Public/assets/images/favicon.ico" rel="shortcut icon" />
<!-- Apple devices Homescreen icon -->
<link href="/Public/assets/images/apple-touch-icon-precomposed.png" rel="apple-touch-icon-precomposed" />
</head>
<body>
<div class="navigation">
    <div class="container-fluid"> 
        <a data-pjax="true" href="/" class="logo">RCUM</a> 
        <a href="javascript:;" class="toggle-nav toggle-sidenav">
            <i class="glyphicon glyphicon-align-justify"></i>
        </a>
        <a href="javascript:;" class="toggle-nav" data-toggle="collapse" data-target="#headnav">
            <i class="glyphicon glyphicon-align-justify"></i>
        </a>
        <div class="collapse headnav" id="headnav">
            <!--main-nav-->
            <ul class="main-nav">
                <li> 
                    <a data-pjax="true" href="/">首页</a> 
                </li>
                <li class="dropdown">
                    <a href="/123" class="dropdown-toggle" data-toggle="dropdown"> 
                        <span>物质信息</span> 
                        <span class="caret"></span> 
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a data-pjax="true" href="/substance/prereg.html">预注册物质</a> </li>
                        <li> <a data-pjax="true" href="/substance/reg.html">注册物质</a> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> 
                        <span>吨位涵盖证明</span> 
                        <span class="caret"></span> 
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a data-pjax="true" href="javascript:;">直接吨位涵盖证明</a> </li>
                        <li> <a data-pjax="true" href="javascript:;">三方吨位涵盖证明</a> </li>
                        <li> <a data-pjax="true" href="javascript:;">间接吨位涵盖证明</a> </li>
                    </ul>
                </li>
                <li class="dropdown"> 
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> 
                        <span>相关文件</span> 
                        <span class="caret"></span> 
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a data-pjax="true" href="javascript:;">物质文件</a> </li>
                        <li> <a data-pjax="true" href="javascript:;">其他文件</a> </li>
                    </ul>
                </li>
                <li> <a data-pjax="true" href="javascript:;">公司信息</a> </li>
            </ul>
        </div>
        <div class="icon-nav">
            <div class="dropdown dropdown-msg">
                <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> 
                    <i class="glyphicon glyphicon-envelope"></i>
                    <span class="label label-lightred">4</span>
                </a>
                <ul class="dropdown-menu pull-right message-ul">
                    <li> 
                        <a href="#">
                            <img class="img-circle" src="/Public/assets/images/users/user-1.jpg" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message"> Lorem ipsum Commodo quis Commodo quis nisi ... </div>
                            </div>
                        </a>
                    </li>
                    <li> 
                        <a href="#">
                            <img class="img-circle" src="/Public/assets/images/users/user-2.jpg" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message"> Lorem ipsum Commodo quis Commodo quis nisi Lorem ipsum Commodo quis Commodo quis nisi Lorem ipsum Commodo quis Commodo quis nisi </div>
                            </div>
                        </a>
                    </li>
                    <li> 
                        <a href="#">
                            <img class="img-circle" src="/Public/assets/images/users/user-3.jpg" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message"> Lorem ipsum Commodo quis Commodo quis nisi ... </div>
                            </div>
                        </a>
                    </li>
                    <li> <a href="components-messages.html" class="more-messages">Go to Message center <i class="glyphicon glyphicon-arrow-right"></i></a> </li>
                </ul>
            </div>
            <div class="dropdown language-select">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/Public/assets/images/flags/us.gif" alt="">
                    <span class="hidden-sm hidden-xs">English</span>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li> <a href="#"><img src="/Public/assets/images/flags/us.gif" alt=""><span>English</span></a> </li>
                    <li> <a href="#"><img src="/Public/assets/images/flags/cn.gif" alt=""><span>中文</span></a> </li>
                </ul>
            </div>
            <div class="dropdown icon-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <span>John Doe</span>
                    <img class="user-photo img-circle" src="/Public/assets/images/users/user-avatar.jpg" alt="">
                </a>
                <ul class="dropdown-menu pull-right">
                    <li> <a href="more-userprofile.html"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Edit profile</a> </li>
                    <li> <a href="#"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Account settings</a> </li>
                    <li> <a href="more-login.html"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Sign out</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="sidenav">
    <form action="search-results.html" method="post" class="search-form">
        <div class="search-pane">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </form>
    <div class="subnav">
        <div class="subnav-title">
            <a data-toggle="collapse" data-target="#substance" href="javascript:;" class="toggle-subnav"><i class="fa fa-angle-down"></i><span>物质信息</span></a>
        </div>
        <ul class="subnav-menu collapse in" id="substance">
            <li> <a data-pjax="true" href="/index.php/substance/prereg.html">预注册物质</a> </li>
            <li> <a data-pjax="true" href="/index.php/substance/reg.html">注册物质</a> </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title">
            <a data-toggle="collapse" data-target="#certificate" href="javascript:;" class="toggle-subnav"><i class="fa fa-angle-down"></i><span>吨位涵盖证明</span></a>
        </div>
        <ul class="subnav-menu collapse in" id="certificate">
            <li> <a data-pjax="true" href="/index.php/certificate/direct.html">直接吨位涵盖证明</a> </li>
            <li> <a data-pjax="true" href="/index.php/certificate/indirect.html">三方吨位涵盖证明</a> </li>
            <li> <a data-pjax="true" href="/index.php/certificate/direct.html">间接吨位涵盖证明</a> </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title">
            <a data-toggle="collapse" data-target="#files" href="javascript:;" class="toggle-subnav"><i class="fa fa-angle-down"></i><span>相关文件</span></a>
        </div>
        <ul class="subnav-menu collapse in" id="files">
            <li> <a data-pjax="true" href="/index.php/files/linktosubstance.html">物质文件</a> </li>
            <li> <a data-pjax="true" href="/index.php/files/linktocompany.html">其他文件</a> </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title">
            <a data-toggle="collapse" data-target="#company" href="javascript:;" class="toggle-subnav"><i class="fa fa-angle-down"></i><span>账户设置</span></a>
        </div>
        <ul class="subnav-menu collapse in" id="company">
            <li> <a data-pjax="true" href="/index.php/company/index.html">公司信息</a> </li>
            <li> <a data-pjax="true" href="/index.php/company/account.html">用户信息</a> </li>
        </ul>
    </div>
</div>
<div class="main-area">
    <div id="page-header" class="page-header">
    <h1 class="pull-left">Dashboard</h1>
    <div class="pull-right hidden-sm hidden-xs">
        <ul class="minitiles">
            <li class="bgray">
                <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
            </li>
            <li class="bblue">
                <a href="#"><i class="glyphicon glyphicon-globe"></i></a>
            </li>
            <li class="bgreen">
                <i class="glyphicon glyphicon-calendar"></i>
                <div class="details">
                    <span class="big">December 12, 2017</span>
                    <span>Tuesday, 16:51</span>
                </div>
            </li>
        </ul>
    </div>
</div>
    
    <?php if($pjax): ?><title><?php echo ($title); ?></title><?php endif; ?>
<div id="main">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li class="active">Data</li>
    </ol>
    <div class="main-show">
        <div class="container-fluid">
            <table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                </tbody>
            </table>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-table"></i>
                        Table with tools (excel export etc.)
                    </h3>
                </div>
                <div class="box-content nopadding">
                    <table id="example2" class="table table-hover table-nomargin dataTable dataTable-tools table-bordered">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    $('#example2').DataTable({
        dom:'<"row"<"col-sm-6"l><"col-sm-6"Bf>><"row"<"col-sm-12"rt>><"row"<"col-sm-5"i><"col-sm-7"p>>',
        buttons: [
            { extend: 'copy', className: 'dt_button' },
            { extend: 'excel', className: 'dt_button' },
            { extend: 'pdf', className: 'dt_button' }
        ],
        //"scrollY": "500px",
        //"scrollCollapse": true,//不够高度自动关闭
        responsive: true,
        //pagingType: 'full',
        //"lengthChange": false, //配置每页数量
        "processing": true,
        "serverSide": true,
        "deferRender": true, //当处理大数据时，延迟渲染数据，有效提高Datatables处理能力
        "columns": [
            {"data": "first_name"},
            {"data": "last_name"},
            {"data": "position"},
            {"data": "office"},
            {"data": "start_date"},
            {"data": "salary"}
        ],
        ajax: {
            url: "/data.php",
            //"dataType": "jsonp",
            "type": "POST"
        },
    });
    var table = $('#example1').DataTable({
        responsive: true,
        fixedHeader: true,
        //pagingType: 'full',
        columnDefs: [
            {
                "render": function (data, type, row) {
                    return data + ' (' + row[3] + ')';
                },
                "targets": 0
            },
            {
                "visible": false,
                "targets": [3]
            }
        ],
        language: {
            "sProcessing": "处理中...",
            "sLengthMenu": "显示 _MENU_ 项结果",
            "sZeroRecords": "没有匹配结果",
            "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
            "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
            "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
            "sInfoPostFix": "",
            "sSearch": "搜索:",
            "sUrl": "",
            "sEmptyTable": "表中数据为空",
            "sLoadingRecords": "载入中...",
            "sInfoThousands": ",",
            "oPaginate": {
                "sFirst": "首页",
                "sPrevious": "上页",
                "sNext": "下页",
                "sLast": "末页"
            },
            "oAria": {
                "sSortAscending": ": 以升序排列此列",
                "sSortDescending": ": 以降序排列此列"
            }
        }
    });
    //$('#example1').dataTable().api();
    $('#example1 tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
        var d = table.row(this).data();
        //console.info(d);
        d.counter++;
        table.row(this).data(d).draw();
        //console.info(table.rows('.selected').data().length);
        for (var i = 0; i < table.rows('.selected').data().length; i++) {
            console.info(table.rows('.selected').data()[i]);
        }
    });
</script>
</div>

</div>
</body>
</html>