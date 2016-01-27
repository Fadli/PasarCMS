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
                                    <img src="<?=base_url()?>/assets/images/seller/<?=$seller->avatar?>" alt="avatar" class="img-responsive">
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
                                    <h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> Profil Toko </a> </h4>
                                </div>

                               <form action="<?=site_url()?>/A418c5509e2171d55b0aee5c2ea4442b5/update_profile" method="post" enctype="multipart/form-data">
                                    <div class="panel-body">            
                                        <div class="form-group">
                                        <input type="hidden"  name="idseller" value="<?=$seller->idseller?>" id="hiddenField">
                                            <label class="col-sm-3 control-label">Nama Toko</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nama_toko" required="required" value="<?=$seller->sellername?>" maxlength="100" class="form-control" readonly >                                  </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" required="required"  value="<?=$seller->email?>" maxlength="100" class="form-control" readonly >                        
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Pemilik</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="owner" required="required"  value="<?=$seller->owner?>" class="form-control" >                                   </div>
                                        </div><br>
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Lokasi </label>
                                            <div class="col-sm-9">
                                                  <select name="pasar" id="select" class="form-control">
                                                   <option>Lokasi</option>
													<?php foreach($pasar as $itempasar) { ?>
                                                    <?php if($seller->idpasar==$itempasar->id_pasar) { ?>
                                                    	<option selected value="<?=$itempasar->id_pasar?>"><?=$itempasar->pasarname?></option>
                                                    <?php } else {  ?>
														<option value="<?=$itempasar->id_pasar?>"><?=$itempasar->pasarname?></option>
													<?php }  }?>
                                                  </select>
                                            </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Telp</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="phone" required="required"  value="<?=$seller->phone?>" class="form-control" >                                   </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Whatapps</label>
                                            <div class="col-sm-9">
                                                <input type="tel" name="WA" maxlength="100" value="<?=$seller->WA?>" class="form-control" >                                  </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">BBM</label>
                                            <div class="col-sm-9">
                                                <input type="tel" name="BBM"  maxlength="100" value="<?=$seller->BBM?>" class="form-control" >                                  </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat Toko</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="address" value="<?=$seller->address?>" class="form-control" >                                 </div>
                                        </div><br>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Avatar</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="userfile" class="filestyle" >
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password1" class="form-control" placeholder="Left blank if you will not update" value="" >                                         <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Konfirmasi Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password2" class="form-control" >                                           <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9"> </div>
                                        </div>

                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-custom"><i class="fa fa-save"></i> Save Update</button>
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