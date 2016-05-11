<?php $this->load->view('inc/heada'); ?>
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
                            <h3 class="box-title">Cara Pemesanan</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="<?php echo base_url(); ?>user/updatepes">
                            <div class="form-group">
                            <label>Edit</label>
                                <textarea class="form-control" name="cara" rows="6" placeholder=""><?php echo $cara; ?></textarea>
                            </div>
                            <input type="hidden" class="form-control" value="<?php echo $tentang; ?>" name="tentang" rows="6" placeholder="" >
                            <input type="hidden" name="id_set" value="<?php echo $id_set; ?>">
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div><!-- /.box -->


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