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
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <!--  styles -->
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
                        <span class="hero-description hidden-xs" style="font-size:14px; float:left; padding-top:6px;"><?=$web->tagline?></span></a>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="new-ads"><a href="<?=site_url()?>/page/bukatoko" class="btn btn-ads btn-block">Buka Toko Gratis</a></li>
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
                                                <input type="password" placeholder="Password" name="password" required="required" class="form-control input-login">                                            
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
            <section class="hero">
                <div class="container text-center">
                    <h2 class="hero-title">PASARDEPOK GO ONLINE</h2>
                    <p class="hero-description hidden-xs">Bersama <?=$web->logo?> Siap Menghadapi Pasar MEA (Masyarakat Ekonomi Asean)</p>
                    <div class="row hero-search-box">
                        <form action="<?=site_url()?>/page/search/" method="post">
                            <div class="col-md-4 col-sm-4 search-input">
                                <input type="text" name="key" class="form-control input-lg search-first" placeholder="Cari Produk...">
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                        <select class="form-control input-lg search-second" name="pasar">
                                            <option selected="" value="0">Lokasi Pasar</option>
                                            <?php foreach($pasar as $itempasar) { ?>
                                            <option value="<?=$itempasar->id_pasar?>"><?=$itempasar->pasarname?></option>
                                            <?php } ?>
                                        </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                <button class="btn btn-custom btn-block btn-lg"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="row">
                            <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/1/sembako"><i class="fa fa-pagelines shortcut-icon icon-green"></i></a>
                                        <a href="<?=site_url()?>/page/category/1/sembako"><h3 class="hero-description hidden-xs">Sembako</h3></a>
                                        <span class="total-items">
                                        <?php
										$sembako=$this->db->where('idcategory', 1);
                                        $sembako=$this->db->count_all_results('data_product');
										echo $sembako;
										?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/2/rumah-tangga"><i class="fa fa-home shortcut-icon icon-violet"></i></a>
                                        <a href="<?=site_url()?>/page/category/2/rumah-tangga"><h3 class="hero-description hidden-xs">R.Tangga</h3></a>
                                        <span class="total-items">
                                        <?php
										$rt=$this->db->where('idcategory', 2);
                                        $rt=$this->db->count_all_results('data_product');
										echo $rt;
										?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/3/dapur"><i class="fa fa-glass shortcut-icon icon-brown"></i></a>
                                        <a href="<?=site_url()?>/page/category/3/dapur"><h3 class="hero-description hidden-xs">Dapur</h3></a>
                                        <span class="total-items">
                                        <?php
										$dapur=$this->db->where('idcategory', 3);
                                        $dapur=$this->db->count_all_results('data_product');
										echo $dapur;
										?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/4/fashion"><i class="fa fa-tag shortcut-icon icon-red"></i></a>
                                        <a href="<?=site_url()?>/page/category/4/fashion"><h3 class="hero-description hidden-xs">Fashion</h3></a>
                                        <span class="total-items">
                                        <?php
										$fashion=$this->db->where('idcategory', 4);
                                        $fashion=$this->db->count_all_results('data_product');
										echo $fashion;
										?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/5/aksesoris"><i class="fa fa-star shortcut-icon icon-dark-blue"></i></a>
                                        <a href="<?=site_url()?>/page/category/5/aksesoris"><h3 class="hero-description hidden-xs">Aksesoris</h3></a>
                                        <span class="total-items">
                                        <?php
										$aksesoris=$this->db->where('idcategory', 5);
                                        $aksesoris=$this->db->count_all_results('data_product');
										echo $aksesoris;
										?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/6/kesehatan"><i class="fa fa-stethoscope shortcut-icon icon-orange"></i></a>
                                        <a href="<?=site_url()?>/page/category/6/kesehatan"><h3 class="hero-description hidden-xs">Kesehatan</h3></a>
                                        <span class="total-items">
                                        <?php
										$kesehatan=$this->db->where('idcategory', 6);
                                        $kesehatan=$this->db->count_all_results('data_product');
										echo $kesehatan;
										?>
                                        </span>
                                    </div>  
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/7/kecantikan"><i class="fa fa-female shortcut-icon icon-light-blue"></i></a>
                                        <a href="<?=site_url()?>/page/category/7/kecantikan"><h3 class="hero-description hidden-xs">Kecantikan</h3></a>
                                        <span class="total-items">
                                        <?php
										$kecantikan=$this->db->where('idcategory', 7);
                                        $kecantikan=$this->db->count_all_results('data_product');
										echo $kecantikan;
										?>
                                        </span>
                                    </div>  
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/8/oleh-oleh"><i class="fa fa-cube shortcut-icon icon-green"></i></a>
                                        <a href="<?=site_url()?>/page/category/8/oleh-oleh"><h3 class="hero-description hidden-xs">Oleh-Oleh</h3></a>
                                        <span class="total-items">
                                        <?php
										$oleh=$this->db->where('idcategory', 8);
                                        $oleh=$this->db->count_all_results('data_product');
										echo $oleh;
										?>
                                        </span>
                                    </div>  
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/9/batu-cincin"><i class="fa fa-circle-o-notch shortcut-icon icon-light-green"></i></a>
                                        <a href="<?=site_url()?>/page/category/9/batu-cincin"><h3 class="hero-description hidden-xs">BatuCincin</h3></a>
                                        <span class="total-items">
                                        <?php
										$batu=$this->db->where('idcategory', 9);
                                        $batu=$this->db->count_all_results('data_product');
										echo $batu;
										?>
                                        </span>
                                    </div>
                                </div>
                                 <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/10/makanan-minuman"><i class="fa fa-cutlery shortcut-icon icon-green"></i></a>
                                        <a href="<?=site_url()?>/page/category/10/makanan-minuman"><h3 class="hero-description hidden-xs">Makanan</h3></a>
                                        <span class="total-items">
                                        <?php
										$makanan=$this->db->where('idcategory', 10);
                                        $makanan=$this->db->count_all_results('data_product');
										echo $makanan;
										?>
                                        </span>
                                    </div>
                                </div>
                                 <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/11/mainan-hobi"><i class="fa fa-bicycle shortcut-icon icon-blue"></i></a>
                                        <a href="<?=site_url()?>/page/category/11/mainan-hobi"><h3 class="hero-description hidden-xs">Hobi</h3></a>
                                        <span class="total-items">
                                        <?php
										$hobi=$this->db->where('idcategory', 11);
                                        $hobi=$this->db->count_all_results('data_product');
										echo $hobi;
										?>
                                        </span>
                                    </div>
                                </div>
                                 <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="<?=site_url()?>/page/category/12/sekolah"><i class="fa fa-child shortcut-icon icon-yellow"></i></a>
                                        <a href="<?=site_url()?>/page/category/12/sekolah"><h3 class="hero-description hidden-xs">Sekolah</h3></a>
                                        <span class="total-items">
                                        <?php
										$sekolah=$this->db->where('idcategory', 12);
                                        $sekolah=$this->db->count_all_results('data_product');
										echo $sekolah;
										?>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-header">
                                        <h2>Produk Sponsor</h2>
                                    </div>
                                    <div id="featured-products" class="owl-carousel owl-carousel-featured">
                                    <?php
                                    foreach($sponsor as $itemsponsor) { 									
									?>
                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-badge-grid <?=$itemsponsor->cat_sponsor?>">
                                                    <a href=""><?=$itemsponsor->title_product?></a>
                                                </div>
                                                <div class="item-img-grid">
                                                    <img alt="" src="<?=base_url()?>assets/images/product/<?=$itemsponsor->picture?>" class="img-responsive img-center">
                                                </div>

                                                <div class="item-title">
                                                    <a href="<?=site_url()?>/page/productsponsor/<?=$itemsponsor->idproduct?>"><h4><?=$itemsponsor->product_name?></h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="<?=site_url()?>/page/category">Kategori</a></li>
                                                        <li class="item-location"><i class="fa fa-map-marker"></i> Depok</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> <?=$itemsponsor->kondisi?></li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>Rp <?=number_format($itemsponsor->price)?></h3>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="<?=site_url()?>/page/productsponsor/<?=$itemsponsor->idproduct?>" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
										<?php } ?>
                                            
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-4">
                        
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Buka Toko Gratis</h3>
                                </div>
                                <div class="widget-body">
                                    <form action="<?=site_url()?>/A418c5509e2171d55b0aee5c2ea4442b5/bukatoko" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" required="required"  name="name" placeholder="Nama Toko">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" required="required"  name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control input-lg" required="required"  name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label class="string optional" for="terms">
                                                    <input type="checkbox" id="terms" style="" required="required" >
                                                    <a href="#">Saya Patuh pada Peraturan & Ketentuan</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-custom">Daftar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="banner-widget">
                                <img src="<?=base_url()?>assets/images/iklan/-text.png" alt="banner" class="img-responsive">
                            </div>
                            <br>
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>YANG PALING BANYAK DI CARI</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
                                    <?php foreach($category as $itemcategory) { ?>
                                        <li><a href="<?=site_url()?>/page/category/<?=$itemcategory->idcategory?>/<?=$itemcategory->categoryname?>"><?=$itemcategory->categoryname?> &nbsp;<span class="item-numbers">
                                        (<?php $c=$this->db->where('idcategory', $itemcategory->idcategory); $c=$this->db->count_all_results('data_product');
										echo $c;?>)
                                        </span></a></li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner-widget">
                                <img src="<?=base_url()?>assets/images/iklan/-text.png" alt="banner" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </section>
            <div class="counter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item-counter">
                                <span class="item-icon"><i class="fa fa-database"></i></span>
                                <div data-refresh-interval="100" data-speed="3000" data-to="7803" data-from="0" class="item-count">7803</div>
                                <span class="item-info">Item Produk</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item-counter">
                                <span class="item-icon"><i class="fa fa-users"></i></span>
                                <div data-refresh-interval="80" data-speed="10000" data-to="950" data-from="0" class="item-count">950</div>
                                <span class="item-info">Pedagang</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item-counter">
                                <span class="item-icon"><i class="fa fa-map-marker"></i></span>
                                <div data-refresh-interval="80" data-speed="10000" data-to="13" data-from="0" class="item-count">13</div>
                                <span class="item-info">Lokasi Pasar</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item-counter">
                                <span class="item-icon"><i class="fa fa-shopping-cart"></i></span>
                                <div data-refresh-interval="80" data-speed="5000" data-to="10548" data-from="0" class="item-count">10548</div>
                                <span class="item-info">Transaksi/Bulan</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .counter -->
    </div>
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
<script type="text/javascript">
    $(document).ready(function () {

        // ===========Featured Owl Carousel============
        if ($(".owl-carousel-featured").length > 0) {
            $(".owl-carousel-featured").owlCarousel({
                items: 3,
                lazyLoad: true,
                pagination: true,
                autoPlay: 5000,
                stopOnHover: true
            });
        }

        // ==================Counter====================
        $('.item-count').countTo({
            formatter: function (value, options) {
                return value.toFixed(options.decimals);
            },
            onUpdate: function (value) {
                console.debug(this);
            },
            onComplete: function (value) {
                console.debug(this);
            }
        });
    });
</script>
</body>
</html> 