<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:96:"D:\wamp\www\120.79.12.123\ThinkEngine\public/../application/admin\view\index\icons-ionicons.html";i:1511745266;s:24:"static/admin/navbar.html";i:1514944209;s:22:"static/admin/menu.html";i:1511605267;s:24:"static/admin/footer.html";i:1511745268;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Awesome | Think Engine</title>
    <!--STYLESHEET-->
    <link href="__LAYUI__css/layui.css" rel="stylesheet" >
    <link href='__ADMIN__css/font-face.css' rel='stylesheet'>
    <link href="__ADMIN__css/bootstrap.min.css" rel="stylesheet">
    <link href="__ADMIN__css/nifty.min.css" rel="stylesheet">
    <link href="__ADMIN__css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="__ADMIN__css/demo/nifty-demo.min.css" rel="stylesheet">
    <link href="__ADMIN__plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <link href="__ADMIN__plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="__ADMIN__plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="__ADMIN__plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="__ADMIN__plugins/pace/pace.min.css" rel="stylesheet">

    <!--JAVASCRIPT-->
    <script src="__ADMIN__js/jquery-2.2.4.min.js"></script>
    <script src="__ADMIN__js/jquery.cookie.js"></script>
    <script src="__ADMIN__js/bootstrap.min.js"></script>
    <script src="__ADMIN__js/nifty.min.js"></script>
    <script src="__ADMIN__js/demo/nifty-demo.min.js"></script>
    <script src="__ADMIN__plugins/pace/pace.min.js"></script>
    <script src="__ADMIN__plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="__ADMIN__js/demo/icons.js"></script>
    <script src="__LAYUI__layui.js"></script>
    <script src="__ADMIN__js/myself.min.js"></script>

    <!--Icons [ SAMPLE ]-->
    <script src="__ADMIN__js/demo/icons.js"></script>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg navbar-fixed aside-fixed mainnav-fixed">

        <!--JAVASCRIPT-->
<script src="__ADMIN__plugins/bootbox/bootbox.min.js"></script>
<!--NAVBAR-->
<header id="navbar">
    <div id="navbar-container" class="boxed">
<!--Brand logo & name-->
<div class="navbar-header">
    <a href="<?php echo url('/admin'); ?>" class="navbar-brand">
        <!--<img src="__ADMIN__img/logo.png" alt="Nifty Logo" class="brand-icon">-->
        <div class="brand-title">
            <span class="brand-text">Think Engine</span>
        </div>
    </a>
</div>
<!--================================-->
<!--End brand logo & name-->

