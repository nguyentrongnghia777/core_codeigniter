<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Almsaeed Studio</title>

        <link href="<?= base_url('front-end/css/theme.css" rel="stylesheet') ?>">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:100,400,300,400italic,500' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-46680343-1', 'almsaeedstudio.com');
            ga('send', 'pageview');
        </script>
        <!-- async page-level ads -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4495360934352473",
                enable_page_level_ads: true
            });
        </script>
    </head>
    <body>

        <div id="theme-quarry-ad">
            <div class="container">
                <div class="col-xs-12">
                    <a href="#" class="pull-right close-theme-quarry-ad" data-toggle="tooltip" title="Never show me this again!" data-placement="bottom">&times;</a>
                    <a href="https://themequarry.com/become-a-seller" class="margin-r5">Ready to make money? Sell your templates in our new marketplace and let over 200k visitors see it!</a>
                    <a href="https://themequarry.com/become-a-seller" class="btn btn-default btn-sm">Let's Do It</a>
                    <a href="https://almsaeedstudio.com/blog/themequarry-our-new-marketplace-is-live" class="btn btn-link btn-sm">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Main Navigation Bar -->
        <nav class="navbar navbar-default navbar-static-top transparent" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/"><b>Almsaeed</b> Studio</a>
                </div>
                <!-- /.navbar-header -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="collapse-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li >
                            <a href="/">Home</a>
                        </li>
                        <li class="active">
                            <a href="<?=base_url('/auth/login');?>">Login</a>
                        </li>
                        <li >
                            <a href="<?=base_url('/auth/register');?>">Register</a>
                        </li>
                        <li >
                            <a href="<?=base_url('/auth/logout');?>">Logout</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav><!--/.navbar-->
        <!-- Main-content -->
        <div id="main-content">