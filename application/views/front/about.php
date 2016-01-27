<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title><?=$web->title?></title>
        <meta name="description" content="<?=$web->description?>" />
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <!-- Essential styles -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?=base_url()?>assets/assets/plugins/font-awesome/css/font-awesome.css">

        <!-- Styles -->
        <link id="theme_style" type="text/css" href="<?=base_url()?>assets/css/style1.css" rel="stylesheet" media="screen">


        <!-- Favicon -->
        <link href="<?=base_url()?>assets/assets/img/favicon.png" rel="icon" type="image/png">

        <!-- Assets -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">

        <!-- JS Library -->
        <script src="<?=base_url()?>assets/js/jquery.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <header class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?=site_url()?>" class="navbar-brand">
                        <span class="logo" style="float:left"><i class="fa fa-cubes"></i><?=$web->logo?></span>
                        <span class="navbar-collapse collapse" style="font-size:14px; float:left; padding-top:6px;"><?=$web->tagline?></span></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="new-ads"><a href="<?=site_url()?>/page/bukatoko" class="btn btn-ads btn-block">Buka Toko Sekarang</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> <strong class="caret"></strong>&nbsp;</a>
                                <div class="dropdown-menu dropdown-login" style="padding:15px;min-width:250px">
                                     <form action="<?=site_url()?>/verifylogin" method="post">                       
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon addon-login"><i class="fa fa-user"></i></span>
                                                <input type="text" placeholder="Username or email" name="email" required="required" class="form-control input-login">                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon addon-login"><i class="addon fa fa-lock"></i></span>
                                                <input type="password" name="password" placeholder="Password" required="required" class="form-control input-login">                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label class="string optional" for="user_remember_me">
                                                    <input type="checkbox" id="user_remember_me" style="">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-custom btn-block" value="Sign In">
                                        <a href="#" class="btn-block text-center">Forgot password?</a>
                                    </form>                                    
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </header>
            <section class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="post">
                                <div class="post-title">
                                    <h2>Tentang Kami</h2>
                                </div>
                                <div class="post-body">
                                    <p>
                                    PASARDEPOK.COM merupakan Pasar Lokal Go Online pertama di Provinsi Jawa Barat, yang memungkinkan Pedagang Pasar maupun UKM di Kota Depok untuk membuka dan mengelola toko online mereka secara mudah dan praktis, bersama PASARDEPOK.COM siap Menghadapi Pasar MEA (Masyarakat Ekonomi Asean).
                                    <img src="<?=base_url()?>assets/images/mea.jpg" width="99%" height="99%">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <div class="footer">
                <div class="container">
                <ul class="pull-left footer-menu">
                    <li>
                        <a href="<?=site_url()?>"> Home </a>
                        <a href="<?=site_url()?>/page/about"> About us </a>
                        <a href="<?=site_url()?>/page/contact"> Contact us </a>
                    </li>
                </ul>
                <ul class="pull-right footer-menu">
                    <li> &copy; <?=$web->footer?>. </li>
                </ul>
                </div>
            </div>
        </div>
        <!-- Essentials -->
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/js/owl.carousel.js"></script>
		<script src="<?=base_url()?>assets/js/jquery.countTo.js"></script>
        <script defer src="<?=base_url()?>assets/js/jquery.flexslider.js"></script>
    </body>
</html> 