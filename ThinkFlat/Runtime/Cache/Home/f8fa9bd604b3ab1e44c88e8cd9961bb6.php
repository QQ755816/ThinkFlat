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
<script src="/Public/js/plugins/pjax/jquery.pjax-1.8.2.min.js"></script>
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
    <div class="container-fluid"> <a href="#" id="brand">FLAT</a> <a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
        <ul class='main-nav'>
            <li> <a href="/"> <span>Dashboard</span> </a> </li>
            <li> <a href="/index/validate">Validation</a> </li>
            <li> <a href="#" data-toggle="dropdown" class='dropdown-toggle'> <span>Forms</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="forms-basic.html">Basic forms</a> </li>
                    <li> <a href="forms-extended.html">Extended forms</a> </li>
                    <li> <a href="/index.php/index/validate">Validation</a> </li>
                    <li> <a href="forms-wizard.html">Wizard</a> </li>
                </ul>
            </li>
            <li> <a href="#" data-toggle="dropdown" class='dropdown-toggle'> <span>Components</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="components-timeline.html">Timeline</a> </li>
                    <li> <a href="components-pagestatistics.html">Page statistics</a> </li>
                    <li> <a href="components-sidebarwidgets.html">Sidebar widgets</a> </li>
                    <li> <a href="components-messages.html">Messages &amp; Chat</a> </li>
                    <li> <a href="components-gallery.html">Gallery &amp; Thumbs</a> </li>
                    <li> <a href="components-tiles.html">Tiles</a> </li>
                    <li> <a href="components-icons.html">Icons &amp; Buttons</a> </li>
                    <li> <a href="components-elements.html">UI elements</a> </li>
                    <li> <a href="components-typography.html">Typography</a> </li>
                    <li> <a href="components-bootstrap.html">Bootstrap elements</a> </li>
                    <li> <a href="components-grid.html">Grid</a> </li>
                </ul>
            </li>
            <li> <a href="#" data-toggle="dropdown" class='dropdown-toggle'> <span>Tables</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="tables-basic.html">Basic tables</a> </li>
                    <li> <a href="tables-dynamic.html">Dynamic tables</a> </li>
                    <li> <a href="tables-large.html">Large tables</a> </li>
                </ul>
            </li>
            <li> <a href="#" data-toggle="dropdown" class='dropdown-toggle'> <span>Plugins</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="plugins-charts.html">Charts</a> </li>
                    <li> <a href="plugins-calendar.html">Calendar</a> </li>
                    <li> <a href="plugins-filemanager.html">File manager</a> </li>
                    <li> <a href="plugins-filetrees.html">File trees</a> </li>
                    <li> <a href="plugins-elements.html">Editable elements</a> </li>
                    <li> <a href="plugins-maps.html">Maps</a> </li>
                    <li> <a href="plugins-dragdrop.html">Drag &amp; Drop widgets</a> </li>
                </ul>
            </li>
            <li> <a href="#" data-toggle="dropdown" class='dropdown-toggle'> <span>Pages</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="more-error.html">Error pages</a> </li>
                    <li class='dropdown-submenu'> <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Shop</a>
                        <ul class="dropdown-menu">
                            <li> <a href="more-shop-list.html">List view</a> </li>
                            <li> <a href="more-shop-product.html">Product view</a> </li>
                        </ul>
                    </li>
                    <li> <a href="more-pricing.html">Pricing tables</a> </li>
                    <li> <a href="more-faq.html">FAQ</a> </li>
                    <li> <a href="more-invoice.html">Invoice</a> </li>
                    <li> <a href="more-userprofile.html">User profile</a> </li>
                    <li> <a href="more-searchresults.html">Search results</a> </li>
                    <li> <a href="more-login.html">Login</a> </li>
                    <li> <a href="more-locked.html">Lock screen</a> </li>
                    <li> <a href="more-email.html">Email templates</a> </li>
                    <li> <a href="more-blank.html">Blank page</a> </li>
                    <li class='dropdown-submenu'> <a href="#" data-toggle="dropdown" class='dropdown-toggle'>Blog</a>
                        <ul class="dropdown-menu">
                            <li> <a href="more-blog-list.html">List big image</a> </li>
                            <li> <a href="more-blog-list-small.html">List small image</a> </li>
                            <li> <a href="more-blog-post.html">Post</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class='active'> <a href="#" data-toggle="dropdown" class='dropdown-toggle'> <span>Layouts</span> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li> <a href="layouts-sidebar-hidden.html">Default hidden sidebar</a> </li>
                    <li> <a href="layouts-sidebar-right.html">Sidebar right side</a> </li>
                    <li> <a href="layouts-color.html">Different default color</a> </li>
                    <li> <a href="layouts-fixed.html">Fixed layout</a> </li>
                    <li class='active'> <a href="layouts-fixed-topside.html">Fixed topbar and sidebar</a> </li>
                    <li class='dropdown-submenu'> <a href="#">Mobile sidebar</a>
                        <ul class="dropdown-menu">
                            <li> <a href="layouts-mobile-slide.html">Slide</a> </li>
                            <li> <a href="layouts-mobile-button.html">Button</a> </li>
                        </ul>
                    </li>
                    <li> <a href="/index/footer">Footer</a> </li>
                </ul>
            </li>
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
                        <li> <a href="#"><img src="/Public/img/demo/flags/br.gif" alt=""><span>Brasil</span></a> </li>
                        <li> <a href="#"><img src="/Public/img/demo/flags/de.gif" alt=""><span>Deutschland</span></a> </li>
                        <li> <a href="#"><img src="/Public/img/demo/flags/es.gif" alt=""><span>España</span></a> </li>
                        <li> <a href="#"><img src="/Public/img/demo/flags/fr.gif" alt=""><span>France</span></a> </li>
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
      <div class="subnav-title"> <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Content</span></a> </div>
      <ul class="subnav-menu">
        <li> <a href="#">Articles</a></li>
        <li> <a href="#">News</a> </li>
        <li> <a href="#">Pages</a> </li>
        <li> <a href="#">Comments</a> </li>
      </ul>
    </div>
    <div class="subnav">
      <div class="subnav-title"> <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Plugins</span></a> </div>
      <ul class="subnav-menu">
        <li> <a href="#">Cache manager</a> </li>
        <li> <a href="#">Import manager</a> </li>
        <li> <a href="#">Contact form generator</a> </li>
        <li> <a href="#">SEO optimization</a> </li>
      </ul>
    </div>
    <div class="subnav">
      <div class="subnav-title"> <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Settings</span></a> </div>
      <ul class="subnav-menu">
        <li> <a href="#">Theme settings</a> </li>
        <li> <a href="#">Page settings</a> </li>
        <li> <a href="#">Security settings</a> </li>
      </ul>
    </div>
    <div class="subnav subnav-hidden">
      <div class="subnav-title"> <a href="#" class='toggle-subnav'><i class="icon-angle-right"></i><span>Default hidden</span></a> </div>
      <ul class="subnav-menu">
        <li> <a href="#">Menu</a> </li>
        <li> <a href="#">Security settings</a> </li>
      </ul>
    </div>
  </div>
  <div id="main">
	
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Site with footer</h1>
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