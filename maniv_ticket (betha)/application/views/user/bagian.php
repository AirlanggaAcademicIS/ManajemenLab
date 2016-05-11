<?php $this->load->view('inc/head'); ?>
<aside class="right-side">
    <div class="wrapper row-offcanvas row-offcanvas-right">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Data Labkom </h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo base_url(); ?>user/simpanbagian" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="">Bagian</label>
                                    <input type="text" name="bagian" value="<?php echo $bagian; ?>" class="form-control" id="" placeholder="Bagian">
                                </div>
                                <input type="hidden" name="id_bagian" value="<?php echo $id_bagian; ?>" />
                                <input type="hidden" name="status" value="<?php echo $status; ?>" />
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div><!-- /.box -->


                </div><!-- /.box-body -->
            </div><!-- /.box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Labkom </h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Labkom</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $no=0; foreach($label as $bagian) { $no++ ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $bagian['bagian']; ?></td>
                            <td><a href="<?php echo base_url(); ?>user/editbagian/<?php echo $bagian['id_bagian']; ?>">Edit</a> || <a onclick="return confirm('Hapus data??');" href="<?php echo base_url(); ?>user/hapusbagian/<?php echo $bagian['id_bagian']; ?>">Hapus</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->
    </section><!-- /.content -->
</div>
</aside>

</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/asset/js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>