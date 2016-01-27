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

        <!-- styles -->
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
                                                <input type="text" name="email" placeholder="Username or email" required="required" class="form-control input-login">                                            
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
            <div class="category-search">
                <div class="container">
                    <div class="row category-search-box">
                        <form action="<?=site_url()?>/page/search/" method="post">
                            <div class="col-md-3 col-sm-3  cat-search-input">
                                <select class="form-control">
                                    <option>Kategori</option>
                                    <?php foreach($category as $itemcategory) { ?>
                                    <option value="<?=$itemcategory->idcategory?>"><?=$itemcategory->categoryname?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3  cat-search-input">
                                <select class="form-control">
                                    <option selected="">Lokasi Pasar</option>
                                    <?php foreach($pasar as $itempasar) { ?>
                                            <option value="<?=$itempasar->id_pasar?>"><?=$itempasar->pasarname?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3  cat-search-input">
                                <input type="text" name="key" class="form-control" placeholder="I want to find...">
                            </div>
                            <div class="col-md-3 col-sm-3  cat-search-input">
                                <button class="btn btn-custom btn-block"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <section class="category-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            &nbsp;
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb pull-right">
                                <li><a href="<?=site_url()?>">Home</a></li>
                                <li><a href="#">Kategori</a></li>
                                <li>Detail Product</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>SUB KATEGORI PRODUK</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
										<?php foreach($category as $itemcategory) { ?>
                                        <li><a href="<?=site_url()?>/page/category/<?=$itemcategory->idsub?>/<?=$itemcategory->namasubkategori?>"><?=$itemcategory->namasubkategori?>
										</a></li>
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
                        <div class="col-md-9 col-sm-9">
                            <div class="category-header no-margin-bottom">
                                <div class="row">
                                    <div class="col-md-4  cat-search-input">
                                        <select class="form-control">
                                            <option>Sort</option>
                                            <option>Newest</option>
                                            <option selected="">Lowest Price</option>
                                            <option>Highest Price</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4  cat-search-input">
                                        <select class="form-control">
                                            <option>All Type</option>
                                            <option>New</option>
                                            <option selected="">Used</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 text-right  cat-search-input">
                                        <div class="view-type">
                                            <a href="<?=site_url()?>/page/category/<?=$this->uri->segment(3)?>"  data-toggle="tooltip" data-placement="top" title="List"><i class="fa fa-th-list"></i></a>
                                            <a href="<?=site_url()?>/page/category_grid/<?=$this->uri->segment(3)?>"  data-toggle="tooltip" data-placement="top" title="Grid"><i class="fa fa-th"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-results-box">
                                <div class="row">
                                    <div class="col-md-12 search-results">
                                        Keyword : <span>"<?=$keyword?>"</span>  Results : <span></span> items
                                    </div>
                                </div>
                            </div>
                            <div class="list-results">
                                <div class="row">
                                    <div class="col-sm-12">
                                         <?php foreach($produksponsor as $itemproduksponsor) { ?>
                                        <div class="item-ads highlight-ads">

                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-badge <?=$itemproduksponsor->cat_sponsor?>">
                                                        <a href="#">Featured Ads</a>
                                                    </div>
                                                    <div class="item-img">
                                                        <img alt="" src="<?=base_url()?>assets/images/product/<?=$itemproduksponsor->picture?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="<?=site_url()?>/page/productsponsor/<?=$itemproduksponsor->idproduct?>"><h4><?=$itemproduksponsor->product_name?></h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> Today</li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="#">Kategori</a> 
                                                            <li class="item-location hidden-xs"><a href="#"><i class="fa fa-map-marker"></i>Depok</a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> <?=$itemproduksponsor->kondisi?></li>
                                                        </ul>
                                                        <?=$itemproduksponsor->description?>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>Rp <?=number_format($itemproduksponsor->price)?></h3>
                                                        <span></span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="<?=site_url()?>/page/productsponsor/<?=$itemproduksponsor->idproduct?>" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
<?php } ?>
                                        <?php foreach($product as $itemproduct) { ?>
                                        <div class="item-ads">
                                            <div class="row">
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-img">
                                                        <img alt="" src="<?=base_url()?>assets/images/product/<?=$itemproduct->picture?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-6">
                                                    <div class="item-title">
                                                        <a href="<?=site_url()?>/page/detail/<?=$itemproduct->idproduct?>"><h4><?=$itemproduct->product_name?></h4></a>
                                                    </div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> <?=$itemproduct->date?></li>
                                                            <li class="item-cat hidden-xs"><i class="fa fa-bars"></i> <a href="#">Kategori</a></li>
                                                            <li class="item-location hidden-xs"><a href="#">
                                                            <i class="fa fa-map-marker"></i> <?=$itemproduct->pasarname?></a></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> <?=$itemproduct->kondisi?></li>
                                                        </ul>
                                                        <?=substr($itemproduct->description,0,130)?>...
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <div class="item-price">
                                                        <h3>Rp <?=number_format($itemproduct->price)?></h3>
                                                        <span></span>
                                                    </div>
                                                    <div class="item-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="<?=site_url()?>/page/detail/<?=$itemproduct->idproduct?>" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <?php }  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
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