<?php $this->load->view('inc/heada'); ?>
<aside class="right-side">
    <div class="wrapper row-offcanvas row-offcanvas-right">
<section class="content">
    <div class="row">
        <!-- left column -->
        <a href="<?php echo base_url(); ?>user/pppk" class="btn bg-olive btn-flat margin">Tambah Data PSL</a>
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data PSL</h3>
                </div><!-- /.box-header -->
                <div class="">
                    <table class="table table-condensed">
                    
                        <tr>
                            <th>NO</th>
                            <th>Dari</th>
                            <th>Tanggal</th>
                            <th>Labkom</th>
                            <th>Subject</th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            
                        </tr>
                        <?php foreach($pppk as $row) { ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['dari']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['labkom']; ?></td>
                            <td><?php echo $row['kepada']; ?></td>
                            <td><?php echo $row['alasan']; ?></td>
                            <td style="color:green">tunggu</td>
                            <td><a href="<?php echo base_url(); ?>user/editpppk/<?php echo $row['no']; ?>">Edit</a> ||
                            <a href="<?php echo base_url(); ?>user/hapuspppk/<?php echo $row['no']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section>
</div>
</aside>

<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/asset/js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>