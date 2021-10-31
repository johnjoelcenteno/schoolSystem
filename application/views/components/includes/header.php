<!DOCTYPE html>

<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>SCHOOL SYSTEM</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="<?= base_url() ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" />
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <!-- END PAGE LEVEL STYLES -->

    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="<?= base_url() ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?= base_url() ?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <!-- <img class="" src="<?= base_url() ?>assets/admin/layout4/img/school.png" alt="" /> -->
                </a>
                <div class="menu-toggler sidebar-toggler">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN PAGE ACTIONS -->
            <!-- DOC: Remove "hide" class to enable the page header actions -->

            <!-- BEGIN PAGE TOP -->
            <div class="page-top">
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                <form class="search-form" action="extra_search.html" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                        </span>
                    </div>
                </form>
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="separator hide">
                        </li>
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile">
                                    <?= $this->Credentials_model->getUserType() == 3 ? "Admin" : "Teacher" ?> </span>
                                <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                <img alt="" class="img-circle" src="<?= base_url() ?>assets/admin/layout4/img/avatar1.jpg" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">

                                <li>
                                    <a href="<?= base_url() . "Login/logout" ?>">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <?php
                    $userType = $this->Credentials_model->getUserType();
                    ?>

                    <?php if ($userType == 3) { ?>

                        <!-- admin dashboard -->
                        <li class="start active">
                            <a href=<?= base_url() . "Dashboard" ?>>
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <!-- End admin dashboard -->


                        <!-- Principal only -->
                        <li>
                            <a href="javascript:;">
                                <i class="icon-users"></i>
                                <span class="title">Manage Accounts</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">

                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-plus"></i>
                                        <span class="title">Manage Teacher</span>
                                        <span class="arrow "></span>
                                    </a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?= base_url() . 'Principal/manageTeachers' ?>">
                                                <i class="fa fa-edit"></i> Teacher Management</a>
                                        </li>

                                        <li>
                                            <a href="<?= base_url() . 'Principal/manageAdvisers' ?>"><i class="fa fa-users"></i> Adviser Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() . 'Principal/manageSections' ?>"><i class="fa fa-puzzle-piece"></i>Section Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() . 'Principal/manageSubjects' ?>"><i class="fa fa-book"></i>Subject Management

                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!-- Principal only end -->
                    <?php } ?>


                    <?php if ($userType == 2) { ?>

                        <!-- Teacher Dashboard -->
                        <li class=" ">
                            <a href=<?= base_url() . "Teacher_dashboard" ?>>
                                <i class="icon-home"></i>
                                <span class="title">Your Dashboard</span>
                            </a>
                        </li>
                        <!-- End teacher Dashboard -->

                        <!-- Teacher Only -->

                        <li>
                            <a href="javascript:;">
                                <i class="icon-plus"></i>
                                <span class="title">Manage Class</span>
                                <span class="arrow "></span>
                            </a>

                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= base_url() . 'Teacher/ClassManagement' ?>">
                                        <i class="fa fa-edit"></i> My Subjects</a>
                                </li>
                                <li>
                                    <a href="<?= base_url() . 'Teacher/AdvisoryClassManagement' ?>">
                                        <i class="fa fa-edit"></i> Advisory Management</a>
                                </li>

                            </ul>
                        </li>
                        <li class=" ">
                            <a href=<?= base_url() . "Teacher/ParentManagement" ?>>
                                <i class="fa fa-users"></i>
                                <span class="title">Parent Management</span>
                            </a>
                        </li>
                        <!-- Teacher Only End -->
                    <?php } ?>

                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->