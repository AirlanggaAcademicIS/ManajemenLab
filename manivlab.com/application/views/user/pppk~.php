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
                            <h3 class="box-title">Data PSL</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo base_url(); ?>user/simpanpppk" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NO</label>
                                    <input type="text" name="no" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dari</label>
                                    <input type="text" name="dari" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Labkom</label>
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
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Subject</label>
                                            <input type="text" name="kepada" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Alasan</label>
                                            <textarea name="alasan" class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
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