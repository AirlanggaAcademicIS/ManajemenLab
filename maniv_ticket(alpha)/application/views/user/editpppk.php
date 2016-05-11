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
                            <h3 class="box-title">Data Rumah</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo base_url(); ?>user/updaterumah" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="">No</label>
                                    <input type="text" name="judul" class="form-control" value="<?php echo $no; ?>" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Dari</label>
                                    <input type="text" name="judul" class="form-control" value="<?php echo $dari; ?>" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="judul" class="form-control" value="<?php echo $tanggal; ?>" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <select class="form-control" name="labkom" style="width: 100%;">
                                        <?php 
                                        foreach($labkom as $kat){
                                            if(!in_array($kat['id_labkom'],$label_post)){
                                            ?>
                                            <option value="<?php echo $kat['labkom'] ?>"><?php echo $kat['labkom'] ?></option>
                                            <?php } else { ?>
                                            <option selected="selected" value="<?php echo $kat['labkom'] ?>"><?php echo $kat['labkom'] ?></option>
                                            <?php } } ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="tanggal" value="<?php echo $tanggal; ?>" class="form-control" id="tanggal" placeholder="">
                                </div>
                                
                                <div class="form-group">
                                            <label>Alasan</label>
                                            <textarea name="informasi" class="form-control" rows="3" placeholder=""><?php echo $alasan; ?></textarea>
                                        </div>
                                <div class="form-group">
                                
                            </div><!-- /.box-body -->

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