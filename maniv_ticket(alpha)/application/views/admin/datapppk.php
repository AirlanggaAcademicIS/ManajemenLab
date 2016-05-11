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
                    <li>
                        <a href="<?php echo base_url(); ?>admin">
                            <i class="fa fa-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/datapppk">
                            <i class="fa fa-folder"></i> <span>Data PSL </span>
                            <small class="label pull-right">10</small>
                        </a>
                    </li>
                    <li class="">PSL<a href="<?php echo base_url(); ?>admin/teridentifikasi"><span> Teridentifikasi</span>
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
                <h1>DATA PENGADUAN SEPURTA LABKOM </h1>
            </div>

            <div class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3>Data yang telah ditambahkan user</h3>
                            </div><!-- /.box-title -->
                            <div class="box-body">
                               <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>DARI</th>
                                        <th>TANGGAL</th>
                                        <th>LABKOM</th>
                                        <th>OBJECT</th>
                                        <th>ALASAN</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pppk as $row) {?>
                                    <tr>
                                        <td><?php echo $row['no']; ?></td>
                                        <td><?php echo $row['dari']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><?php echo $row['labkom']; ?> (<?php echo $row['object']; ?>)</td>
                                        <td><?php echo $row['kepada']; ?></td>
                                        <td><?php echo $row['alasan']; ?></td>
                                        <td>
                                        <?php if($row['status'] == "waiting"){ ?>

                                            <span class="label label-danger">Waiting</span>

                                        <?php } elseif ($row['status'] == "on progress"){ ?>
                                            <span class="label label-warning">On Progress</span>
                                        <?php } else { ?>
                                            <span class="label label-success">Finished</span>
                                        <?php } ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="<?php echo base_url(); ?>admin/identifikasi/<?php echo $row['no']; ?>" data-toggle="tooltip" data-placement="top" title="IDENTIFIKASI">
                                                <i class="fa fa-edit "></i>  
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>admin/ubahstatus/<?php echo $row['no']; ?>" data-toggle="tooltip" data-placement="top" title="UBAH STATUS">
                                                <i class="fa fa-gear " ></i> 
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="" data-toggle="tooltip" data-placement="top" title="HAPUS">
                                                <i class="fa fa-trash-o "></i> 
                                            </a>
                                            <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="CETAK" href="<?php echo base_url(); ?>admin/printppk/<?php echo $row['no']; ?>">
                                                <i class="fa fa-print"></i>  
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.box -->
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

<!-- Forms -->
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#example1").dataTable();
    $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false
    });
});
</script>
</body>
</html>