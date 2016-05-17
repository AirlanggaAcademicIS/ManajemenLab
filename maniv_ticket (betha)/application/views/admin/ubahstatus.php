<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Halaman admin</title>
        
        <!-- Maniac stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate/animate.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator/bootstrapValidator.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    </head>
    <body class="fixed">
        <!-- Header -->
        <header>
            <a href="" class="logo"><i class="fa fa-bolt"></i> <span>MANIVLAB</span></a>
            <nav class="navbar navbar-static-top">
            <!--
                <a href="#" class="navbar-btn sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            -->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                     
                        <li class="dropdown widget-admin">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>admin <i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="footer">
                                    <a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-power-off"></i>Keluar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /.header -->
         
        <!-- wrapper -->
        <div class="wrapper">
            <div class="leftside">
                <div class="sidebar">
                    <ul class="sidebar-menu">
                      <li class="title">Menu</li>
                      <li>
                        <a href="<?php echo base_url(); ?>admin">
                            <i class="fa fa-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/datapppk">
                            <i class="fa fa-eye"></i> <span>Data PSL</span>
                            <small class="label pull-right">10</small>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>admin/teridentifikasi">
                            <i class="fa fa-eye"></i> <span>PSL Teridentifikasi</span>
                            <small class="label pull-right">10</small>
                        </a>
                    </li>
                    <li class="">
                       <a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-power-off"></i>Keluar</a>
                    </li>
                    </ul>
                 </div>
            </div>

            <div class="rightside">
                <div class="page-head">
                    <h1>PENGADUAN SEPUTAR LABKOM </h1>
                </div>

                <div class="content label-normal">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-title">
                                <h3>Isi Data</h3>
                            </div>
                            <div class="box-body">
                                <form role="form" id="" action="<?php echo base_url(); ?>admin/updatepppk" method="post">
                                  <div class="form-group">
                                    
                                    <input type="hidden" value="<?php echo $no; ?>" class="form-control" name="no" readonly>
                                  </div>
                                  <label>Status</label>
                                  <select name="status" id="inputStatus" class="form-control" required="required">
                                      <option value="sudah diidentifikasi">sudah diidentifikasi</option>
                                      <option value="on progress">on progress</option>
                                      <option value="waiting">waiting</option>
                                  </select>
                                  <div class="form-group">
                                    
                                    <input type="hidden" class="form-control" name="dari" value="<?php echo $dari; ?>" readonly>
                                  </div>
                                  <input type="hidden" class="form-control" name="labkom" value="<?php echo $labkom; ?>" readonly>
                                  <input type="hidden" class="form-control" name="kepada" value="<?php echo $kepada; ?>" readonly>
                                  <input type="hidden" class="form-control" name="object" value="<?php echo $object; ?>" readonly>
                                  <div class="form-group">
                                    
                                    <textarea class="form-control" name="alasan" style="height: 140px; resize: none;" readonly><?php echo $alasan; ?></textarea>
                                  </div>
                                  <div class="form-group">
                                    
                                    <input name="tanggal" value="<?php echo $tanggal; ?>" type="hidden" class="form-control datepicker-input" readonly>
                                  </div>
                                  <button type="submit" class="btn btn-info">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.wrapper -->
        </div>

    

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
        
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- Interface -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js" type="text/javascript"></script>
        
        <!-- Forms -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrapValidator/bootstrapValidator.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/datepicker/datepicker.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){                
                //Date picker
                $('.datepicker-input').datepicker();
                
            });
        </script>
    </body>
</html>