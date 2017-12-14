<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" /><!-- Apple devices fullscreen -->
        <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" /><!-- Apple devices fullscreen -->
        <title>Index</title>
    <!-- Jquery -->
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<link href="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="//ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js" type="text/javascript"></script>
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
<link href="/Public/plugs/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<script src="/Public/plugs/datatables/datatables.min.js" type="text/javascript"></script>
<!-- Theme CSS -->
<link href="/Public/assets/css/style.css" type="text/css" rel="stylesheet" />
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
            <table id="example" class="display" cellspacing="0" width="100%">
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
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                    </tr>
                    <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                    </tr>
                    <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                    </tr>
                    <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                    </tr>
                    <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                    </tr>
                    <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                    </tr>
                    <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                    </tr>
                    <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                    </tr>
                    <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                    </tr>
                    <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                    </tr>
                    <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                    </tr>
                    <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                    </tr>
                    <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                    </tr>
                    <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                    </tr>
                    <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                    </tr>
                    <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                    </tr>
                    <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                    </tr>
                    <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                    </tr>
                    <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                    </tr>
                    <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                    </tr>
                    <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                    </tr>
                    <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                    </tr>
                    <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                    </tr>
                    <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                    </tr>
                    <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                    </tr>
                    <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                    </tr>
                    <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                    </tr>
                    <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                    </tr>
                    <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $('#example').DataTable();
    </script>
</div>

</div>
</body>
</html>