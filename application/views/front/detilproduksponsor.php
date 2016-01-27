                                    <?php
									 //$seller=$this->db->join('data_pasar', 'data_pasar.id_pasar = data_seller.idpasar');
                                     $seller=$this->db->where('idsponsor',$product->idsponsor);
									 $seller=$this->db->get('data_sponsor')->row();
									?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title><?=$web->logo?> - Ciptakan Peluang Mu</title>
        <meta name="description" content="<?=$web->description?>" />
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <!-- Essential styles -->
    	<link rel="stylesheet" href="<?=base_url()?>assets/assets/plugins/bootstrap/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="<?=base_url()?>assets/assets/plugins/font-awesome/css/font-awesome.css">

        <!-- styles -->
        <link id="theme_style" type="text/css" href="<?=base_url()?>assets/css/style1.css" rel="stylesheet" media="screen">


        <!-- Favicon -->
        <link href="<?=base_url()?>assets/assets/img/favicon.png" rel="icon" type="image/png">

        <!-- Assets -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css" type="text/css" media="screen" />

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
            <section class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb pull-left">
                                <li><a href="<?=site_url()?>">Home</a></li>
                                <li><a href="#">Kategori</a></li>
                                <li>Detil Produk Sponsor</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="post">
                                        <div class="post-price">
                                            Rp <?=number_format($product->price)?>
                                        </div>
                                        <div class="post-title">
                                            <h2><?=$product->product_name?></h2>
                                        </div>
                                        <div class="post-meta">
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i> <?=$product->date?></li>
                                                <li><i class="fa fa-bars"></i> <a href="#">Kategori</a></li>
                                                <li><i class="fa fa-bookmark"></i> <?=$product->kondisi?></li>
                                            </ul>
                                        </div>
                                        <center><img src="<?=base_url()?>assets/images/product/<?=$product->picture?>" width="90%" height="90%"> </center>
                                        <div class="post-body">
                                            <h4><strong>Diskripsi</strong></h4>
                                            <p>
                                               <?=$product->description?>
                                            </p>
                                        </div>
                                        <div class="post-footer">
                                            <div class="row">
                                                <div class="col-xs-6">    
                                                    <button class="btn btn-info"><i class="fa fa-whatsapp"></i> <span class="hidden-xs hidden-sm"><?=$seller->phone?></span></button>
                                                    <a href="<?=$product->link_payment?>" target="_blank"><button class="btn btn-info"><i class="fa fa fa-cart-plus"></i> <span class="hidden-xs hidden-sm">Beli Cepat</span></button></a>
                                                    
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="item-action pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-success btn"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-info btn"><i class="fa fa-share-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-header">
                                        <h2>Produk Sponsor</h2>
                                    </div>
                                    <div class="row">
                                     <?php
                                    foreach($sponsor as $itemsponsor) { 									
									?>
                                        <div class="col-md-4">
                                            <div class="item-ads-grid">
                                                <div class="item-badge-grid <?=$itemsponsor->cat_sponsor?>">
                                                    <a href="#"><?=$itemsponsor->title_product?></a>
                                                </div>
                                                <div class="item-img-grid">
                                                    <img alt="" src="<?=base_url()?>assets/images/product/<?=$itemsponsor->picture?>" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="#"><h4><?=$itemsponsor->product_name?></h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="#">Kategori</a></li>
                                                        <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i></a></li>
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
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
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
                                    <h3>INFORMASI TOKO</h3>
                                </div>
                                <div class="widget-body text-center">
                                    <img alt="avatar" src="<?=base_url()?>assets/images/seller/nopic.jpg" class="seller-avatar img-responsive">
                                    <h2 class="seller-name">Sponsor : <?=$seller->sponsor_name?></h2>
                                </div>
                                <div class="widget-footer">
                                    <div class="row">
                                        <div class="col-sm-6">    
                                            <button class="btn btn-info btn-block"><i class="fa fa-whatsapp"></i><?=$seller->phone?></button>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="<?=$product->link_payment?>" target="_blank"><button class="btn btn-info btn-block"><i class="fa fa-cart-plus"></i> Beli Cepat</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>YANG PALING BANYAK DI CARI</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
										<?php foreach($category as $itemcategory) { ?>
                                        <li><a href="<?=site_url()?>/page/category/<?=$itemcategory->idcategory?>/<?=$itemcategory->categoryname?>"><?=$itemcategory->categoryname?> &nbsp;<span class="item-numbers">(<?php $c=$this->db->where('idcategory', $itemcategory->idcategory); $c=$this->db->count_all_results('data_product');
										echo $c;?>)</span></a></li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Browse by Brand</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="brands">
                                        <li><label><input type="checkbox"> Brand A</label></li>
                                    </ul>
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

        <!-- Send Message Modal -->
        <div aria-labelledby="sendMessageModalLabel" role="dialog" tabindex="-1" id="sendMessageModal" class="modal fade in">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                        <h4 id="sendMessageModalLabel" class="modal-title">Beli Cepat</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label">Nama:</label>
                                <input type="text" class="form-control input-lg" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email:</label>
                                <input type="email" class="form-control input-lg" placeholder="Your email" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Item Pembelian :</label>
                                <textarea id="message-text" class="form-control input-lg" placeholder="Your message" required></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
                        <button class="btn btn-custom" type="button"><i class="fa fa-paper-plane"></i> Kirim</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Message Modal -->

        <!-- Essentials -->
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/owl.carousel.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.countTo.js"></script>
        <script defer src="<?=base_url()?>assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                // ===============Flexslider=====================
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails",
                    directionNav: false,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });

                // ==========tooltip initial=================
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html> 