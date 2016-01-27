<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Administrator : <?=$web->logo?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?=base_url()?>assets/assetsadmin/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?=base_url()?>assets/assetsadmin/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="<?=base_url()?>assets/assetsadmin/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="<?=base_url()?>assets/assetsadmin/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="<?=site_url()?>/admin123"><?=$web->logo?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 29 Oktober 2015 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?=base_url()?>assets/assetsadmin/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="<?=site_url()?>/admin123/dashboard"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
                    </li>
                     <li>
                        <a   href="<?=site_url()?>/admin123/product"><i class="fa fa-desktop fa-3x"></i>Data Produk</a>
                    </li>
                    <li>
                        <a  href="<?=site_url()?>/admin123/seller"><i class="fa fa-desktop fa-3x"></i>Data Pedagang</a>
                    </li>
						   <li  >
                        <a   href="<?=site_url()?>/admin123/transaction"><i class="fa fa-bar-chart-o fa-3x"></i>Data Transaksi</a>
                    </li>	
                    <li  >
                        <a class="active-menu"  href="<?=site_url()?>/admin123/pasar"><i class="fa fa-table fa-3x"></i>Data Pasar</a>
                    </li>	
                    <li  >
                        <a  href="<?=site_url()?>/admin123/produksponsor"><i class="fa fa-table fa-3x"></i>Produk Sponsor</a>
                    </li>			
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Pasar</h2>   
                        <h5>Welcome Administrator </h5>
                       
                  </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#">Input Pasar</a> | Data Pasar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pasar</th>
                                            <th>Address</th>
                                            <th>Koordinat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach($market as $itemmarket) { ?>
                                        <tr class="odd gradeX">
                                            <td><?=$no++?></td>
                                            <td><?=$itemmarket->pasarname?></td>
                                            <td><?=$itemmarket->address?></td>
                                            <td>Lat: <?=$itemmarket->lat?> Long : <?=$itemmarket->long?> </td>
                                            <td class="center">Edit | Delete</td>
                                        </tr>
                                    <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?=base_url()?>assets/assetsadmin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?=base_url()?>assets/assetsadmin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?=base_url()?>assets/assetsadmin/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?=base_url()?>assets/assetsadmin/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/assetsadmin/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?=base_url()?>assets/assetsadmin/js/custom.js"></script>
    
   
</body>
</html>
