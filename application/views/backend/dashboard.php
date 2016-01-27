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
                                        <li><a href="<?=site_url()?>/toko/donasi">Donasi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Produk</h4>
                                </div>
                                <div class="panel-body">
                                  <div class="before-table">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="<?=site_url()?>/toko/upload_product" class="btn btn-custom"><i class="fa fa-plus"></i> Upload Produk</a>
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
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><input id="checkAll" type="checkbox" /></th>
                                                <th>Foto
                                                <th>Diskripsi Produk</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th style="width:10%">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($product as $itemproduct) { ?>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td align="center"><img alt="" class="thumb-img img-responsive" src="<?=base_url()?>assets/images/product/<?=$itemproduct->picture?>"></td>
                                                <td>
                                                    <div class="item-title"><a href="#" target="_blank"><strong><?=$itemproduct->product_name?></strong></a></div>
                                                    <div class="item-meta">
                                                        <ul>
                                                            <li class="item-date"><i class="fa fa-clock-o"></i> <?=$itemproduct->date?></li>
                                                            <li class="item-type"><i class="fa fa-bookmark"></i> <?=$itemproduct->kondisi?></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><strong><?=number_format($itemproduct->price)?></strong></td>
                                                <td><?php if($itemproduct->publish==1) { echo "Publish"; } ?></td>
                                                <td>
                                                    <ul class="actions-table">
                                                        <li><a href="<?=site_url()?>/toko/edit_product/<?=$itemproduct->idproduct?>" class="label label-success"><i class="fa fa-pencil"></i> edit</a></li>
                                                        <li><a class="label label-warning"><i class="fa fa-close"></i> unpublish</a></li>
                                                        <li><a href="#" class="label label-danger" onclick="return confirm('Remove this item?')"><i class="fa fa-trash"></i> delete</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-xs-3">
 
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <ul class="pagination table-pagination">
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