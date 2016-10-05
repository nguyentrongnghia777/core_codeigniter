<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?=$title?></title>
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?=base_url('front-end/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('front-end/css/bootstrap-theme.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('front-end/css/master.css');?>">
</head>

<body>
    <div id="container">
        <!-- header -->
        <header>
            <section class="container">
                <h1>header</h1>
                <p>
                    <?php if ($user) { ?>
                        <a href="<?=base_url('/profile/' . $user->username);?>"><?= $user->first_name ? $user->first_name . ' ' . $user->last_name : $user->username; ?></a> 
                        <?php if ($this->ion_auth->is_admin()) { ?>
                         | <a href="<?=base_url('/admin/user');?>">Admin</a> 
                        <?php } ?>
                         | <a href="<?=base_url('/auth/logout');?>">Logout</a> 
                    <?php } else { ?>
                        <a href="<?=base_url('/auth/login');?>">Login</a> 
                    <?php } ?>
                </p>
                <hr>
            </section>
        </header>
        <!-- end header -->
        <div id="main"><!-- main -->