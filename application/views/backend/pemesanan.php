<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title><?=$web->title?></title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <!-- Essential styles -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="<?=base_url()?>assets/assets/plugins/font-awesome/css/font-awesome.css">

        <!-- Dlapak styles -->
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
            <header  class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">
                        <span class="logo" style="float:left"><i class="fa fa-cubes"></i><?=$web->logo?></span>
                        <span class="navbar-collapse collapse" style="font-size:14px; float:left; padding-top:6px;"><?=$web->tagline?></span></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="<?=site_url('verifylogin/logout')?>">Logout</a></li>

                        </ul>
                    </div>
                </div>
            </header>
            <section class="main no-padding">
                <div class="account-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-2">
                                <!-- User avatar -->
                                <div class="profile_avatar">
                                    <img src="<?=base_url()?>assets/images/seller/<?=$seller->avatar?>" alt="avatar" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-9 col-lg-10">
                                <div class="profile_summary">
                                    <!-- User name --> 
                                    <h3 class="profile_name"><?=$seller->sellername?></h3>
                                    <!-- User status -->
                                    <p>Alamat : <?=$seller->address?></p>
                                    <p>WA : <?=$seller->WA?></p>
                                    <p>BBM: <?=$seller->BBM?></p>
                                    <!-- Contact -->
                                    <a href="<?=site_url('verifylogin/logout')?>" class="btn btn-primary btn-warning btn-sm"><i class="fa fa-sign-out"></i> Logout</a>
                                </div> <!-- / .profile__summary -->
                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .container -->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Menu Toko</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="author-menus">
                                    	<li><a href="<?=site_url()?>/toko/order">Pemesanan</a></li>
                                        <li><a href="<?=site_url()?>/toko">Produk</a></li>
                                        <li><a href="<?=site_url()?>/toko/upload_product">Upload Produk</a></li>
                                        <li><a href="<?=site_url()?>/toko/profil">Profil Toko</a></li>
                                        <li><a href="<?=site_url()?>/toko/tagihan">Donasi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Informasi Pemesanan</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="before-table">
                                        <div class="row">
                                            <div class="col-xs-6">
                                            </div>
                                            <div class="col-xs-6">
                                                <form class="form-inline pull-right">
                                                    <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" name="q" placeholder="Type keyword ..." class="form-control">
                                                                <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                                            </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <table width="100%" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="2%"><input id="checkAll" type="checkbox" /></th>
                                                <th width="24%">Nama Pemesan</th>
                                                <th width="27%">Produk</th>
                                                <th width="21%">Email/No HP</th>
                                                <th width="26%">Isi Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                        <a href="#"> User Guide </a>
                    </li>
                </ul>
                <ul class="pull-right footer-menu">
                    <li> &copy; <?=$web->footer?>. </li>
                </ul>
                </div>
            </div>
        </div>
        <!-- Essentials -->
        <script src="<?=base_url()?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/assets/plugins/owl-carousel/owl.carousel.js"></script>
        <script src="<?=base_url()?>assets/assets/plugins/counter/jquery.countTo.js"></script>
        <script src="<?=base_url()?>assets/assets/plugins/filestyle/bootstrap-filestyle.min.js"></script>
        <script type="text/javascript">
            $("#checkAll").change(function () {
                $("input:checkbox").prop('checked', $(this).prop("checked"));
            });
        </script>
    </body>
</html> 