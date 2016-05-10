<body>
            <nav class="navbar navbar-dark bg-inverse navbar-full" id="nav-main">
        <img class="navbar-brand" src="<?php echo base_url();?>public/images/logomanivlab.png">
        <ul class="nav navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/home">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/inventaris">Inventaris</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/managelab">Management Lab</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/penjadwalan">Scheduling</a>
            </li>
             
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">	History</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Komputer</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>/history">Non-Komputer</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/eticketing">E-Ticketing</a>
            </li>
        </ul>

    </nav>

  <div class="content">
      <br><br>
    <center>
      <h1> HISTORY</h1></center>
    
  </div>
  
  <div class="rightside">
            <div class="page-head">
                <h1>&nbsp;</h1>
                <p>&nbsp;</p>
            </div>
            <div class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="box">
    <div class="box-title"> </div><!-- /.box-title -->
                            <div class="box-body">
                               <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>NO</th>
                                        <th>DARI</th>
                                        <th>TGL KELUHAN</th>
                                        <th>LABKOM</th>
                                        <th>SUBJECT</th>
                                        <th>ALASAN</th>
                                        <th>ID_BARANG</th>
                                        <th>MERK</th>
                                        <th>KELUHAN</th>
                                        <th>TGL IDENTIFIKASI</th>
                                        <th>IDENTIFIKASI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($table -> result() as $row) {?>
                                    <tr>
                                        <td><?php echo $row->no; ?></td>
                                        <td><?php echo $row->dari; ?></td>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td><?php echo $row->labkom; ?> (<?php echo $row->object; ?>)</td
                                        ><td><?php echo $row->kepada; ?></td>
                                        <td><?php echo $row->alasan;?></td>
                                        <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       <td> </td>
                                       
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            <!-- Main row --><!-- /.row -->
        </div>
    </div>
</body>