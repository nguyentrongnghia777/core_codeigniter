<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Alertify -->
        <link rel="stylesheet" href="<?= base_url('front-end/css/alertify.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('front-end/css/default.min.css') ?>">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= base_url('front-end/css/bootstrap.min.css') ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= base_url('front-end/css/skins/_all-skins.min.css') ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/iCheck/flat/blue.css') ?>">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/morris/morris.css') ?>">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/datepicker/datepicker3.css') ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/daterangepicker/daterangepicker.css') ?>">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
        <!-- bootstrap datatables -->
        <link rel="stylesheet" href="<?= base_url('front-end/plugins/datatables/dataTables.bootstrap.css') ?>">
        <!-- bootstrap style AdminLTE -->
        <link rel="stylesheet" href="<?= base_url('front-end/css/AdminLTE.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('front-end/css/AdminLTE.css') ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .alertify-logs {
                position: relative;
                top: -60px;
                z-index: 99999;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- wrapper -->
        <div class="wrapper">
            <header class="main-header">
            <!-- Logo -->
                <a href="<?= base_url('admin/home') ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">2</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 2 messages</li>
                            <li>
                            <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?= base_url('front-end/img/user3-128x128.jpg') ?>" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>Support Team<small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="<?= base_url('front-end/img/user6-128x128.jpg') ?>" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>Reviewers<small><i class="fa fa-clock-o"></i> 2 days</small></h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">2</span>
                            </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 2 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">2</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 2 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>Design some buttons<small class="pull-right">20%</small></h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#"><h3>Create a nice theme<small class="pull-right">40%</small></h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url('front-end/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?=$user->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= base_url('front-end/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">

                                    <p>
                                       <?=$user->username ?>- Web Developer
                                      <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?=base_url('/auth/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= base_url('front-end/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?=$user->username ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="<?= lang('common_search') ?>">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header"><?= lang('category_control') ?></li>
                        <li class="treeview">
                            <a href="<?= base_url('admin/category') ?>"><i class="fa"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></i><?= lang('category_cate') ?></a>
                        </li>
                        <li class="treeview">
                            <a href="<?= base_url('admin/user') ?>"><i class="fa"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></i><?= lang('category_user') ?></a>
                        </li>
                        <li class="treeview">
                            <a href="<?= base_url('/blog') ?>"><i class="fa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></i><?= lang('category_blog') ?></a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">