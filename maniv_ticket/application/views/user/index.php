<?php $this->load->view('inc/heada'); ?>
<body class="fixed">
    <!-- Header -->
    <header>
        <a href="" class="logo"><i class="fa fa-bolt"></i> <span>MANIVLAB</span></a>
        <nav class="navbar navbar-static-top"><div class="navbar-right">
                <ul class="nav navbar-nav">                     
                    <li class="dropdown widget-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>User <i class="fa fa-caret-down"></i></span>
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
                    <li class="active">
                        <a href="<?php echo base_url(); ?>user">
                            <i class="fa fa-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>user/datapppk">
                            <i class="fa fa-eye"></i> <span>Lihat Data PSL</span>
                            <small class="label pull-right">10</small>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>user/teridentifikasi">
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
                <h1>PSL</h1>
            </div>

            <div class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="box">
                </div><!-- /.col -->
            </div><!-- /.row -->
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

</script>
</body>
</html>