<!--Navbar Dropdown-->
<div class="navbar-content clearfix">
    <ul class="nav navbar-top-links pull-left">

        <!--Navigation toogle button-->
        <li class="tgl-menu-btn">
            <a class="mainnav-toggle" href="#">
                <i class="demo-pli-view-list"></i>
            </a>
        </li>
        <!--End Navigation toogle button-->



        <!--Notification dropdown-->
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="demo-pli-bell"></i>
                <span class="badge badge-header badge-danger"></span>
            </a>

            <!--Notification dropdown menu-->
            <div class="dropdown-menu dropdown-menu-md">
                <div class="pad-all bord-btm">
                    <p class="text-semibold text-main mar-no">你有9条新的通知.</p>
                </div>
                <div class="nano scrollable">
                    <div class="nano-content">
                        <ul class="head-list">

                            <!-- Dropdown list-->
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <p class="pull-left">数据库修复进度</p>
                                        <p class="pull-right">70%</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div style="width: 70%;" class="progress-bar">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a href="#">
                                    <div class="clearfix">
                                        <p class="pull-left">升级进度</p>
                                        <p class="pull-right">10%</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                            <span class="sr-only">10% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="#">
                                    <span class="badge badge-success pull-right">90%</span>
                                    <div class="media-left">
                                        <i class="demo-pli-data-settings icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">HDD 已满</div>
                                        <small class="text-muted">50 分钟前</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="#">
                                    <div class="media-left">
                                        <i class="demo-pli-file-edit icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">写一篇属于你的文章</div>
                                        <small class="text-muted">最后更新 8小时前</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="#">
                                    <span class="label label-danger pull-right">New</span>
                                    <div class="media-left">
                                        <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">评论消息</div>
                                        <small class="text-muted">最后更新 8小时前</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="#">
                                    <div class="media-left">
                                        <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">新用户注册</div>
                                        <small class="text-muted">4分钟前</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li class="bg-gray">
                                <a class="media" href="#">
                                    <div class="media-left">
                                        <img class="img-circle img-sm" alt="Profile Picture" src="/static/admin/img/profile-photos/9.png">
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">Lucy 给你发了一段消息</div>
                                        <small class="text-muted">30 分钟前</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li class="bg-gray">
                                <a class="media" href="#">
                                    <div class="media-left">
                                        <img class="img-circle img-sm" alt="Profile Picture" src="/static/admin/img/profile-photos/3.png">
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">Jackson 给你发了一段消息</div>
                                        <small class="text-muted">40 分钟前</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Dropdown footer-->
                <div class="pad-all bord-top">
                    <a href="#" class="btn-link text-dark box-block">
                        <i class="fa fa-angle-right fa-lg pull-right"></i>显示所有通知
                    </a>
                </div>
            </div>
        </li>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End notifications dropdown-->


        <!--小工具合集-->
        <li class="dropdown">
            <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-paw"></i>
            </a>

            <!--Notification dropdown menu-->
            <div class="dropdown-menu dropdown-menu-md">
                <div class="pad-all bord-btm">
                    <p class="text-semibold text-main mar-no">网站小工具</p>
                </div>
                <div class="nano scrollable">
                    <div class="nano-content">
                        <ul class="head-list">

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="http://seo.chinaz.com/?q=www.52nd.xin" target="_blank">
                                    <span class="badge badge-danger pull-right">1</span>
                                    <div class="media-left">
                                        <i class="demo-pli-data-settings icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">站长工具</div>
                                        <small class="text-muted">SEO、网站的收录、权重</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="https://www.51.la/?19277864" target="_blank">
                                    <span class="badge badge-danger pull-right">New</span>
                                    <div class="media-left">
                                        <i class="demo-pli-gear icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">访问量</div>
                                        <small class="text-muted">50la数据访问量统计</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <!--Dropdown footer-->
                <div class="pad-all bord-top">
                    <a href="javascript:layer.msg('暂无更多')" class="btn-link text-dark box-block"><i class="fa fa-angle-right fa-lg pull-right"></i>更多小工具</a>
                </div>
            </div>
        </li>
        <!--小工具合集结束-->

        <!--常用功能-->
        <li class="dropdown">
            <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-gear"></i>
            </a>

            <!--Notification dropdown menu-->
            <div class="dropdown-menu dropdown-menu-md">
                <div class="pad-all bord-btm">
                    <p class="text-semibold text-main mar-no">功能模块</p>
                </div>
                <div class="nano scrollable">
                    <div class="nano-content">
                        <ul class="head-list">

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="<?php echo url('/admin/model/index'); ?>">
                                    <span class="badge badge-danger pull-right">New</span>
                                    <div class="media-left">
                                        <i class="demo-pli-layout-grid icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">模块管理</div>
                                        <small class="text-muted">自动化的模块快速建立</small>
                                    </div>
                                </a>
                            </li>

                            <!-- Dropdown list-->
                            <li>
                                <a class="media" href="<?php echo url('/admin/menu/index'); ?>">
                                    <span class="badge badge-success pull-right">New</span>
                                    <div class="media-left">
                                        <i class="demo-pli-internet icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="text-nowrap">菜单管理</div>
                                        <small class="text-muted">一览大小 便知明暗</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <!--常用功能结束-->



        <!--Mega dropdown-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <li class="mega-dropdown">
            <a href="#" class="mega-dropdown-toggle">
                <i class="demo-pli-layout-grid"></i>
            </a>
            <div class="dropdown-menu mega-dropdown-menu">
                <div class="row">
                    <div class="col-sm-4 col-md-3">

                        <!--Mega menu list-->
                        <ul class="list-unstyled">
                            <li class="dropdown-header"><i class="demo-pli-file icon-fw"></i> 静态页面</li>
                            <li><a href="<?php echo url('/admin/index/fontAwesome'); ?>">font-awesome 图标</a></li>
                            <li><a href="<?php echo url('/admin/index/Ionic'); ?>">Ionic 图标</a></li>
                        </ul>

                    </div>
                    <div class="col-sm-4 col-md-3">

                        <!--Mega menu list-->
                        <ul class="list-unstyled">
                            <li class="dropdown-header"><i class="demo-pli-mail icon-fw"></i> Mailbox</li>
                            <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                            <li><a href="#">Read Message</a></li>
                            <li><a href="#">Compose</a></li>
                        </ul>
                        <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <!--Mega menu list-->
                        <ul class="list-unstyled">
                            <li>
                                <a href="<?php echo url('/index'); ?>" target="_blank" class="media mar-btm">
                                    <span class="badge badge-success pull-right">90%</span>
                                    <div class="media-left">
                                        <i class="demo-pli-data-settings icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-semibold text-dark mar-no">Index 模块</p>
                                        <small class="text-muted">首页模块~</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('/home'); ?>" target="_blank" class="media mar-btm">
                                    <div class="media-left">
                                        <i class="demo-pli-support icon-2x"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-semibold text-dark mar-no">DJ舞曲系统</p>
                                        <small class="text-muted">优美的界面、丰富的资源，音乐系统</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <p class="dropdown-header"><i class="demo-pli-file-jpg icon-fw"></i> 图库</p>
                        <ul class="list-unstyled list-inline text-justify">

                            <li class="pad-btm">
                                <img src="/static/admin/img//thumbs/mega-menu-2.jpg" alt="thumbs">
                            </li>
                            <li class="pad-btm">
                                <img src="/static/admin/img//thumbs/mega-menu-3.jpg" alt="thumbs">
                            </li>
                            <li class="pad-btm">
                                <img src="/static/admin/img//thumbs/mega-menu-1.jpg" alt="thumbs">
                            </li>
                            <li class="pad-btm">
                                <img src="/static/admin/img//thumbs/mega-menu-4.jpg" alt="thumbs">
                            </li>
                            <li class="pad-btm">
                                <img src="/static/admin/img//thumbs/mega-menu-5.jpg" alt="thumbs">
                            </li>
                            <li class="pad-btm">
                                <img src="/static/admin/img//thumbs/mega-menu-6.jpg" alt="thumbs">
                            </li>
                        </ul>
                        <a href="#" class="btn btn-sm btn-block btn-default">浏览图库</a>
                    </div>
                </div>
            </div>
        </li>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End mega dropdown-->

    </ul>
    <ul class="nav navbar-top-links pull-right">

        <li><a class="lang-selector" href="<?php echo url('/index/index/index'); ?>" target="_blank" title="首页"><i class="fa fa-home"></i></a></li>

        <li><a class="lang-selector" href="<?php echo url('/admin/Common/CacheClear'); ?>" title="清除缓存"><i class="fa fa-trash"></i></a></li>

        <!--User dropdown-->
        <li id="dropdown-user" class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!--<img class="img-circle img-user media-object" src="/static/admin/img/profile-photos/1.png" alt="Profile Picture">-->
                                    <i class="demo-pli-male ic-user"></i>
                                </span>
                <div class="username hidden-xs"><?php echo $userObj->username; ?></div>
            </a>


            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">


                <!-- User dropdown menu -->
                <ul class="head-list">
                    <li>
                        <a href="<?php echo url('user/detail'); ?>">
                            <i class="demo-pli-male icon-lg icon-fw"></i> 我的资料
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="badge badge-danger pull-right">9</span>
                            <i class="demo-pli-mail icon-lg icon-fw"></i> 我的消息
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <!--<span class="label label-success pull-right">New</span>-->
                            <i class="demo-pli-gear icon-lg icon-fw"></i> 设置
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('admin/user/lockScreen'); ?>">
                            <i class="demo-pli-computer-secure icon-lg icon-fw"></i> 锁屏
                        </a>
                    </li>
                </ul>

                <!-- Dropdown footer -->
                <div class="pad-all text-right">
                    <a href="javascript:void(0)" class="btn btn-primary" onclick="loginOut()">
                        <i class="demo-pli-unlock"></i> 退出
                    </a>
                </div>
            </div>
        </li>
        <!--End user dropdown-->

        <li>
            <a href="#" class="aside-toggle navbar-aside-icon">
                <i class="pci-ver-dots"></i>
            </a>
        </li>
    </ul>
</div>
<!--End Navbar Dropdown-->

