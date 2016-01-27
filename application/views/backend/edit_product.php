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
            <header 
             class="navbar navbar-default navbar-fixed-top navbar-top">
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
                                    <h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> Edit Produk  </a> </h4>
                                </div>
                                <?php if($this->uri->segment(4)=="sukses") { ?>
                                <span style="background-color:#58b325; width:100%; padding:5px; text-align:center; height:100px; color:#FFF">
                                Produk Berhasil di Perbahurui</span>
                                <?php } ?>
                                 <form action="<?=site_url()?>/A418c5509e2171d55b0aee5c2ea4442b5/edit_product" method="post" enctype="multipart/form-data">
                                 
                                    <div class="panel-body">             
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="<?=$product->product_name?>" name="nama_produk" required="required" class="form-control">                                   			
                                                <input type="hidden" name="idproduct" value="<?=$product->idproduct?>" id="hiddenField2">
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kategori</label>
                                            <input type="hidden"  name="idseller" value="<?=$seller->idseller?>" id="hiddenField">
                                            <div class="col-sm-9">
                                                  <select name="kategori" id="select" class="form-control">
                                                  <?php foreach($category as $itemcategory) { ?>
                                                  	<?php if($itemcategory->idcategory==$product->idcategory) { ?>
                                                    <option selected value="<?=$itemcategory->idcategory?>"><?=$itemcategory->categoryname?></option>
                                                    <?php } else { ?>
                                                    <option value="<?=$itemcategory->idcategory?>"><?=$itemcategory->categoryname?></option>
                                                  <?php } } ?>
                                                  </select>
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Harga</label>
                                            <div class="col-sm-9">
                                                <input type="number" value="<?=$product->price?>" name="harga" min="1" required="required" class="form-control">                                
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Stok</label>
                                            <div class="col-sm-9">
                                                <input type="number" value="<?=$product->stok?>" name="stok" min="1" required="required" class="form-control">                                
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Diskripsi</label>
                                            <div class="col-sm-9">
                                                <textarea name="diskripsi" class="form-control"><?=$product->description?></textarea>                                
                                            </div>
                                        </div><br><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kondisi</label>
                                            <div class="col-sm-9">
                                            <select name="kondisi" id="select" class="form-control">
                                                    <option>Baru</option>
                                                    <option>Bekas</option>
                                              </select>
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Foto Produk</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="userfile" class="filestyle">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-custom"><i class="fa fa-save"></i> Update</button>
                                                <button type="submit" class="btn btn-default"><i class="fa fa-close"></i> Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
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
    </body>
</html> 