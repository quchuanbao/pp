<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.adminName') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for custom bootstrap list elements to be used within any layout" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/admin/global/css/google.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--文件上传-->
    <link href="/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <!--系统通知-->
    <link href="/admin/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />

    <!--多选菜单-->
    <link href="/admin/global/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />


    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/admin/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/admin/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/admin/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/admin/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="/admin/layouts/layout/img/logo.png" alt="logo" class="logo-default" />

                </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="{{ Auth::user()->pic }}" />
                            <span class="username username-hide-on-mobile"> {{ Auth::user()->name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="/admin/admins/edit/{{ Auth::user()->id }}">
                                    <i class="icon-user"></i> 个人资料 </a>
                            </li>
                            <li>
                                <a href="/admin/admins/edit/{{ Auth::user()->id }}">
                                    <i class="icon-lock"></i> 修改密码 </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="/admin/logout">
                                    <i class="icon-key"></i> 退出登录 </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">

                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>

                    {{--<li class="sidebar-search-wrapper">--}}
                        {{--<form class="sidebar-search  " action="page_general_search_3.html" method="POST">--}}
                            {{--<a href="javascript:;" class="remove">--}}
                                {{--<i class="icon-close"></i>--}}
                            {{--</a>--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search...">--}}
                                {{--<span class="input-group-btn">--}}
                                            {{--<a href="javascript:;" class="btn submit">--}}
                                                {{--<i class="icon-magnifier"></i>--}}
                                            {{--</a>--}}
                                        {{--</span>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</li>--}}

                    <li class="nav-item start ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">运营监控</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="index.html" class="nav-link ">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Dashboard 1</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="dashboard_2.html" class="nav-link ">
                                    <i class="icon-bulb"></i>
                                    <span class="title">Dashboard 2</span>
                                    <span class="badge badge-success">1</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="dashboard_3.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">Dashboard 3</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">采购管理</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">供应商管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">

                            <li class="nav-item  ">
                                <a href="ui_tree.html" class="nav-link ">
                                    <span class="title">Tree View</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">Page Progress Bar</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">商品管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="components_date_time_pickers.html" class="nav-link ">
                                    <span class="title">Date & Time Pickers</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">采购管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="form_controls.html" class="nav-link ">
                                            <span class="title">Bootstrap Form
                                                <br>Controls</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="heading">
                        <h3 class="uppercase">仓储物流管理</h3>
                    </li>


                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">物流快递管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="table_static_basic.html" class="nav-link ">
                                    <span class="title">Basic Tables</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="?p=" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title">入库管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="portlet_boxed.html" class="nav-link ">
                                    <span class="title">Boxed Portlets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">出库管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="charts_amcharts.html" class="nav-link ">
                                    <span class="title">amChart</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-pointer"></i>
                            <span class="title">订单发货</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="maps_google.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="maps_vector.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">分销商管理</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">订单管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_blank_page.html" class="nav-link ">
                                    <span class="title">Blank Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-feed"></i>
                            <span class="title">结算管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_sidebar_menu_light.html" class="nav-link ">
                                    <span class="title">Light Sidebar Menu</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="heading">
                        <h3 class="uppercase">品牌商管理</h3>
                    </li>


                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-paper-plane"></i>
                            <span class="title">营销管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_mega_menu_light.html" class="nav-link ">
                                    <span class="title">Light Mega Menu</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class=" icon-wrench"></i>
                            <span class="title">支付对账</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_disabled_menu.html" class="nav-link ">
                                    <span class="title">Disabled Menu Links</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">运营管理</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">品牌商</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="ecommerce_index.html" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-docs"></i>
                            <span class="title">运营报表</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="app_todo.html" class="nav-link ">
                                    <i class="icon-clock"></i>
                                    <span class="title">Todo 1</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">分销商</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_user_profile_1.html" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Profile 1</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="heading">
                        <h3 class="uppercase">客服管理</h3>
                    </li>



                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-social-dribbble"></i>
                            <span class="title">换货管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_general_about.html" class="nav-link ">
                                    <i class="icon-info"></i>
                                    <span class="title">About</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">退货管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_cookie_consent_1.html" class="nav-link ">
                                    <span class="title">Cookie Consent 1</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-folder"></i>
                            <span class="title">投诉管理</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-bar-chart"></i> Item 3 </a>
                            </li>
                        </ul>
                    </li>


                    <li class="heading">
                        <h3 class="uppercase">财务管理</h3>
                    </li>



                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-social-dribbble"></i>
                            <span class="title">采购付款</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_general_about.html" class="nav-link ">
                                    <i class="icon-info"></i>
                                    <span class="title">About</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">结算管理</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_cookie_consent_1.html" class="nav-link ">
                                    <span class="title">Cookie Consent 1</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-folder"></i>
                            <span class="title">营销佣金</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-bar-chart"></i> Item 3 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-folder"></i>
                            <span class="title">退款管理</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-bar-chart"></i> Item 3 </a>
                            </li>
                        </ul>
                    </li>


                    <li class="heading">
                        <h3 class="uppercase">系统管理</h3>
                    </li>



                    <li class="nav-item  @yield('m1')">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">系统管理</span>
                            <span class="arrow @yield('m10')"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  @yield('m11')">
                                <a href="/admin/admins/" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">管理员</span>
                                </a>
                            </li>


                            <li class="nav-item  @yield('m12')">
                                <a href="/admin/role/" class="nav-link ">
                                    <i class="icon-users"></i>
                                    <span class="title">角色管理</span>
                                </a>
                            </li>

                            <li class="nav-item  @yield('m13')">
                                <a href="/admin/permission/" class="nav-link ">
                                    <i class="fa fa-street-view"></i>
                                    <span class="title">权限管理</span>
                                </a>
                            </li>

                        </ul>
                    </li>






                </ul>
                <!-- END SIDEBAR MENU -->
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->

                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">首页</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>@yield('title')</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">
                    {{--Lists<small>custom bootstrap list elements to be used within any layout</small>--}}
                </h1>
                @yield('content')
            </div>
            <!-- END : LISTS -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> <?php echo date("Y");?> &copy; {{ config('app.adminName') }}
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<!--[if lt IE 9]>
<script src="/admin/global/plugins/respond.min.js"></script>
<script src="/admin/global/plugins/excanvas.min.js"></script>
<script src="/admin/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!--删除确认按钮-->
<script src="/admin/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js" type="text/javascript"></script>

<!--多选框-->
<script src="/admin/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
<script src="/admin/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/bootstrap-select/js/i18n/defaults-zh_CN.js"></script>


<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/admin/global/scripts/app.min.js" type="text/javascript"></script>

<!--文件上传-->
<script src="/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<!--系统通知-->
<script src="/admin/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<!--删除确认按钮-->
<script src="/admin/pages/scripts/ui-confirmations.js" type="text/javascript"></script>
<!--多选框-->
<script src="/admin/pages/scripts/components-multi-select.js" type="text/javascript"></script>

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/admin/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/admin/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
@if (session('notify'))
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        toastr.success("{{ session('notifyContent') }}", "{{ session('notify') }}");
    </script>
@endif

<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>