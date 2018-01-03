<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:100:"D:\wamp\www\120.79.12.123\ThinkEngine\public/../application/admin\view\index\icons-font-awesome.html";i:1511745266;s:24:"static/admin/navbar.html";i:1514944209;s:22:"static/admin/menu.html";i:1511605267;s:24:"static/admin/footer.html";i:1511745268;}*/ ?>
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

                <div class="pad-all mar-btm bg-mint text-center">
                    <h1 class="text-4x text-semibold text-light">Font Awesome</h1>
                    <p class="pad-btm">Font Awesome is a full suite of 820+ pictographic icons for easy scalable vector graphics on website</p>
                    <br>
                    <p class="text-2x text-thin"><strong>820+</strong> Free icons set</p>
                </div>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					<div class="panel">
					
					    <!--Panel body-->
					    <div class="panel-body">
					        <h4 class="pad-top">23 New Icons in 4.6</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-american-sign-language-interpreting"></i><span>fa fa-american-sign-language-interpreting</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-asl-interpreting"></i><span>fa fa-asl-interpreting</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-assistive-listening-systems"></i><span>fa fa-assistive-listening-systems</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-audio-description"></i><span>fa fa-audio-description</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-blind"></i><span>fa fa-blind</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-braille"></i><span>fa fa-braille</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deaf"></i><span>fa fa-deaf</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deafness"></i><span>fa fa-deafness</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-envira"></i><span>fa fa-envira</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gitlab"></i><span>fa fa-gitlab</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-glide"></i><span>fa fa-glide</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-glide-g"></i><span>fa fa-glide-g</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hard-of-hearing"></i><span>fa fa-hard-of-hearing</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-low-vision"></i><span>fa fa-low-vision</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-question-circle-o"></i><span>fa fa-question-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sign-language"></i><span>fa fa-sign-language</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-signing"></i><span>fa fa-signing</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-snapchat"></i><span>fa fa-snapchat</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-snapchat-ghost"></i><span>fa fa-snapchat-ghost</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-snapchat-square"></i><span>fa fa-snapchat-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-universal-access"></i><span>fa fa-universal-access</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-viadeo"></i><span>fa fa-viadeo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-viadeo-square"></i><span>fa fa-viadeo-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-volume-control-phone"></i><span>fa fa-volume-control-phone</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair-alt"></i><span>fa fa-wheelchair-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wpbeginner"></i><span>fa fa-wpbeginner</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wpforms"></i><span>fa fa-wpforms</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Web Application Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-adjust"></i><span>fa fa-adjust</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-american-sign-language-interpreting"></i><span>fa fa-american-sign-language-interpreting</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-anchor"></i><span>fa fa-anchor</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-archive"></i><span>fa fa-archive</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-area-chart"></i><span>fa fa-area-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows"></i><span>fa fa-arrows</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows-h"></i><span>fa fa-arrows-h</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows-v"></i><span>fa fa-arrows-v</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-asl-interpreting"></i><span>fa fa-asl-interpreting</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-assistive-listening-systems"></i><span>fa fa-assistive-listening-systems</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-asterisk"></i><span>fa fa-asterisk</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-at"></i><span>fa fa-at</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-audio-description"></i><span>fa fa-audio-description</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-automobile"></i><span>fa fa-automobile</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-balance-scale"></i><span>fa fa-balance-scale</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ban"></i><span>fa fa-ban</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bank"></i><span>fa fa-bank</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bar-chart"></i><span>fa fa-bar-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bar-chart-o"></i><span>fa fa-bar-chart-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-barcode"></i><span>fa fa-barcode</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bars"></i><span>fa fa-bars</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-0"></i><span>fa fa-battery-0</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-1"></i><span>fa fa-battery-1</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-2"></i><span>fa fa-battery-2</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-3"></i><span>fa fa-battery-3</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-4"></i><span>fa fa-battery-4</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-empty"></i><span>fa fa-battery-empty</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-full"></i><span>fa fa-battery-full</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-half"></i><span>fa fa-battery-half</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-quarter"></i><span>fa fa-battery-quarter</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-battery-three-quarters"></i><span>fa fa-battery-three-quarters</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bed"></i><span>fa fa-bed</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-beer"></i><span>fa fa-beer</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bell"></i><span>fa fa-bell</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bell-o"></i><span>fa fa-bell-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bell-slash"></i><span>fa fa-bell-slash</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bell-slash-o"></i><span>fa fa-bell-slash-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bicycle"></i><span>fa fa-bicycle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-binoculars"></i><span>fa fa-binoculars</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-birthday-cake"></i><span>fa fa-birthday-cake</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-blind"></i><span>fa fa-blind</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bluetooth"></i><span>fa fa-bluetooth</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bluetooth-b"></i><span>fa fa-bluetooth-b</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bolt"></i><span>fa fa-bolt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bomb"></i><span>fa fa-bomb</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-book"></i><span>fa fa-book</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bookmark"></i><span>fa fa-bookmark</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bookmark-o"></i><span>fa fa-bookmark-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-braille"></i><span>fa fa-braille</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-briefcase"></i><span>fa fa-briefcase</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bug"></i><span>fa fa-bug</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-building"></i><span>fa fa-building</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-building-o"></i><span>fa fa-building-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bullhorn"></i><span>fa fa-bullhorn</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bullseye"></i><span>fa fa-bullseye</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bus"></i><span>fa fa-bus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cab"></i><span>fa fa-cab</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calculator"></i><span>fa fa-calculator</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calendar"></i><span>fa fa-calendar</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calendar-check-o"></i><span>fa fa-calendar-check-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calendar-minus-o"></i><span>fa fa-calendar-minus-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calendar-o"></i><span>fa fa-calendar-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calendar-plus-o"></i><span>fa fa-calendar-plus-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-calendar-times-o"></i><span>fa fa-calendar-times-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-camera"></i><span>fa fa-camera</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-camera-retro"></i><span>fa fa-camera-retro</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-car"></i><span>fa fa-car</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-down"></i><span>fa fa-caret-square-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-left"></i><span>fa fa-caret-square-o-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-right"></i><span>fa fa-caret-square-o-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-up"></i><span>fa fa-caret-square-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cart-arrow-down"></i><span>fa fa-cart-arrow-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cart-plus"></i><span>fa fa-cart-plus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc"></i><span>fa fa-cc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-certificate"></i><span>fa fa-certificate</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check"></i><span>fa fa-check</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check-circle"></i><span>fa fa-check-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check-circle-o"></i><span>fa fa-check-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check-square"></i><span>fa fa-check-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check-square-o"></i><span>fa fa-check-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-child"></i><span>fa fa-child</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle"></i><span>fa fa-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle-o"></i><span>fa fa-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle-o-notch"></i><span>fa fa-circle-o-notch</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle-thin"></i><span>fa fa-circle-thin</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-clock-o"></i><span>fa fa-clock-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-clone"></i><span>fa fa-clone</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-close"></i><span>fa fa-close</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cloud"></i><span>fa fa-cloud</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cloud-download"></i><span>fa fa-cloud-download</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cloud-upload"></i><span>fa fa-cloud-upload</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-code"></i><span>fa fa-code</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-code-fork"></i><span>fa fa-code-fork</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-coffee"></i><span>fa fa-coffee</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cog"></i><span>fa fa-cog</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cogs"></i><span>fa fa-cogs</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-comment"></i><span>fa fa-comment</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-comment-o"></i><span>fa fa-comment-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-commenting"></i><span>fa fa-commenting</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-commenting-o"></i><span>fa fa-commenting-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-comments"></i><span>fa fa-comments</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-comments-o"></i><span>fa fa-comments-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-compass"></i><span>fa fa-compass</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-copyright"></i><span>fa fa-copyright</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-creative-commons"></i><span>fa fa-creative-commons</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-credit-card"></i><span>fa fa-credit-card</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-credit-card-alt"></i><span>fa fa-credit-card-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-crop"></i><span>fa fa-crop</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-crosshairs"></i><span>fa fa-crosshairs</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cube"></i><span>fa fa-cube</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cubes"></i><span>fa fa-cubes</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cutlery"></i><span>fa fa-cutlery</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dashboard"></i><span>fa fa-dashboard</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-database"></i><span>fa fa-database</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deaf"></i><span>fa fa-deaf</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deafness"></i><span>fa fa-deafness</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-desktop"></i><span>fa fa-desktop</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-diamond"></i><span>fa fa-diamond</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dot-circle-o"></i><span>fa fa-dot-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-download"></i><span>fa fa-download</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-edit"></i><span>fa fa-edit</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ellipsis-h"></i><span>fa fa-ellipsis-h</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ellipsis-v"></i><span>fa fa-ellipsis-v</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-envelope"></i><span>fa fa-envelope</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-envelope-o"></i><span>fa fa-envelope-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-envelope-square"></i><span>fa fa-envelope-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eraser"></i><span>fa fa-eraser</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-exchange"></i><span>fa fa-exchange</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-exclamation"></i><span>fa fa-exclamation</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-exclamation-circle"></i><span>fa fa-exclamation-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-exclamation-triangle"></i><span>fa fa-exclamation-triangle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-external-link"></i><span>fa fa-external-link</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-external-link-square"></i><span>fa fa-external-link-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eye"></i><span>fa fa-eye</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eye-slash"></i><span>fa fa-eye-slash</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eyedropper"></i><span>fa fa-eyedropper</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fax"></i><span>fa fa-fax</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-feed"></i><span>fa fa-feed</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-female"></i><span>fa fa-female</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fighter-jet"></i><span>fa fa-fighter-jet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-archive-o"></i><span>fa fa-file-archive-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-audio-o"></i><span>fa fa-file-audio-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-code-o"></i><span>fa fa-file-code-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-excel-o"></i><span>fa fa-file-excel-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-image-o"></i><span>fa fa-file-image-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-movie-o"></i><span>fa fa-file-movie-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-pdf-o"></i><span>fa fa-file-pdf-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-photo-o"></i><span>fa fa-file-photo-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-picture-o"></i><span>fa fa-file-picture-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-powerpoint-o"></i><span>fa fa-file-powerpoint-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-sound-o"></i><span>fa fa-file-sound-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-video-o"></i><span>fa fa-file-video-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-word-o"></i><span>fa fa-file-word-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-zip-o"></i><span>fa fa-file-zip-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-film"></i><span>fa fa-film</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-filter"></i><span>fa fa-filter</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fire"></i><span>fa fa-fire</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fire-extinguisher"></i><span>fa fa-fire-extinguisher</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-flag"></i><span>fa fa-flag</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-flag-checkered"></i><span>fa fa-flag-checkered</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-flag-o"></i><span>fa fa-flag-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-flash"></i><span>fa fa-flash</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-flask"></i><span>fa fa-flask</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-folder"></i><span>fa fa-folder</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-folder-o"></i><span>fa fa-folder-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-folder-open"></i><span>fa fa-folder-open</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-folder-open-o"></i><span>fa fa-folder-open-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-frown-o"></i><span>fa fa-frown-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-futbol-o"></i><span>fa fa-futbol-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gamepad"></i><span>fa fa-gamepad</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gavel"></i><span>fa fa-gavel</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gear"></i><span>fa fa-gear</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gears"></i><span>fa fa-gears</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gift"></i><span>fa fa-gift</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-glass"></i><span>fa fa-glass</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-globe"></i><span>fa fa-globe</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-graduation-cap"></i><span>fa fa-graduation-cap</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-group"></i><span>fa fa-group</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-grab-o"></i><span>fa fa-hand-grab-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-lizard-o"></i><span>fa fa-hand-lizard-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-paper-o"></i><span>fa fa-hand-paper-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-peace-o"></i><span>fa fa-hand-peace-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-pointer-o"></i><span>fa fa-hand-pointer-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-rock-o"></i><span>fa fa-hand-rock-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-scissors-o"></i><span>fa fa-hand-scissors-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-spock-o"></i><span>fa fa-hand-spock-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-stop-o"></i><span>fa fa-hand-stop-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hard-of-hearing"></i><span>fa fa-hard-of-hearing</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hashtag"></i><span>fa fa-hashtag</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hdd-o"></i><span>fa fa-hdd-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-headphones"></i><span>fa fa-headphones</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-heart"></i><span>fa fa-heart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-heart-o"></i><span>fa fa-heart-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-heartbeat"></i><span>fa fa-heartbeat</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-history"></i><span>fa fa-history</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-home"></i><span>fa fa-home</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hotel"></i><span>fa fa-hotel</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass"></i><span>fa fa-hourglass</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-1"></i><span>fa fa-hourglass-1</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-2"></i><span>fa fa-hourglass-2</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-3"></i><span>fa fa-hourglass-3</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-end"></i><span>fa fa-hourglass-end</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-half"></i><span>fa fa-hourglass-half</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-o"></i><span>fa fa-hourglass-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hourglass-start"></i><span>fa fa-hourglass-start</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-i-cursor"></i><span>fa fa-i-cursor</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-image"></i><span>fa fa-image</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-inbox"></i><span>fa fa-inbox</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-industry"></i><span>fa fa-industry</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-info"></i><span>fa fa-info</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-info-circle"></i><span>fa fa-info-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-institution"></i><span>fa fa-institution</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-key"></i><span>fa fa-key</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-keyboard-o"></i><span>fa fa-keyboard-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-language"></i><span>fa fa-language</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-laptop"></i><span>fa fa-laptop</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-leaf"></i><span>fa fa-leaf</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-legal"></i><span>fa fa-legal</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-lemon-o"></i><span>fa fa-lemon-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-level-down"></i><span>fa fa-level-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-level-up"></i><span>fa fa-level-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-life-bouy"></i><span>fa fa-life-bouy</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-life-buoy"></i><span>fa fa-life-buoy</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-life-ring"></i><span>fa fa-life-ring</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-life-saver"></i><span>fa fa-life-saver</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-lightbulb-o"></i><span>fa fa-lightbulb-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-line-chart"></i><span>fa fa-line-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-location-arrow"></i><span>fa fa-location-arrow</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-lock"></i><span>fa fa-lock</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-low-vision"></i><span>fa fa-low-vision</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-magic"></i><span>fa fa-magic</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-magnet"></i><span>fa fa-magnet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mail-forward"></i><span>fa fa-mail-forward</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mail-reply"></i><span>fa fa-mail-reply</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mail-reply-all"></i><span>fa fa-mail-reply-all</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-male"></i><span>fa fa-male</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-map"></i><span>fa fa-map</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-map-marker"></i><span>fa fa-map-marker</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-map-o"></i><span>fa fa-map-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-map-pin"></i><span>fa fa-map-pin</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-map-signs"></i><span>fa fa-map-signs</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-meh-o"></i><span>fa fa-meh-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-microphone"></i><span>fa fa-microphone</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-microphone-slash"></i><span>fa fa-microphone-slash</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-minus"></i><span>fa fa-minus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-minus-circle"></i><span>fa fa-minus-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-minus-square"></i><span>fa fa-minus-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-minus-square-o"></i><span>fa fa-minus-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mobile"></i><span>fa fa-mobile</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mobile-phone"></i><span>fa fa-mobile-phone</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-money"></i><span>fa fa-money</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-moon-o"></i><span>fa fa-moon-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mortar-board"></i><span>fa fa-mortar-board</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-motorcycle"></i><span>fa fa-motorcycle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mouse-pointer"></i><span>fa fa-mouse-pointer</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-music"></i><span>fa fa-music</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-navicon"></i><span>fa fa-navicon</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-newspaper-o"></i><span>fa fa-newspaper-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-object-group"></i><span>fa fa-object-group</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-object-ungroup"></i><span>fa fa-object-ungroup</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paint-brush"></i><span>fa fa-paint-brush</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paper-plane"></i><span>fa fa-paper-plane</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paper-plane-o"></i><span>fa fa-paper-plane-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paw"></i><span>fa fa-paw</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pencil"></i><span>fa fa-pencil</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pencil-square"></i><span>fa fa-pencil-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pencil-square-o"></i><span>fa fa-pencil-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-percent"></i><span>fa fa-percent</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-phone"></i><span>fa fa-phone</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-phone-square"></i><span>fa fa-phone-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-photo"></i><span>fa fa-photo</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-picture-o"></i><span>fa fa-picture-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pie-chart"></i><span>fa fa-pie-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plane"></i><span>fa fa-plane</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plug"></i><span>fa fa-plug</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus"></i><span>fa fa-plus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus-circle"></i><span>fa fa-plus-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus-square"></i><span>fa fa-plus-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus-square-o"></i><span>fa fa-plus-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-power-off"></i><span>fa fa-power-off</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-print"></i><span>fa fa-print</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-puzzle-piece"></i><span>fa fa-puzzle-piece</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-qrcode"></i><span>fa fa-qrcode</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-question"></i><span>fa fa-question</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-question-circle"></i><span>fa fa-question-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-question-circle-o"></i><span>fa fa-question-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-quote-left"></i><span>fa fa-quote-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-quote-right"></i><span>fa fa-quote-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-random"></i><span>fa fa-random</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-recycle"></i><span>fa fa-recycle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-refresh"></i><span>fa fa-refresh</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-registered"></i><span>fa fa-registered</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-remove"></i><span>fa fa-remove</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-reorder"></i><span>fa fa-reorder</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-reply"></i><span>fa fa-reply</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-reply-all"></i><span>fa fa-reply-all</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-retweet"></i><span>fa fa-retweet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-road"></i><span>fa fa-road</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rocket"></i><span>fa fa-rocket</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rss"></i><span>fa fa-rss</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rss-square"></i><span>fa fa-rss-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-search"></i><span>fa fa-search</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-search-minus"></i><span>fa fa-search-minus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-search-plus"></i><span>fa fa-search-plus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-send"></i><span>fa fa-send</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-send-o"></i><span>fa fa-send-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-server"></i><span>fa fa-server</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share"></i><span>fa fa-share</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share-alt"></i><span>fa fa-share-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share-alt-square"></i><span>fa fa-share-alt-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share-square"></i><span>fa fa-share-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share-square-o"></i><span>fa fa-share-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-shield"></i><span>fa fa-shield</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ship"></i><span>fa fa-ship</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-shopping-bag"></i><span>fa fa-shopping-bag</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-shopping-basket"></i><span>fa fa-shopping-basket</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-shopping-cart"></i><span>fa fa-shopping-cart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sign-in"></i><span>fa fa-sign-in</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sign-language"></i><span>fa fa-sign-language</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sign-out"></i><span>fa fa-sign-out</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-signal"></i><span>fa fa-signal</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-signing"></i><span>fa fa-signing</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sitemap"></i><span>fa fa-sitemap</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sliders"></i><span>fa fa-sliders</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-smile-o"></i><span>fa fa-smile-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-soccer-ball-o"></i><span>fa fa-soccer-ball-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort"></i><span>fa fa-sort</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-alpha-asc"></i><span>fa fa-sort-alpha-asc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-alpha-desc"></i><span>fa fa-sort-alpha-desc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-amount-asc"></i><span>fa fa-sort-amount-asc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-amount-desc"></i><span>fa fa-sort-amount-desc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-asc"></i><span>fa fa-sort-asc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-desc"></i><span>fa fa-sort-desc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-down"></i><span>fa fa-sort-down</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-numeric-asc"></i><span>fa fa-sort-numeric-asc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-numeric-desc"></i><span>fa fa-sort-numeric-desc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sort-up"></i><span>fa fa-sort-up</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-space-shuttle"></i><span>fa fa-space-shuttle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-spinner"></i><span>fa fa-spinner</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-spoon"></i><span>fa fa-spoon</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-square"></i><span>fa fa-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-square-o"></i><span>fa fa-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-star"></i><span>fa fa-star</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-star-half"></i><span>fa fa-star-half</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-star-half-empty"></i><span>fa fa-star-half-empty</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-star-half-full"></i><span>fa fa-star-half-full</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-star-half-o"></i><span>fa fa-star-half-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-star-o"></i><span>fa fa-star-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sticky-note"></i><span>fa fa-sticky-note</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sticky-note-o"></i><span>fa fa-sticky-note-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-street-view"></i><span>fa fa-street-view</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-suitcase"></i><span>fa fa-suitcase</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sun-o"></i><span>fa fa-sun-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-support"></i><span>fa fa-support</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tablet"></i><span>fa fa-tablet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tachometer"></i><span>fa fa-tachometer</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tag"></i><span>fa fa-tag</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tags"></i><span>fa fa-tags</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tasks"></i><span>fa fa-tasks</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-taxi"></i><span>fa fa-taxi</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-television"></i><span>fa fa-television</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-terminal"></i><span>fa fa-terminal</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumb-tack"></i><span>fa fa-thumb-tack</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-down"></i><span>fa fa-thumbs-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-o-down"></i><span>fa fa-thumbs-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-o-up"></i><span>fa fa-thumbs-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-up"></i><span>fa fa-thumbs-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ticket"></i><span>fa fa-ticket</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-times"></i><span>fa fa-times</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-times-circle"></i><span>fa fa-times-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-times-circle-o"></i><span>fa fa-times-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tint"></i><span>fa fa-tint</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-down"></i><span>fa fa-toggle-down</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-left"></i><span>fa fa-toggle-left</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-off"></i><span>fa fa-toggle-off</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-on"></i><span>fa fa-toggle-on</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-right"></i><span>fa fa-toggle-right</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-up"></i><span>fa fa-toggle-up</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-trademark"></i><span>fa fa-trademark</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-trash"></i><span>fa fa-trash</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-trash-o"></i><span>fa fa-trash-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tree"></i><span>fa fa-tree</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-trophy"></i><span>fa fa-trophy</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-truck"></i><span>fa fa-truck</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tty"></i><span>fa fa-tty</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tv"></i><span>fa fa-tv</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-umbrella"></i><span>fa fa-umbrella</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-universal-access"></i><span>fa fa-universal-access</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-university"></i><span>fa fa-university</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-unlock"></i><span>fa fa-unlock</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-unlock-alt"></i><span>fa fa-unlock-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-unsorted"></i><span>fa fa-unsorted</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-upload"></i><span>fa fa-upload</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-user"></i><span>fa fa-user</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-user-plus"></i><span>fa fa-user-plus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-user-secret"></i><span>fa fa-user-secret</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-user-times"></i><span>fa fa-user-times</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-users"></i><span>fa fa-users</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-video-camera"></i><span>fa fa-video-camera</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-volume-control-phone"></i><span>fa fa-volume-control-phone</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-volume-down"></i><span>fa fa-volume-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-volume-off"></i><span>fa fa-volume-off</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-volume-up"></i><span>fa fa-volume-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-warning"></i><span>fa fa-warning</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair"></i><span>fa fa-wheelchair</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair-alt"></i><span>fa fa-wheelchair-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wifi"></i><span>fa fa-wifi</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wrench"></i><span>fa fa-wrench</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Accessibility Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-american-sign-language-interpreting"></i><span>fa fa-american-sign-language-interpreting</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-asl-interpreting"></i><span>fa fa-asl-interpreting</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-assistive-listening-systems"></i><span>fa fa-assistive-listening-systems</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-audio-description"></i><span>fa fa-audio-description</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-blind"></i><span>fa fa-blind</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-braille"></i><span>fa fa-braille</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc"></i><span>fa fa-cc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deaf"></i><span>fa fa-deaf</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deafness"></i><span>fa fa-deafness</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hard-of-hearing"></i><span>fa fa-hard-of-hearing</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-low-vision"></i><span>fa fa-low-vision</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-question-circle-o"></i><span>fa fa-question-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sign-language"></i><span>fa fa-sign-language</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-signing"></i><span>fa fa-signing</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tty"></i><span>fa fa-tty</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-universal-access"></i><span>fa fa-universal-access</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-volume-control-phone"></i><span>fa fa-volume-control-phone</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair"></i><span>fa fa-wheelchair</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair-alt"></i><span>fa fa-wheelchair-alt</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Hand Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-grab-o"></i><span>fa fa-hand-grab-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-lizard-o"></i><span>fa fa-hand-lizard-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-down"></i><span>fa fa-hand-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-left"></i><span>fa fa-hand-o-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-right"></i><span>fa fa-hand-o-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-up"></i><span>fa fa-hand-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-paper-o"></i><span>fa fa-hand-paper-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-peace-o"></i><span>fa fa-hand-peace-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-pointer-o"></i><span>fa fa-hand-pointer-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-rock-o"></i><span>fa fa-hand-rock-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-scissors-o"></i><span>fa fa-hand-scissors-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-spock-o"></i><span>fa fa-hand-spock-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-stop-o"></i><span>fa fa-hand-stop-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-down"></i><span>fa fa-thumbs-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-o-down"></i><span>fa fa-thumbs-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-o-up"></i><span>fa fa-thumbs-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-thumbs-up"></i><span>fa fa-thumbs-up</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Transportation Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ambulance"></i><span>fa fa-ambulance</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-automobile"></i><span>fa fa-automobile</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bicycle"></i><span>fa fa-bicycle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bus"></i><span>fa fa-bus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cab"></i><span>fa fa-cab</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-car"></i><span>fa fa-car</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fighter-jet"></i><span>fa fa-fighter-jet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-motorcycle"></i><span>fa fa-motorcycle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plane"></i><span>fa fa-plane</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rocket"></i><span>fa fa-rocket</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ship"></i><span>fa fa-ship</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-space-shuttle"></i><span>fa fa-space-shuttle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-subway"></i><span>fa fa-subway</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-taxi"></i><span>fa fa-taxi</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-train"></i><span>fa fa-train</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-truck"></i><span>fa fa-truck</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair"></i><span>fa fa-wheelchair</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Gender Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-genderless"></i><span>fa fa-genderless</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-intersex"></i><span>fa fa-intersex</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mars"></i><span>fa fa-mars</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mars-double"></i><span>fa fa-mars-double</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mars-stroke"></i><span>fa fa-mars-stroke</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mars-stroke-h"></i><span>fa fa-mars-stroke-h</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mars-stroke-v"></i><span>fa fa-mars-stroke-v</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mercury"></i><span>fa fa-mercury</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-neuter"></i><span>fa fa-neuter</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-transgender"></i><span>fa fa-transgender</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-transgender-alt"></i><span>fa fa-transgender-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-venus"></i><span>fa fa-venus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-venus-double"></i><span>fa fa-venus-double</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-venus-mars"></i><span>fa fa-venus-mars</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">File Type Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file"></i><span>fa fa-file</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-archive-o"></i><span>fa fa-file-archive-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-audio-o"></i><span>fa fa-file-audio-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-code-o"></i><span>fa fa-file-code-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-excel-o"></i><span>fa fa-file-excel-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-image-o"></i><span>fa fa-file-image-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-movie-o"></i><span>fa fa-file-movie-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-o"></i><span>fa fa-file-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-pdf-o"></i><span>fa fa-file-pdf-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-photo-o"></i><span>fa fa-file-photo-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-picture-o"></i><span>fa fa-file-picture-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-powerpoint-o"></i><span>fa fa-file-powerpoint-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-sound-o"></i><span>fa fa-file-sound-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-text"></i><span>fa fa-file-text</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-text-o"></i><span>fa fa-file-text-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-video-o"></i><span>fa fa-file-video-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-word-o"></i><span>fa fa-file-word-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-zip-o"></i><span>fa fa-file-zip-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Spinner Icons</h4>
					        <hr>
					
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle-o-notch"></i><span>fa fa-circle-o-notch</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cog"></i><span>fa fa-cog</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gear"></i><span>fa fa-gear</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-refresh"></i><span>fa fa-refresh</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-spinner"></i><span>fa fa-spinner</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Form Control Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check-square"></i><span>fa fa-check-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-check-square-o"></i><span>fa fa-check-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle"></i><span>fa fa-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-circle-o"></i><span>fa fa-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dot-circle-o"></i><span>fa fa-dot-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-minus-square"></i><span>fa fa-minus-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-minus-square-o"></i><span>fa fa-minus-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus-square"></i><span>fa fa-plus-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus-square-o"></i><span>fa fa-plus-square-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-square"></i><span>fa fa-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-square-o"></i><span>fa fa-square-o</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Payment Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-amex"></i><span>fa fa-cc-amex</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-diners-club"></i><span>fa fa-cc-diners-club</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-discover"></i><span>fa fa-cc-discover</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-jcb"></i><span>fa fa-cc-jcb</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-mastercard"></i><span>fa fa-cc-mastercard</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-paypal"></i><span>fa fa-cc-paypal</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-stripe"></i><span>fa fa-cc-stripe</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-visa"></i><span>fa fa-cc-visa</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-credit-card"></i><span>fa fa-credit-card</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-credit-card-alt"></i><span>fa fa-credit-card-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-google-wallet"></i><span>fa fa-google-wallet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paypal"></i><span>fa fa-paypal</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Chart Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-area-chart"></i><span>fa fa-area-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bar-chart"></i><span>fa fa-bar-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bar-chart-o"></i><span>fa fa-bar-chart-o</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-line-chart"></i><span>fa fa-line-chart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pie-chart"></i><span>fa fa-pie-chart</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Currency Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bitcoin"></i><span>fa fa-bitcoin</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-btc"></i><span>fa fa-btc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cny"></i><span>fa fa-cny</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dollar"></i><span>fa fa-dollar</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eur"></i><span>fa fa-eur</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-euro"></i><span>fa fa-euro</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gbp"></i><span>fa fa-gbp</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gg"></i><span>fa fa-gg</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gg-circle"></i><span>fa fa-gg-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ils"></i><span>fa fa-ils</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-inr"></i><span>fa fa-inr</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-jpy"></i><span>fa fa-jpy</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-krw"></i><span>fa fa-krw</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-money"></i><span>fa fa-money</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rmb"></i><span>fa fa-rmb</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rouble"></i><span>fa fa-rouble</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rub"></i><span>fa fa-rub</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ruble"></i><span>fa fa-ruble</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rupee"></i><span>fa fa-rupee</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-shekel"></i><span>fa fa-shekel</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sheqel"></i><span>fa fa-sheqel</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-try"></i><span>fa fa-try</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-turkish-lira"></i><span>fa fa-turkish-lira</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-usd"></i><span>fa fa-usd</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-won"></i><span>fa fa-won</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-yen"></i><span>fa fa-yen</span><span class="text-muted">(alias)</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Text Editor Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-align-center"></i><span>fa fa-align-center</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-align-justify"></i><span>fa fa-align-justify</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-align-left"></i><span>fa fa-align-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-align-right"></i><span>fa fa-align-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bold"></i><span>fa fa-bold</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chain"></i><span>fa fa-chain</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chain-broken"></i><span>fa fa-chain-broken</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-clipboard"></i><span>fa fa-clipboard</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-columns"></i><span>fa fa-columns</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-copy"></i><span>fa fa-copy</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cut"></i><span>fa fa-cut</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dedent"></i><span>fa fa-dedent</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eraser"></i><span>fa fa-eraser</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file"></i><span>fa fa-file</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-o"></i><span>fa fa-file-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-text"></i><span>fa fa-file-text</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-file-text-o"></i><span>fa fa-file-text-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-files-o"></i><span>fa fa-files-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-floppy-o"></i><span>fa fa-floppy-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-font"></i><span>fa fa-font</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-header"></i><span>fa fa-header</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-indent"></i><span>fa fa-indent</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-italic"></i><span>fa fa-italic</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-link"></i><span>fa fa-link</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-list"></i><span>fa fa-list</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-list-alt"></i><span>fa fa-list-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-list-ol"></i><span>fa fa-list-ol</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-list-ul"></i><span>fa fa-list-ul</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-outdent"></i><span>fa fa-outdent</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paperclip"></i><span>fa fa-paperclip</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paragraph"></i><span>fa fa-paragraph</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paste"></i><span>fa fa-paste</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-repeat"></i><span>fa fa-repeat</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rotate-left"></i><span>fa fa-rotate-left</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rotate-right"></i><span>fa fa-rotate-right</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-save"></i><span>fa fa-save</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-scissors"></i><span>fa fa-scissors</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-strikethrough"></i><span>fa fa-strikethrough</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-subscript"></i><span>fa fa-subscript</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-superscript"></i><span>fa fa-superscript</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-table"></i><span>fa fa-table</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-text-height"></i><span>fa fa-text-height</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-text-width"></i><span>fa fa-text-width</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-th"></i><span>fa fa-th</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-th-large"></i><span>fa fa-th-large</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-th-list"></i><span>fa fa-th-list</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-underline"></i><span>fa fa-underline</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-undo"></i><span>fa fa-undo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-unlink"></i><span>fa fa-unlink</span><span class="text-muted">(alias)</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Directional Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-double-down"></i><span>fa fa-angle-double-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-double-left"></i><span>fa fa-angle-double-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-double-right"></i><span>fa fa-angle-double-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-double-up"></i><span>fa fa-angle-double-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-down"></i><span>fa fa-angle-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-left"></i><span>fa fa-angle-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-right"></i><span>fa fa-angle-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angle-up"></i><span>fa fa-angle-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-down"></i><span>fa fa-arrow-circle-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-left"></i><span>fa fa-arrow-circle-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-o-down"></i><span>fa fa-arrow-circle-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-o-left"></i><span>fa fa-arrow-circle-o-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-o-right"></i><span>fa fa-arrow-circle-o-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-o-up"></i><span>fa fa-arrow-circle-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-right"></i><span>fa fa-arrow-circle-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-circle-up"></i><span>fa fa-arrow-circle-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-down"></i><span>fa fa-arrow-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-left"></i><span>fa fa-arrow-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-right"></i><span>fa fa-arrow-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrow-up"></i><span>fa fa-arrow-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows"></i><span>fa fa-arrows</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows-alt"></i><span>fa fa-arrows-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows-h"></i><span>fa fa-arrows-h</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows-v"></i><span>fa fa-arrows-v</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-down"></i><span>fa fa-caret-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-left"></i><span>fa fa-caret-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-right"></i><span>fa fa-caret-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-down"></i><span>fa fa-caret-square-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-left"></i><span>fa fa-caret-square-o-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-right"></i><span>fa fa-caret-square-o-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-square-o-up"></i><span>fa fa-caret-square-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-caret-up"></i><span>fa fa-caret-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-circle-down"></i><span>fa fa-chevron-circle-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-circle-left"></i><span>fa fa-chevron-circle-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-circle-right"></i><span>fa fa-chevron-circle-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-circle-up"></i><span>fa fa-chevron-circle-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-down"></i><span>fa fa-chevron-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-left"></i><span>fa fa-chevron-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-right"></i><span>fa fa-chevron-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chevron-up"></i><span>fa fa-chevron-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-exchange"></i><span>fa fa-exchange</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-down"></i><span>fa fa-hand-o-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-left"></i><span>fa fa-hand-o-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-right"></i><span>fa fa-hand-o-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hand-o-up"></i><span>fa fa-hand-o-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-long-arrow-down"></i><span>fa fa-long-arrow-down</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-long-arrow-left"></i><span>fa fa-long-arrow-left</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-long-arrow-right"></i><span>fa fa-long-arrow-right</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-long-arrow-up"></i><span>fa fa-long-arrow-up</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-down"></i><span>fa fa-toggle-down</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-left"></i><span>fa fa-toggle-left</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-right"></i><span>fa fa-toggle-right</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-toggle-up"></i><span>fa fa-toggle-up</span><span class="text-muted">(alias)</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Video Player Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-arrows-alt"></i><span>fa fa-arrows-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-backward"></i><span>fa fa-backward</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-compress"></i><span>fa fa-compress</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-eject"></i><span>fa fa-eject</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-expand"></i><span>fa fa-expand</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fast-backward"></i><span>fa fa-fast-backward</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fast-forward"></i><span>fa fa-fast-forward</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-forward"></i><span>fa fa-forward</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pause"></i><span>fa fa-pause</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pause-circle"></i><span>fa fa-pause-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pause-circle-o"></i><span>fa fa-pause-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-play"></i><span>fa fa-play</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-play-circle"></i><span>fa fa-play-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-play-circle-o"></i><span>fa fa-play-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-random"></i><span>fa fa-random</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-step-backward"></i><span>fa fa-step-backward</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-step-forward"></i><span>fa fa-step-forward</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stop"></i><span>fa fa-stop</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stop-circle"></i><span>fa fa-stop-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stop-circle-o"></i><span>fa fa-stop-circle-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-youtube-play"></i><span>fa fa-youtube-play</span></div>
					            </div>
					        </div>
					        <br>
					
					        <h4 class="pad-top">Brand Icons</h4>
					        <hr>
					        <div class='alert alert-info'>
					            <ul class='margin-bottom-none padding-left-lg'>
					                <li>All brand icons are trademarks of their respective owners.</li>
					                <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
					                <li>Brand icons should only be used to represent the company or product to which they refer.</li>
					            </ul>
					        </div>
					        <div class='alert alert-warning'>
					            <h4><i class='fa fa-warning'></i> Warning!</h4>
					            Apparently, Adblock Plus can remove Font Awesome brand icons with their 'Remove Social
					            Media Buttons' setting. We will not use hacks to force them to display. Please
					            <a href='https://adblockplus.org/en/bugs' class='alert-link'>report an issue with Adblock Plus</a> if you believe this to be
					            an error. To work around this, you'll need to modify the social icon class names.
					        </div>
					
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-500px"></i><span>fa fa-500px</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-adn"></i><span>fa fa-adn</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-amazon"></i><span>fa fa-amazon</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-android"></i><span>fa fa-android</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-angellist"></i><span>fa fa-angellist</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-apple"></i><span>fa fa-apple</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-behance"></i><span>fa fa-behance</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-behance-square"></i><span>fa fa-behance-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bitbucket"></i><span>fa fa-bitbucket</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bitbucket-square"></i><span>fa fa-bitbucket-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bitcoin"></i><span>fa fa-bitcoin</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-black-tie"></i><span>fa fa-black-tie</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bluetooth"></i><span>fa fa-bluetooth</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-bluetooth-b"></i><span>fa fa-bluetooth-b</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-btc"></i><span>fa fa-btc</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-buysellads"></i><span>fa fa-buysellads</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-amex"></i><span>fa fa-cc-amex</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-diners-club"></i><span>fa fa-cc-diners-club</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-discover"></i><span>fa fa-cc-discover</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-jcb"></i><span>fa fa-cc-jcb</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-mastercard"></i><span>fa fa-cc-mastercard</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-paypal"></i><span>fa fa-cc-paypal</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-stripe"></i><span>fa fa-cc-stripe</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-cc-visa"></i><span>fa fa-cc-visa</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-chrome"></i><span>fa fa-chrome</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-codepen"></i><span>fa fa-codepen</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-codiepie"></i><span>fa fa-codiepie</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-connectdevelop"></i><span>fa fa-connectdevelop</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-contao"></i><span>fa fa-contao</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-css3"></i><span>fa fa-css3</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dashcube"></i><span>fa fa-dashcube</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-delicious"></i><span>fa fa-delicious</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-deviantart"></i><span>fa fa-deviantart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-digg"></i><span>fa fa-digg</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dribbble"></i><span>fa fa-dribbble</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-dropbox"></i><span>fa fa-dropbox</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-drupal"></i><span>fa fa-drupal</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-edge"></i><span>fa fa-edge</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-empire"></i><span>fa fa-empire</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-envira"></i><span>fa fa-envira</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-expeditedssl"></i><span>fa fa-expeditedssl</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-facebook"></i><span>fa fa-facebook</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-facebook-f"></i><span>fa fa-facebook-f</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-facebook-official"></i><span>fa fa-facebook-official</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-facebook-square"></i><span>fa fa-facebook-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-firefox"></i><span>fa fa-firefox</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-flickr"></i><span>fa fa-flickr</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fonticons"></i><span>fa fa-fonticons</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-fort-awesome"></i><span>fa fa-fort-awesome</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-forumbee"></i><span>fa fa-forumbee</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-foursquare"></i><span>fa fa-foursquare</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ge"></i><span>fa fa-ge</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-get-pocket"></i><span>fa fa-get-pocket</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gg"></i><span>fa fa-gg</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gg-circle"></i><span>fa fa-gg-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-git"></i><span>fa fa-git</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-git-square"></i><span>fa fa-git-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-github"></i><span>fa fa-github</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-github-alt"></i><span>fa fa-github-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-github-square"></i><span>fa fa-github-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gitlab"></i><span>fa fa-gitlab</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gittip"></i><span>fa fa-gittip</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-glide"></i><span>fa fa-glide</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-glide-g"></i><span>fa fa-glide-g</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-google"></i><span>fa fa-google</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-google-plus"></i><span>fa fa-google-plus</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-google-plus-square"></i><span>fa fa-google-plus-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-google-wallet"></i><span>fa fa-google-wallet</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-gratipay"></i><span>fa fa-gratipay</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hacker-news"></i><span>fa fa-hacker-news</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-houzz"></i><span>fa fa-houzz</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-html5"></i><span>fa fa-html5</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-instagram"></i><span>fa fa-instagram</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-internet-explorer"></i><span>fa fa-internet-explorer</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ioxhost"></i><span>fa fa-ioxhost</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-joomla"></i><span>fa fa-joomla</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-jsfiddle"></i><span>fa fa-jsfiddle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-lastfm"></i><span>fa fa-lastfm</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-lastfm-square"></i><span>fa fa-lastfm-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-leanpub"></i><span>fa fa-leanpub</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-linkedin"></i><span>fa fa-linkedin</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-linkedin-square"></i><span>fa fa-linkedin-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-linux"></i><span>fa fa-linux</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-maxcdn"></i><span>fa fa-maxcdn</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-meanpath"></i><span>fa fa-meanpath</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-medium"></i><span>fa fa-medium</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-mixcloud"></i><span>fa fa-mixcloud</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-modx"></i><span>fa fa-modx</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-odnoklassniki"></i><span>fa fa-odnoklassniki</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-odnoklassniki-square"></i><span>fa fa-odnoklassniki-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-opencart"></i><span>fa fa-opencart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-openid"></i><span>fa fa-openid</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-opera"></i><span>fa fa-opera</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-optin-monster"></i><span>fa fa-optin-monster</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pagelines"></i><span>fa fa-pagelines</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-paypal"></i><span>fa fa-paypal</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pied-piper"></i><span>fa fa-pied-piper</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pied-piper-alt"></i><span>fa fa-pied-piper-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pinterest"></i><span>fa fa-pinterest</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pinterest-p"></i><span>fa fa-pinterest-p</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-pinterest-square"></i><span>fa fa-pinterest-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-product-hunt"></i><span>fa fa-product-hunt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-qq"></i><span>fa fa-qq</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ra"></i><span>fa fa-ra</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-rebel"></i><span>fa fa-rebel</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-reddit"></i><span>fa fa-reddit</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-reddit-alien"></i><span>fa fa-reddit-alien</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-reddit-square"></i><span>fa fa-reddit-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-renren"></i><span>fa fa-renren</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-safari"></i><span>fa fa-safari</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-scribd"></i><span>fa fa-scribd</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-sellsy"></i><span>fa fa-sellsy</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share-alt"></i><span>fa fa-share-alt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-share-alt-square"></i><span>fa fa-share-alt-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-shirtsinbulk"></i><span>fa fa-shirtsinbulk</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-simplybuilt"></i><span>fa fa-simplybuilt</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-skyatlas"></i><span>fa fa-skyatlas</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-skype"></i><span>fa fa-skype</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-slack"></i><span>fa fa-slack</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-slideshare"></i><span>fa fa-slideshare</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-snapchat"></i><span>fa fa-snapchat</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-snapchat-ghost"></i><span>fa fa-snapchat-ghost</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-snapchat-square"></i><span>fa fa-snapchat-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-soundcloud"></i><span>fa fa-soundcloud</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-spotify"></i><span>fa fa-spotify</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stack-exchange"></i><span>fa fa-stack-exchange</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stack-overflow"></i><span>fa fa-stack-overflow</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-steam"></i><span>fa fa-steam</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-steam-square"></i><span>fa fa-steam-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stumbleupon"></i><span>fa fa-stumbleupon</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stumbleupon-circle"></i><span>fa fa-stumbleupon-circle</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tencent-weibo"></i><span>fa fa-tencent-weibo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-trello"></i><span>fa fa-trello</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tripadvisor"></i><span>fa fa-tripadvisor</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tumblr"></i><span>fa fa-tumblr</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-tumblr-square"></i><span>fa fa-tumblr-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-twitch"></i><span>fa fa-twitch</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-twitter"></i><span>fa fa-twitter</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-twitter-square"></i><span>fa fa-twitter-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-usb"></i><span>fa fa-usb</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-viacoin"></i><span>fa fa-viacoin</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-viadeo"></i><span>fa fa-viadeo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-viadeo-square"></i><span>fa fa-viadeo-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-vimeo"></i><span>fa fa-vimeo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-vimeo-square"></i><span>fa fa-vimeo-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-vine"></i><span>fa fa-vine</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-vk"></i><span>fa fa-vk</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wechat"></i><span>fa fa-wechat</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-weibo"></i><span>fa fa-weibo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-weixin"></i><span>fa fa-weixin</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-whatsapp"></i><span>fa fa-whatsapp</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wikipedia-w"></i><span>fa fa-wikipedia-w</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-windows"></i><span>fa fa-windows</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wordpress"></i><span>fa fa-wordpress</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wpbeginner"></i><span>fa fa-wpbeginner</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wpforms"></i><span>fa fa-wpforms</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-xing"></i><span>fa fa-xing</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-xing-square"></i><span>fa fa-xing-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-y-combinator"></i><span>fa fa-y-combinator</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-y-combinator-square"></i><span>fa fa-y-combinator-square</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-yahoo"></i><span>fa fa-yahoo</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-yc"></i><span>fa fa-yc</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-yc-square"></i><span>fa fa-yc-square</span><span class="text-muted">(alias)</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-yelp"></i><span>fa fa-yelp</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-youtube"></i><span>fa fa-youtube</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-youtube-play"></i><span>fa fa-youtube-play</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-youtube-square"></i><span>fa fa-youtube-square</span></div>
					            </div>
					
					        </div>
					        <br>
					
					        <h4 class="pad-top">Medical Icons</h4>
					        <hr>
					        <div class="clearfix demo-icon-list">
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-ambulance"></i><span>fa fa-ambulance</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-h-square"></i><span>fa fa-h-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-heart"></i><span>fa fa-heart</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-heart-o"></i><span>fa fa-heart-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-heartbeat"></i><span>fa fa-heartbeat</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-hospital-o"></i><span>fa fa-hospital-o</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-medkit"></i><span>fa fa-medkit</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-plus-square"></i><span>fa fa-plus-square</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-stethoscope"></i><span>fa fa-stethoscope</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-user-md"></i><span>fa fa-user-md</span></div>
					            </div>
					            <div class="col-sm-6 col-md-3">
					                <div class="demo-icon"><i class="fa fa-wheelchair"></i><span>fa fa-wheelchair</span></div>
					            </div>
					        </div>
					    </div>
					</div>

					
                </div>
                <!--===================================================-->
                <!--End page content-->
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
            <!--END CONTENT CONTAINER-->
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
</body>
</html>