</div>
</header>
<!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                

    <div class="pad-all mar-btm bg-info text-center">
        <h1 class="text-4x text-semibold text-light">Ion Icons</h1>
        <p class="pad-btm">Icon packs to use in your design projects.</p>
        <br>
        <p class="text-2x text-thin"><strong>600+</strong> Free icons set</p>
    </div>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					<div class="panel">
					
					    <!--Panel heading-->
					    <div class="panel-heading">
					        <div class="panel-control pull-left">
					            <ul class="nav nav-tabs">
					                <li class="active"><a data-toggle="tab" href="#demo-icon-box-1" aria-expanded="true">Default Icons</a></li>
					                <li><a data-toggle="tab" href="#demo-icon-box-2" aria-expanded="false">iOS 7-style icons</a></li>
					                <li><a data-toggle="tab" href="#demo-icon-box-3" aria-expanded="false">Brand icons</a></li>
					            </ul>
					        </div>
					        <h3 class="panel-title">&nbsp;</h3>
					    </div>
					
					    <!--Panel body-->
					    <div class="panel-body">
					        <div class="tab-content">
					            <div id="demo-icon-box-1" class="tab-pane fade active in">
					                <div class="clearfix demo-icon-list">
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ionic"></i><span>ion-ionic</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-up-a"></i><span>ion-arrow-up-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-right-a"></i><span>ion-arrow-right-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-down-a"></i><span>ion-arrow-down-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-left-a"></i><span>ion-arrow-left-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-up-b"></i><span>ion-arrow-up-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-right-b"></i><span>ion-arrow-right-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-down-b"></i><span>ion-arrow-down-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-left-b"></i><span>ion-arrow-left-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-up-c"></i><span>ion-arrow-up-c</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-right-c"></i><span>ion-arrow-right-c</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-down-c"></i><span>ion-arrow-down-c</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-left-c"></i><span>ion-arrow-left-c</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-return-right"></i><span>ion-arrow-return-right</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-return-left"></i><span>ion-arrow-return-left</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-swap"></i><span>ion-arrow-swap</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-shrink"></i><span>ion-arrow-shrink</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-expand"></i><span>ion-arrow-expand</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-move"></i><span>ion-arrow-move</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-resize"></i><span>ion-arrow-resize</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chevron-up"></i><span>ion-chevron-up</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chevron-right"></i><span>ion-chevron-right</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chevron-down"></i><span>ion-chevron-down</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chevron-left"></i><span>ion-chevron-left</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-navicon-round"></i><span>ion-navicon-round</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-navicon"></i><span>ion-navicon</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-drag"></i><span>ion-drag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-log-in"></i><span>ion-log-in</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-log-out"></i><span>ion-log-out</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-checkmark-round"></i><span>ion-checkmark-round</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-checkmark"></i><span>ion-checkmark</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-checkmark-circled"></i><span>ion-checkmark-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-close-round"></i><span>ion-close-round</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-close"></i><span>ion-close</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-close-circled"></i><span>ion-close-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-plus-round"></i><span>ion-plus-round</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-plus"></i><span>ion-plus</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-plus-circled"></i><span>ion-plus-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-minus-round"></i><span>ion-minus-round</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-minus"></i><span>ion-minus</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-minus-circled"></i><span>ion-minus-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-information"></i><span>ion-information</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-information-circled"></i><span>ion-information-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-help"></i><span>ion-help</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-help-circled"></i><span>ion-help-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-backspace-outline"></i><span>ion-backspace-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-backspace"></i><span>ion-backspace</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-help-buoy"></i><span>ion-help-buoy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-asterisk"></i><span>ion-asterisk</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-alert"></i><span>ion-alert</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-alert-circled"></i><span>ion-alert-circled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-refresh"></i><span>ion-refresh</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-loop"></i><span>ion-loop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-shuffle"></i><span>ion-shuffle</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-home"></i><span>ion-home</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-search"></i><span>ion-search</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-flag"></i><span>ion-flag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-star"></i><span>ion-star</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-heart"></i><span>ion-heart</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-heart-broken"></i><span>ion-heart-broken</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-gear-a"></i><span>ion-gear-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-gear-b"></i><span>ion-gear-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-toggle-filled"></i><span>ion-toggle-filled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-toggle"></i><span>ion-toggle</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-settings"></i><span>ion-settings</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-wrench"></i><span>ion-wrench</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-hammer"></i><span>ion-hammer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-edit"></i><span>ion-edit</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-trash-a"></i><span>ion-trash-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-trash-b"></i><span>ion-trash-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-document"></i><span>ion-document</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-document-text"></i><span>ion-document-text</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-clipboard"></i><span>ion-clipboard</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-scissors"></i><span>ion-scissors</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-funnel"></i><span>ion-funnel</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-bookmark"></i><span>ion-bookmark</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-email"></i><span>ion-email</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-email-unread"></i><span>ion-email-unread</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-folder"></i><span>ion-folder</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-filing"></i><span>ion-filing</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-archive"></i><span>ion-archive</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-reply"></i><span>ion-reply</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-reply-all"></i><span>ion-reply-all</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-forward"></i><span>ion-forward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-share"></i><span>ion-share</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-paper-airplane"></i><span>ion-paper-airplane</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-link"></i><span>ion-link</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-paperclip"></i><span>ion-paperclip</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-compose"></i><span>ion-compose</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-briefcase"></i><span>ion-briefcase</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-medkit"></i><span>ion-medkit</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-at"></i><span>ion-at</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pound"></i><span>ion-pound</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-quote"></i><span>ion-quote</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-cloud"></i><span>ion-cloud</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-upload"></i><span>ion-upload</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-more"></i><span>ion-more</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-grid"></i><span>ion-grid</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-calendar"></i><span>ion-calendar</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-clock"></i><span>ion-clock</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-compass"></i><span>ion-compass</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pinpoint"></i><span>ion-pinpoint</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pin"></i><span>ion-pin</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-navigate"></i><span>ion-navigate</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-location"></i><span>ion-location</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-map"></i><span>ion-map</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-lock-combination"></i><span>ion-lock-combination</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-locked"></i><span>ion-locked</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-unlocked"></i><span>ion-unlocked</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-key"></i><span>ion-key</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-graph-up-right"></i><span>ion-arrow-graph-up-right</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-graph-down-right"></i><span>ion-arrow-graph-down-right</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-graph-up-left"></i><span>ion-arrow-graph-up-left</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-arrow-graph-down-left"></i><span>ion-arrow-graph-down-left</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-stats-bars"></i><span>ion-stats-bars</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-connection-bars"></i><span>ion-connection-bars</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pie-graph"></i><span>ion-pie-graph</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chatbubble"></i><span>ion-chatbubble</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chatbubble-working"></i><span>ion-chatbubble-working</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chatbubbles"></i><span>ion-chatbubbles</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chatbox"></i><span>ion-chatbox</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chatbox-working"></i><span>ion-chatbox-working</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-chatboxes"></i><span>ion-chatboxes</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-person"></i><span>ion-person</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-person-add"></i><span>ion-person-add</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-person-stalker"></i><span>ion-person-stalker</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-woman"></i><span>ion-woman</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-man"></i><span>ion-man</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-female"></i><span>ion-female</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-male"></i><span>ion-male</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-transgender"></i><span>ion-transgender</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-fork"></i><span>ion-fork</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-knife"></i><span>ion-knife</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-spoon"></i><span>ion-spoon</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-soup-can-outline"></i><span>ion-soup-can-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-soup-can"></i><span>ion-soup-can</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-beer"></i><span>ion-beer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-wineglass"></i><span>ion-wineglass</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-coffee"></i><span>ion-coffee</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-icecream"></i><span>ion-icecream</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pizza"></i><span>ion-pizza</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-power"></i><span>ion-power</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-mouse"></i><span>ion-mouse</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-battery-full"></i><span>ion-battery-full</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-battery-half"></i><span>ion-battery-half</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-battery-low"></i><span>ion-battery-low</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-battery-empty"></i><span>ion-battery-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-battery-charging"></i><span>ion-battery-charging</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-wifi"></i><span>ion-wifi</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-bluetooth"></i><span>ion-bluetooth</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-calculator"></i><span>ion-calculator</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-camera"></i><span>ion-camera</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-eye"></i><span>ion-eye</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-eye-disabled"></i><span>ion-eye-disabled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-flash"></i><span>ion-flash</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-flash-off"></i><span>ion-flash-off</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-qr-scanner"></i><span>ion-qr-scanner</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-image"></i><span>ion-image</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-images"></i><span>ion-images</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-wand"></i><span>ion-wand</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-contrast"></i><span>ion-contrast</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-aperture"></i><span>ion-aperture</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-crop"></i><span>ion-crop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-easel"></i><span>ion-easel</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-paintbrush"></i><span>ion-paintbrush</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-paintbucket"></i><span>ion-paintbucket</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-monitor"></i><span>ion-monitor</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-laptop"></i><span>ion-laptop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ipad"></i><span>ion-ipad</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-iphone"></i><span>ion-iphone</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ipod"></i><span>ion-ipod</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-printer"></i><span>ion-printer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-usb"></i><span>ion-usb</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-outlet"></i><span>ion-outlet</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-bug"></i><span>ion-bug</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-code"></i><span>ion-code</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-code-working"></i><span>ion-code-working</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-code-download"></i><span>ion-code-download</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-fork-repo"></i><span>ion-fork-repo</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-network"></i><span>ion-network</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pull-request"></i><span>ion-pull-request</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-merge"></i><span>ion-merge</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-xbox"></i><span>ion-xbox</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-playstation"></i><span>ion-playstation</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-steam"></i><span>ion-steam</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-closed-captioning"></i><span>ion-closed-captioning</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-videocamera"></i><span>ion-videocamera</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-film-marker"></i><span>ion-film-marker</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-disc"></i><span>ion-disc</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-headphone"></i><span>ion-headphone</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-music-note"></i><span>ion-music-note</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-radio-waves"></i><span>ion-radio-waves</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-speakerphone"></i><span>ion-speakerphone</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-mic-a"></i><span>ion-mic-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-mic-b"></i><span>ion-mic-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-mic-c"></i><span>ion-mic-c</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-volume-high"></i><span>ion-volume-high</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-volume-medium"></i><span>ion-volume-medium</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-volume-low"></i><span>ion-volume-low</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-volume-mute"></i><span>ion-volume-mute</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-levels"></i><span>ion-levels</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-play"></i><span>ion-play</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pause"></i><span>ion-pause</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-stop"></i><span>ion-stop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-record"></i><span>ion-record</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-skip-forward"></i><span>ion-skip-forward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-skip-backward"></i><span>ion-skip-backward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-eject"></i><span>ion-eject</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-bag"></i><span>ion-bag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-card"></i><span>ion-card</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-cash"></i><span>ion-cash</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pricetag"></i><span>ion-pricetag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-pricetags"></i><span>ion-pricetags</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-thumbsup"></i><span>ion-thumbsup</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-thumbsdown"></i><span>ion-thumbsdown</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-happy-outline"></i><span>ion-happy-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-happy"></i><span>ion-happy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-sad-outline"></i><span>ion-sad-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-sad"></i><span>ion-sad</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-bowtie"></i><span>ion-bowtie</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-tshirt-outline"></i><span>ion-tshirt-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-tshirt"></i><span>ion-tshirt</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-trophy"></i><span>ion-trophy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-podium"></i><span>ion-podium</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ribbon-a"></i><span>ion-ribbon-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ribbon-b"></i><span>ion-ribbon-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-university"></i><span>ion-university</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-magnet"></i><span>ion-magnet</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-beaker"></i><span>ion-beaker</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-erlenmeyer-flask"></i><span>ion-erlenmeyer-flask</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-egg"></i><span>ion-egg</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-earth"></i><span>ion-earth</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-planet"></i><span>ion-planet</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-lightbulb"></i><span>ion-lightbulb</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-cube"></i><span>ion-cube</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-leaf"></i><span>ion-leaf</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-waterdrop"></i><span>ion-waterdrop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-flame"></i><span>ion-flame</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-fireball"></i><span>ion-fireball</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-bonfire"></i><span>ion-bonfire</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-umbrella"></i><span>ion-umbrella</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-nuclear"></i><span>ion-nuclear</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-no-smoking"></i><span>ion-no-smoking</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-thermometer"></i><span>ion-thermometer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-speedometer"></i><span>ion-speedometer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-model-s"></i><span>ion-model-s</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-plane"></i><span>ion-plane</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-jet"></i><span>ion-jet</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-load-a"></i><span>ion-load-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-load-b"></i><span>ion-load-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-load-c"></i><span>ion-load-c</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-load-d"></i><span>ion-load-d</span></div>
					                    </div>
					                </div>
					            </div>
					
					
					            <div id="demo-icon-box-2" class="tab-pane fade">
					                <div class="clearfix demo-icon-list">
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-ionic-outline"></i><span>ion-ios-ionic-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-back"></i><span>ion-ios-arrow-back</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-forward"></i><span>ion-ios-arrow-forward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-up"></i><span>ion-ios-arrow-up</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-right"></i><span>ion-ios-arrow-right</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-down"></i><span>ion-ios-arrow-down</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-left"></i><span>ion-ios-arrow-left</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-thin-up"></i><span>ion-ios-arrow-thin-up</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-thin-right"></i><span>ion-ios-arrow-thin-right</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-thin-down"></i><span>ion-ios-arrow-thin-down</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-arrow-thin-left"></i><span>ion-ios-arrow-thin-left</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-circle-filled"></i><span>ion-ios-circle-filled</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-circle-outline"></i><span>ion-ios-circle-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-checkmark-empty"></i><span>ion-ios-checkmark-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-checkmark-outline"></i><span>ion-ios-checkmark-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-checkmark"></i><span>ion-ios-checkmark</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-plus-empty"></i><span>ion-ios-plus-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-plus-outline"></i><span>ion-ios-plus-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-plus"></i><span>ion-ios-plus</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-close-empty"></i><span>ion-ios-close-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-close-outline"></i><span>ion-ios-close-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-close"></i><span>ion-ios-close</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-minus-empty"></i><span>ion-ios-minus-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-minus-outline"></i><span>ion-ios-minus-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-minus"></i><span>ion-ios-minus</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-information-empty"></i><span>ion-ios-information-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-information-outline"></i><span>ion-ios-information-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-information"></i><span>ion-ios-information</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-help-empty"></i><span>ion-ios-help-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-help-outline"></i><span>ion-ios-help-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-help"></i><span>ion-ios-help</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-search"></i><span>ion-ios-search</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-search-strong"></i><span>ion-ios-search-strong</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-star"></i><span>ion-ios-star</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-star-half"></i><span>ion-ios-star-half</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-star-outline"></i><span>ion-ios-star-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-heart"></i><span>ion-ios-heart</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-heart-outline"></i><span>ion-ios-heart-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-more"></i><span>ion-ios-more</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-more-outline"></i><span>ion-ios-more-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-home"></i><span>ion-ios-home</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-home-outline"></i><span>ion-ios-home-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloud"></i><span>ion-ios-cloud</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloud-outline"></i><span>ion-ios-cloud-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloud-upload"></i><span>ion-ios-cloud-upload</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloud-upload-outline"></i><span>ion-ios-cloud-upload-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloud-download"></i><span>ion-ios-cloud-download</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloud-download-outline"></i><span>ion-ios-cloud-download-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-upload"></i><span>ion-ios-upload</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-upload-outline"></i><span>ion-ios-upload-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-download"></i><span>ion-ios-download</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-download-outline"></i><span>ion-ios-download-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-refresh"></i><span>ion-ios-refresh</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-refresh-outline"></i><span>ion-ios-refresh-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-refresh-empty"></i><span>ion-ios-refresh-empty</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-reload"></i><span>ion-ios-reload</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-loop-strong"></i><span>ion-ios-loop-strong</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-loop"></i><span>ion-ios-loop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-bookmarks"></i><span>ion-ios-bookmarks</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-bookmarks-outline"></i><span>ion-ios-bookmarks-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-book"></i><span>ion-ios-book</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-book-outline"></i><span>ion-ios-book-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flag"></i><span>ion-ios-flag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flag-outline"></i><span>ion-ios-flag-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-glasses"></i><span>ion-ios-glasses</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-glasses-outline"></i><span>ion-ios-glasses-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-browsers"></i><span>ion-ios-browsers</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-browsers-outline"></i><span>ion-ios-browsers-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-at"></i><span>ion-ios-at</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-at-outline"></i><span>ion-ios-at-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pricetag"></i><span>ion-ios-pricetag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pricetag-outline"></i><span>ion-ios-pricetag-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pricetags"></i><span>ion-ios-pricetags</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pricetags-outline"></i><span>ion-ios-pricetags-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cart"></i><span>ion-ios-cart</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cart-outline"></i><span>ion-ios-cart-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-chatboxes"></i><span>ion-ios-chatboxes</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-chatboxes-outline"></i><span>ion-ios-chatboxes-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-chatbubble"></i><span>ion-ios-chatbubble</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-chatbubble-outline"></i><span>ion-ios-chatbubble-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cog"></i><span>ion-ios-cog</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cog-outline"></i><span>ion-ios-cog-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-gear"></i><span>ion-ios-gear</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-gear-outline"></i><span>ion-ios-gear-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-settings"></i><span>ion-ios-settings</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-settings-strong"></i><span>ion-ios-settings-strong</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-toggle"></i><span>ion-ios-toggle</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-toggle-outline"></i><span>ion-ios-toggle-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-analytics"></i><span>ion-ios-analytics</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-analytics-outline"></i><span>ion-ios-analytics-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pie"></i><span>ion-ios-pie</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pie-outline"></i><span>ion-ios-pie-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pulse"></i><span>ion-ios-pulse</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pulse-strong"></i><span>ion-ios-pulse-strong</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-filing"></i><span>ion-ios-filing</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-filing-outline"></i><span>ion-ios-filing-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-box"></i><span>ion-ios-box</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-box-outline"></i><span>ion-ios-box-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-compose"></i><span>ion-ios-compose</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-compose-outline"></i><span>ion-ios-compose-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-trash"></i><span>ion-ios-trash</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-trash-outline"></i><span>ion-ios-trash-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-copy"></i><span>ion-ios-copy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-copy-outline"></i><span>ion-ios-copy-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-email"></i><span>ion-ios-email</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-email-outline"></i><span>ion-ios-email-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-undo"></i><span>ion-ios-undo</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-undo-outline"></i><span>ion-ios-undo-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-redo"></i><span>ion-ios-redo</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-redo-outline"></i><span>ion-ios-redo-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-paperplane"></i><span>ion-ios-paperplane</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-paperplane-outline"></i><span>ion-ios-paperplane-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-folder"></i><span>ion-ios-folder</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-folder-outline"></i><span>ion-ios-folder-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-paper"></i><span>ion-ios-paper</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-paper-outline"></i><span>ion-ios-paper-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-list"></i><span>ion-ios-list</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-list-outline"></i><span>ion-ios-list-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-world"></i><span>ion-ios-world</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-world-outline"></i><span>ion-ios-world-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-alarm"></i><span>ion-ios-alarm</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-alarm-outline"></i><span>ion-ios-alarm-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-speedometer"></i><span>ion-ios-speedometer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-speedometer-outline"></i><span>ion-ios-speedometer-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-stopwatch"></i><span>ion-ios-stopwatch</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-stopwatch-outline"></i><span>ion-ios-stopwatch-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-timer"></i><span>ion-ios-timer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-timer-outline"></i><span>ion-ios-timer-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-clock"></i><span>ion-ios-clock</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-clock-outline"></i><span>ion-ios-clock-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-time"></i><span>ion-ios-time</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-time-outline"></i><span>ion-ios-time-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-calendar"></i><span>ion-ios-calendar</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-calendar-outline"></i><span>ion-ios-calendar-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-photos"></i><span>ion-ios-photos</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-photos-outline"></i><span>ion-ios-photos-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-albums"></i><span>ion-ios-albums</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-albums-outline"></i><span>ion-ios-albums-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-camera"></i><span>ion-ios-camera</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-camera-outline"></i><span>ion-ios-camera-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-reverse-camera"></i><span>ion-ios-reverse-camera</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-reverse-camera-outline"></i><span>ion-ios-reverse-camera-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-eye"></i><span>ion-ios-eye</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-eye-outline"></i><span>ion-ios-eye-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-bolt"></i><span>ion-ios-bolt</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-bolt-outline"></i><span>ion-ios-bolt-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-color-wand"></i><span>ion-ios-color-wand</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-color-wand-outline"></i><span>ion-ios-color-wand-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-color-filter"></i><span>ion-ios-color-filter</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-color-filter-outline"></i><span>ion-ios-color-filter-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-grid-view"></i><span>ion-ios-grid-view</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-grid-view-outline"></i><span>ion-ios-grid-view-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-crop-strong"></i><span>ion-ios-crop-strong</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-crop"></i><span>ion-ios-crop</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-barcode"></i><span>ion-ios-barcode</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-barcode-outline"></i><span>ion-ios-barcode-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-briefcase"></i><span>ion-ios-briefcase</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-briefcase-outline"></i><span>ion-ios-briefcase-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-medkit"></i><span>ion-ios-medkit</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-medkit-outline"></i><span>ion-ios-medkit-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-medical"></i><span>ion-ios-medical</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-medical-outline"></i><span>ion-ios-medical-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-infinite"></i><span>ion-ios-infinite</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-infinite-outline"></i><span>ion-ios-infinite-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-calculator"></i><span>ion-ios-calculator</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-calculator-outline"></i><span>ion-ios-calculator-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-keypad"></i><span>ion-ios-keypad</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-keypad-outline"></i><span>ion-ios-keypad-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-telephone"></i><span>ion-ios-telephone</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-telephone-outline"></i><span>ion-ios-telephone-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-drag"></i><span>ion-ios-drag</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-location"></i><span>ion-ios-location</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-location-outline"></i><span>ion-ios-location-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-navigate"></i><span>ion-ios-navigate</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-navigate-outline"></i><span>ion-ios-navigate-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-locked"></i><span>ion-ios-locked</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-locked-outline"></i><span>ion-ios-locked-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-unlocked"></i><span>ion-ios-unlocked</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-unlocked-outline"></i><span>ion-ios-unlocked-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-monitor"></i><span>ion-ios-monitor</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-monitor-outline"></i><span>ion-ios-monitor-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-printer"></i><span>ion-ios-printer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-printer-outline"></i><span>ion-ios-printer-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-game-controller-a"></i><span>ion-ios-game-controller-a</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-game-controller-a-outline"></i><span>ion-ios-game-controller-a-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-game-controller-b"></i><span>ion-ios-game-controller-b</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-game-controller-b-outline"></i><span>ion-ios-game-controller-b-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-americanfootball"></i><span>ion-ios-americanfootball</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-americanfootball-outline"></i><span>ion-ios-americanfootball-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-baseball"></i><span>ion-ios-baseball</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-baseball-outline"></i><span>ion-ios-baseball-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-basketball"></i><span>ion-ios-basketball</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-basketball-outline"></i><span>ion-ios-basketball-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-tennisball"></i><span>ion-ios-tennisball</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-tennisball-outline"></i><span>ion-ios-tennisball-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-football"></i><span>ion-ios-football</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-football-outline"></i><span>ion-ios-football-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-body"></i><span>ion-ios-body</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-body-outline"></i><span>ion-ios-body-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-person"></i><span>ion-ios-person</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-person-outline"></i><span>ion-ios-person-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-personadd"></i><span>ion-ios-personadd</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-personadd-outline"></i><span>ion-ios-personadd-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-people"></i><span>ion-ios-people</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-people-outline"></i><span>ion-ios-people-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-musical-notes"></i><span>ion-ios-musical-notes</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-musical-note"></i><span>ion-ios-musical-note</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-bell"></i><span>ion-ios-bell</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-bell-outline"></i><span>ion-ios-bell-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-mic"></i><span>ion-ios-mic</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-mic-outline"></i><span>ion-ios-mic-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-mic-off"></i><span>ion-ios-mic-off</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-volume-high"></i><span>ion-ios-volume-high</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-volume-low"></i><span>ion-ios-volume-low</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-play"></i><span>ion-ios-play</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-play-outline"></i><span>ion-ios-play-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pause"></i><span>ion-ios-pause</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pause-outline"></i><span>ion-ios-pause-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-recording"></i><span>ion-ios-recording</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-recording-outline"></i><span>ion-ios-recording-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-fastforward"></i><span>ion-ios-fastforward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-fastforward-outline"></i><span>ion-ios-fastforward-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-rewind"></i><span>ion-ios-rewind</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-rewind-outline"></i><span>ion-ios-rewind-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-skipbackward"></i><span>ion-ios-skipbackward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-skipbackward-outline"></i><span>ion-ios-skipbackward-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-skipforward"></i><span>ion-ios-skipforward</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-skipforward-outline"></i><span>ion-ios-skipforward-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-shuffle-strong"></i><span>ion-ios-shuffle-strong</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-shuffle"></i><span>ion-ios-shuffle</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-videocam"></i><span>ion-ios-videocam</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-videocam-outline"></i><span>ion-ios-videocam-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-film"></i><span>ion-ios-film</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-film-outline"></i><span>ion-ios-film-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flask"></i><span>ion-ios-flask</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flask-outline"></i><span>ion-ios-flask-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-lightbulb"></i><span>ion-ios-lightbulb</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-lightbulb-outline"></i><span>ion-ios-lightbulb-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-wineglass"></i><span>ion-ios-wineglass</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-wineglass-outline"></i><span>ion-ios-wineglass-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pint"></i><span>ion-ios-pint</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-pint-outline"></i><span>ion-ios-pint-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-nutrition"></i><span>ion-ios-nutrition</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-nutrition-outline"></i><span>ion-ios-nutrition-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flower"></i><span>ion-ios-flower</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flower-outline"></i><span>ion-ios-flower-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-rose"></i><span>ion-ios-rose</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-rose-outline"></i><span>ion-ios-rose-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-paw"></i><span>ion-ios-paw</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-paw-outline"></i><span>ion-ios-paw-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flame"></i><span>ion-ios-flame</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-flame-outline"></i><span>ion-ios-flame-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-sunny"></i><span>ion-ios-sunny</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-sunny-outline"></i><span>ion-ios-sunny-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-partlysunny"></i><span>ion-ios-partlysunny</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-partlysunny-outline"></i><span>ion-ios-partlysunny-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloudy"></i><span>ion-ios-cloudy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloudy-outline"></i><span>ion-ios-cloudy-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-rainy"></i><span>ion-ios-rainy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-rainy-outline"></i><span>ion-ios-rainy-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-thunderstorm"></i><span>ion-ios-thunderstorm</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-thunderstorm-outline"></i><span>ion-ios-thunderstorm-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-snowy"></i><span>ion-ios-snowy</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-moon"></i><span>ion-ios-moon</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-moon-outline"></i><span>ion-ios-moon-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloudy-night"></i><span>ion-ios-cloudy-night</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-ios-cloudy-night-outline"></i><span>ion-ios-cloudy-night-outline</span></div>
					                    </div>
					                </div>
					            </div>
					
					
					            <div id="demo-icon-box-3" class="tab-pane fade">
					                <div class="alert alert-info">
					                    All brand icons are trademarks of their respective owners. The use of these trademarks does not indicate endorsement of the trademark holder by Drifty, nor vice versa.
					                </div>
					
					                <div class="clearfix demo-icon-list">
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-twitter"></i><span>ion-social-twitter</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-twitter-outline"></i><span>ion-social-twitter-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-facebook"></i><span>ion-social-facebook</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-facebook-outline"></i><span>ion-social-facebook-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-googleplus"></i><span>ion-social-googleplus</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-googleplus-outline"></i><span>ion-social-googleplus-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-google"></i><span>ion-social-google</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-google-outline"></i><span>ion-social-google-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-dribbble"></i><span>ion-social-dribbble</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-dribbble-outline"></i><span>ion-social-dribbble-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-octocat"></i><span>ion-social-octocat</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-github"></i><span>ion-social-github</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-github-outline"></i><span>ion-social-github-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-instagram"></i><span>ion-social-instagram</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-instagram-outline"></i><span>ion-social-instagram-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-whatsapp"></i><span>ion-social-whatsapp</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-whatsapp-outline"></i><span>ion-social-whatsapp-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-snapchat"></i><span>ion-social-snapchat</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-snapchat-outline"></i><span>ion-social-snapchat-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-foursquare"></i><span>ion-social-foursquare</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-foursquare-outline"></i><span>ion-social-foursquare-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-pinterest"></i><span>ion-social-pinterest</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-pinterest-outline"></i><span>ion-social-pinterest-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-rss"></i><span>ion-social-rss</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-rss-outline"></i><span>ion-social-rss-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-tumblr"></i><span>ion-social-tumblr</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-tumblr-outline"></i><span>ion-social-tumblr-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-wordpress"></i><span>ion-social-wordpress</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-wordpress-outline"></i><span>ion-social-wordpress-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-reddit"></i><span>ion-social-reddit</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-reddit-outline"></i><span>ion-social-reddit-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-hackernews"></i><span>ion-social-hackernews</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-hackernews-outline"></i><span>ion-social-hackernews-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-designernews"></i><span>ion-social-designernews</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-designernews-outline"></i><span>ion-social-designernews-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-yahoo"></i><span>ion-social-yahoo</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-yahoo-outline"></i><span>ion-social-yahoo-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-buffer"></i><span>ion-social-buffer</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-buffer-outline"></i><span>ion-social-buffer-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-skype"></i><span>ion-social-skype</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-skype-outline"></i><span>ion-social-skype-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-linkedin"></i><span>ion-social-linkedin</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-linkedin-outline"></i><span>ion-social-linkedin-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-vimeo"></i><span>ion-social-vimeo</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-vimeo-outline"></i><span>ion-social-vimeo-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-twitch"></i><span>ion-social-twitch</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-twitch-outline"></i><span>ion-social-twitch-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-youtube"></i><span>ion-social-youtube</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-youtube-outline"></i><span>ion-social-youtube-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-dropbox"></i><span>ion-social-dropbox</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-dropbox-outline"></i><span>ion-social-dropbox-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-apple"></i><span>ion-social-apple</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-apple-outline"></i><span>ion-social-apple-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-android"></i><span>ion-social-android</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-android-outline"></i><span>ion-social-android-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-windows"></i><span>ion-social-windows</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-windows-outline"></i><span>ion-social-windows-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-html5"></i><span>ion-social-html5</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-html5-outline"></i><span>ion-social-html5-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-css3"></i><span>ion-social-css3</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-css3-outline"></i><span>ion-social-css3-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-javascript"></i><span>ion-social-javascript</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-javascript-outline"></i><span>ion-social-javascript-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-angular"></i><span>ion-social-angular</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-angular-outline"></i><span>ion-social-angular-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-nodejs"></i><span>ion-social-nodejs</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-sass"></i><span>ion-social-sass</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-python"></i><span>ion-social-python</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-chrome"></i><span>ion-social-chrome</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-chrome-outline"></i><span>ion-social-chrome-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-codepen"></i><span>ion-social-codepen</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-codepen-outline"></i><span>ion-social-codepen-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-markdown"></i><span>ion-social-markdown</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-tux"></i><span>ion-social-tux</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-freebsd-devil"></i><span>ion-social-freebsd-devil</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-usd"></i><span>ion-social-usd</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-usd-outline"></i><span>ion-social-usd-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-bitcoin"></i><span>ion-social-bitcoin</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-bitcoin-outline"></i><span>ion-social-bitcoin-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-yen"></i><span>ion-social-yen</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-yen-outline"></i><span>ion-social-yen-outline</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-euro"></i><span>ion-social-euro</span></div>
					                    </div>
					                    <div class="col-sm-6 col-md-3">
					                        <div class="demo-icon"><i class="ion-social-euro-outline"></i><span>ion-social-euro-outline</span></div>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
					
					
					
                </div>
                <!--===================================================-->
                <!--End page content-->


            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

            <!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <span class="label label-<?php if($userObj->sex == 0): ?>danger<?php elseif($userObj->sex == 1): ?>info<?php else: ?>warning<?php endif; ?> pull-right"><?php if($userObj->sex == 0): ?>女<?php elseif($userObj->sex == 1): ?>男<?php else: ?>保密<?php endif; ?></span>
                                <img class="img-circle img-sm img-border" src="<?php if($userObj->photo == ''): ?>/static/admin/img/profile-photos/1.png<?php else: ?><?php echo $userObj->photo; endif; ?>" alt="<?php echo $userObj->username; ?>">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name"><?php echo $userObj->username; ?></p>
                                <span class="mnp-desc"><?php if($userObj->email): ?><?php echo $userObj->email; else: ?><?php echo $userObj->telephone; endif; ?></span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="<?php echo url('admin/user/edit',['id'=>$userObj->id]); ?>" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> 我的资料
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> 设置
                            </a>
                            <a href="<?php echo url('admin/user/lockScreen'); ?>" class="list-group-item">
                                <i class="demo-pli-computer-secure icon-lg icon-fw"></i> 锁屏
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" onclick="loginOut()">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> 退出
                            </a>
                        </div>
                    </div>

                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut">
                        <ul class="list-unstyled">
                            <li class="col-xs-3" data-content="我的资料">
                                <a class="shortcut-grid" href="javascript:void(0)">
                                    <i class="demo-psi-male"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="消息">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-speech-bubble-3"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-thunder"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="锁屏">
                                <a class="shortcut-grid" href="<?php echo url('/admin/user/lockScreen'); ?>">
                                    <i class="demo-psi-lock-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="list-header">基本配置</li>
                        <!--Menu list item-->
                        <?php if(is_array($menuAry) || $menuAry instanceof \think\Collection || $menuAry instanceof \think\Paginator): $i = 0; $__LIST__ = $menuAry;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($item['children'] != ''): ?>
                        <li>
                            <a href="<?php echo url($item['url']); ?>">
                                <i class="<?php echo $item['icon']; ?>"></i>
                                <span class="menu-title"><?php echo $item['name']; ?></span>
                                <i class="arrow"></i>
                            </a>
                            <!--Submenu-->
                            <ul class="collapse">
                                <?php if(is_array($item['children']) || $item['children'] instanceof \think\Collection || $item['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                                <li <?php if(adminMenuUrl($value['url']) == 'true'): ?>class="active-link"<?php endif; ?>><a href="<?php echo url($value['url']); ?>"><i class="<?php echo $value['icon']; ?>"></i><?php echo $value['name']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>
                        <?php else: ?>
                        <li <?php if($item['url'] == $urlRequest): ?>class="active-link"<?php endif; ?>>
                            <a href="<?php echo $item['url']; ?>">
                                <i class="<?php echo $item['icon']; ?>"></i>
                                <span class="menu-title"><?php echo $item['name']; ?></span>
                            </a>
                        </li>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <!--Widget-->
                    <!--================================-->
                    <div class="mainnav-widget">

                        <!-- Show the button on collapsed navigation -->
                        <div class="show-small">
                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                <i class="demo-pli-monitor-2"></i>
                            </a>
                        </div>

                        <!-- Hide the content on collapsed navigation -->
                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                            <ul class="list-group">
                                <li class="list-header pad-no pad-ver">Server Status</li>
                                <li class="mar-btm">
                                    <span class="label label-primary pull-right">15%</span>
                                    <p>CPU Usage</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                            <span class="sr-only">15%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <span class="label label-purple pull-right">75%</span>
                                    <p>Bandwidth</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                            <span class="sr-only">75%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End widget-->
                </div>
            </div>
        </div>
        <!--End menu-->
    </div>
</nav>
<!--END MAIN NAVIGATION-->
        </div>

        <!--===================================================-->
<footer id="footer">
    <div class="show-fixed pull-right">
        You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
    </div>
    <p class="pad-lft">&#0169; 2017-2020 志远出品 Think Engine.</p>
</footer>


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
        <!-- SETTINGS - DEMO PURPOSE ONLY -->
    <!--===================================================-->
    <div id="demo-set" class="demo-set">
        <div id="demo-set-body" class="demo-set-body collapse">
            <div id="demo-set-alert"></div>
            <div class="pad-hor bord-btm clearfix">
                <div class="pull-right pad-top">
                    <button id="demo-btn-close-settings" class="btn btn-trans">
                        <i class="pci-cross pci-circle icon-lg"></i>
                    </button>
                </div>
                <div class="media">
                    <div class="media-left">
                        <i class="demo-pli-gear icon-2x"></i>
                    </div>
                    <div class="media-body">
                        <span class="text-semibold text-lg text-main">Costomize</span>
                        <p class="text-muted text-sm">Customize Nifty's layout, sidebars, and color schemes.</p>
                    </div>
                </div>
            </div>
            <div class="demo-set-content clearfix">
                <div class="col-xs-6 col-md-3">
                    <div class="pad-all bg-gray-light">
                        <p class="text-semibold text-main text-lg">Layout</p>
                        <p class="text-semibold text-main">Boxed Layout</p>
                        <div class="pad-btm">
                            <div class="pull-right">
                                <input id="demo-box-lay" class="toggle-switch" type="checkbox">
                                <label for="demo-box-lay"></label>
                            </div>
                            Boxed Layout
                        </div>
                        <div class="pad-btm">
                            <div class="pull-right">
                                <button id="demo-box-img" class="btn btn-sm btn-trans" disabled><i class="pci-hor-dots"></i></button>
                            </div>
                            Background Images <span class="label label-primary">New</span>
                        </div>

                        <hr class="new-section-xs bord-no">
                        <p class="text-semibold text-main">Animations</p>
                        <div class="pad-btm">
                            <div class="pull-right">
                                <input id="demo-anim" class="toggle-switch" type="checkbox" checked>
                                <label for="demo-anim"></label>
                            </div>
                            Enable Animations
                        </div>
                        <div class="pad-btm">
                            <div class="select pull-right">
                                <select id="demo-ease">
                                    <option value="effect" selected>ease (Default)</option>
                                    <option value="easeInQuart">easeInQuart</option>
                                    <option value="easeOutQuart">easeOutQuart</option>
                                    <option value="easeInBack">easeInBack</option>
                                    <option value="easeOutBack">easeOutBack</option>
                                    <option value="easeInOutBack">easeInOutBack</option>
                                    <option value="steps">Steps</option>
                                    <option value="jumping">Jumping</option>
                                    <option value="rubber">Rubber</option>
                                </select>
                            </div>
                            Transitions
                        </div>

                        <hr class="new-section-xs bord-no">

                        <p class="text-semibold text-main text-lg">Header / Navbar</p>
                        <div>
                            <div class="pull-right">
                                <input id="demo-navbar-fixed" class="toggle-switch" type="checkbox">
                                <label for="demo-navbar-fixed"></label>
                            </div>
                            Fixed Position
                        </div>

                        <hr class="new-section-xs bord-no">

                        <p class="text-semibold text-main text-lg">Footer</p>
                        <div class="pad-btm">
                            <div class="pull-right">
                                <input id="demo-footer-fixed" class="toggle-switch" type="checkbox">
                                <label for="demo-footer-fixed"></label>
                            </div>
                            Fixed Position
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 pos-rel">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="pad-all">
                                <p class="text-semibold text-main text-lg">Sidebars</p>
                                <p class="text-semibold text-main">Navigation</p>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-nav-fixed" class="toggle-switch" type="checkbox">
                                        <label for="demo-nav-fixed"></label>
                                    </div>
                                    Fixed Position
                                </div>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-nav-profile" class="toggle-switch" type="checkbox" checked>
                                        <label for="demo-nav-profile"></label>
                                    </div>
                                    Widget Profil <small class="label label-primary">New</small>
                                </div>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-nav-shortcut" class="toggle-switch" type="checkbox" checked>
                                        <label for="demo-nav-shortcut"></label>
                                    </div>
                                    Shortcut Buttons
                                </div>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-nav-coll" class="toggle-switch" type="checkbox">
                                        <label for="demo-nav-coll"></label>
                                    </div>
                                    Collapsed Mode
                                </div>

                                <div class="clearfix">
                                    <div class="select pad-btm pull-right">
                                        <select id="demo-nav-offcanvas">
                                            <option value="none" selected disabled="disabled">-- Select Mode --</option>
                                            <option value="push">Push</option>
                                            <option value="slide">Slide in on top</option>
                                            <option value="reveal">Reveal</option>
                                        </select>
                                    </div>
                                    Off-Canvas
                                </div>

                                <p class="text-semibold text-main">Aside</p>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-asd-vis" class="toggle-switch" type="checkbox">
                                        <label for="demo-asd-vis"></label>
                                    </div>
                                    Visible
                                </div>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-asd-fixed" class="toggle-switch" type="checkbox" checked>
                                        <label for="demo-asd-fixed"></label>
                                    </div>
                                    Fixed Position
                                </div>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-asd-float" class="toggle-switch" type="checkbox" checked>
                                        <label for="demo-asd-float"></label>
                                    </div>
                                    Floating <span class="label label-primary">New</span>
                                </div>
                                <div class="mar-btm">
                                    <div class="pull-right">
                                        <input id="demo-asd-align" class="toggle-switch" type="checkbox">
                                        <label for="demo-asd-align"></label>
                                    </div>
                                    Left Side
                                </div>
                                <div>
                                    <div class="pull-right">
                                        <input id="demo-asd-themes" class="toggle-switch" type="checkbox">
                                        <label for="demo-asd-themes"></label>
                                    </div>
                                    Dark Version
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div id="demo-theme">
                                <div class="row bg-gray-light pad-top">
                                    <p class="text-semibold text-main text-lg pad-lft">Color Schemes</p>
                                    <div class="demo-theme-btn col-md-4 pad-ver">
                                        <p class="text-semibold text-main">Header</p>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-a-light add-tooltip" data-theme="theme-light" data-type="a" data-title="(A). Light">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-navy add-tooltip" data-theme="theme-navy" data-type="a" data-title="(A). Navy Blue">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-ocean add-tooltip" data-theme="theme-ocean" data-type="a" data-title="(A). Ocean">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-a-lime add-tooltip" data-theme="theme-lime" data-type="a" data-title="(A). Lime">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-purple add-tooltip" data-theme="theme-purple" data-type="a" data-title="(A). Purple">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-dust add-tooltip" data-theme="theme-dust" data-type="a" data-title="(A). Dust">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-a-mint add-tooltip" data-theme="theme-mint" data-type="a" data-title="(A). Mint">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-yellow add-tooltip" data-theme="theme-yellow" data-type="a" data-title="(A). Yellow">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-well-red add-tooltip" data-theme="theme-well-red" data-type="a" data-title="(A). Well Red">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-a-coffee add-tooltip" data-theme="theme-coffee" data-type="a" data-title="(A). Coffee">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="a" data-title="(A). Prickly pear">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-a-dark add-tooltip" data-theme="theme-dark" data-type="a" data-title="(A). Dark">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="demo-theme-btn col-md-4 pad-ver">
                                        <p class="text-semibold text-main">Brand</p>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-b-light add-tooltip" data-theme="theme-light" data-type="b" data-title="(B). Light">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-navy add-tooltip" data-theme="theme-navy" data-type="b" data-title="(B). Navy Blue">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-ocean add-tooltip" data-theme="theme-ocean" data-type="b" data-title="(B). Ocean">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-b-lime add-tooltip" data-theme="theme-lime" data-type="b" data-title="(B). Lime">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-purple add-tooltip" data-theme="theme-purple" data-type="b" data-title="(B). Purple">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-dust add-tooltip" data-theme="theme-dust" data-type="b" data-title="(B). Dust">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-b-mint add-tooltip" data-theme="theme-mint" data-type="b" data-title="(B). Mint">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-yellow add-tooltip" data-theme="theme-yellow" data-type="b" data-title="(B). Yellow">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-well-red add-tooltip" data-theme="theme-well-red" data-type="b" data-title="(B). Well red">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-b-coffee add-tooltip" data-theme="theme-coffee" data-type="b" data-title="(B). Coofee">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="b" data-title="(B). Prickly pear">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-b-dark add-tooltip" data-theme="theme-dark" data-type="b" data-title="(B). Dark">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="demo-theme-btn col-md-4 pad-ver">
                                        <p class="text-semibold text-main">Navigation</p>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-c-light add-tooltip" data-theme="theme-light" data-type="c" data-title="(C). Light">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-navy add-tooltip" data-theme="theme-navy" data-type="c" data-title="(C). Navy Blue">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-ocean add-tooltip" data-theme="theme-ocean" data-type="c" data-title="(C). Ocean">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-c-lime add-tooltip" data-theme="theme-lime" data-type="c" data-title="(C). Lime">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-purple add-tooltip" data-theme="theme-purple" data-type="c" data-title="(C). Purple">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-dust add-tooltip" data-theme="theme-dust" data-type="c" data-title="(C). Dust">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-c-mint add-tooltip" data-theme="theme-mint" data-type="c" data-title="(C). Mint">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-yellow add-tooltip" data-theme="theme-yellow" data-type="c" data-title="(C). Yellow">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-well-red add-tooltip" data-theme="theme-well-red" data-type="c" data-title="(C). Well Red">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                        <div class="demo-justify-theme">
                                            <a href="#" class="demo-theme demo-c-coffee add-tooltip" data-theme="theme-coffee" data-type="c" data-title="(C). Coffee">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="c" data-title="(C). Prickly pear">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                            <a href="#" class="demo-theme demo-c-dark add-tooltip" data-theme="theme-dark" data-type="c" data-title="(C). Dark">
                                                <div class="demo-theme-brand"></div>
                                                <div class="demo-theme-head"></div>
                                                <div class="demo-theme-nav"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="demo-bg-boxed" class="demo-bg-boxed">
                        <div class="demo-bg-boxed-content">
                            <p class="text-semibold text-main text-lg mar-no">Background Images</p>
                            <p class="text-sm text-muted">Add an image to replace the solid background color</p>
                            <div class="row">
                                <div class="col-lg-4 text-justify">
                                    <p class="text-semibold text-main">Blurred</p>
                                    <div id="demo-blurred-bg" class="text-justify">
                                        <!--Blurred Backgrounds-->
                                    </div>
                                </div>
                                <div class="col-lg-4 text-justify">
                                    <p class="text-semibold text-main">Polygon &amp; Geometric</p>
                                    <div id="demo-polygon-bg" class="text-justify">
                                        <!--Polygon Backgrounds-->
                                    </div>
                                </div>
                                <div class="col-lg-4 text-justify">
                                    <p class="text-semibold text-main">Abstract</p>
                                    <div id="demo-abstract-bg" class="text-justify">
                                        <!--Abstract Backgrounds-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="demo-bg-boxed-footer">
                            <button id="demo-close-boxed-img" class="btn btn-primary">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="demo-set-btn" class="btn" data-toggle="collapse" data-target="#demo-set-body"><i class="demo-psi-gear icon-lg"></i></button>
    </div>
    <!--===================================================-->
    <!-- END SETTINGS -->


</body>
</html>

