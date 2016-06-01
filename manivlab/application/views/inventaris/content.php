<script type="text/javascript" src="public/js/jquery.min.js"></script>
<link rel="stylesheet" href ="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

<script src="public/jquery.js" type="text/javascript"></script>
<body>

            <nav class="navbar navbar-dark bg-inverse navbar-full" id="nav-main">
        <img class="navbar-brand" src="<?php echo base_url();?>public/images/logomanivlab.png">
        <ul class="nav navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/home">Home </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inventaris</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo base_url();?>/Komputer">Komputer</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>Inventaris">Non-Komputer</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/managelab">Management Lab</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/penjadwalan">Scheduling</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/history">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/eticketing">E-Ticketing</a>
            </li>
        </ul>

    </nav>
    

        <div class="container-fluid">
      <div class="container text-center">
        <div class="row">
         
     <div class="container-fluid">
      <div class="container">
      </div>
    </div>
    <div class="container-fluid">
      <div class="container">
        
        <br>
     <form id="formnonkomp" name="formnonkomp" method ="post" action="<?php echo base_url();?>Inventaris/insertnonkomp">
            <div class="form-group">
              <label for="inputNonKomp" class="col-sm-2 control-label">Nama Barang :</label>
              <div class="col-sm-10">  
                <input type="text" class="form-control" name="namabarang" id="namabarang" placeholder="Nama Barang" required>
              </div>
              
              <label for="inputNonKomp" class="col-sm-2 control-label">Tanggal Transaksi</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="tangal_transaksi" required >
              </div>
                
              <label for="inputNonKomp" class="col-sm-2 control-label">Jenis Barang :</label>
              <div class="col-sm-10">
                  <select name="jenisbarang" class="form-control" id="jenisbarang">
                    <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                    <option value="Perlengkapan Lab">Perlengkapan Lab</option>
                    <option value="Kebersihan">Kebersihan</option>
                    <option value="Lain-lain">Lain-lain</option>
                   </select>
              </div>
                
              <label for="inputNonKomp" class="col-sm-2 control-label">Merk :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="merkbarang" id="merkbarang" placeholder="Merk Barang" required>
              </div>
                
              <label for="inputNonKomp" class="col-sm-2 control-label">Jumlah :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="jumlahbarang" id="jumlahbarang" placeholder="Jumlah Barang" required>
              </div>
                
               <label for="inputNonKomp" class="col-sm-2 control-label">Lokasi Barang :</label>
              <div class="col-sm-10">
                  <select name="lokasibarang" class="form-control" id="lokasibarang">
                    <option value="Laboratorium 1">Laboratorium 1</option>
                    <option value="Laboratorium 2">Laboratorium 2</option>
                    <option value="Laboratorium 3">Laboratorium 3</option>
                    <option value="Laboratorium 4">Laboratorium 4</option>
                    <option value="Gudang">Gudang</option>
                   </select>
              </div>
                
              <label for="inputNonKomp" class="col-sm-2 control-label">Keterangan :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="keteranganbarang" id="keterangan" placeholder="Keterangan Barang">
              </div>
            <br>
            <br>
            <div class="text-center">
              <button class="btn btn-default" type="submit">Add</button>  
              <button class="btn btn-default" id="updatedata" type="button">Update</button>
            </div>
          </form>

            <br>

              
         
            <div >
                <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
    </tbody></table><table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                
                <th class="info">No.</th>
                  <th class="info">ID Barang</th>
                  <th class="info">Nama Barang</th>
                  <th class ="info">Tanggal Transaksi</th>
                  <th class="info">Jenis Barang</th>
                  <th class="info">Merk</th>
                  <th class="info">Jumlah</th>
                  <th class="info">Lokasi</th>
                  <th class="info">Keterangan</th>
                    <th class ="info">Edit</th>
            </tr>
        </thead>

        <tbody>
            <?php
                  $i=0;
                  foreach ($table->result()  as $row){
                       echo ' <tr>
                  <td class="info">'.$i++.'</td>
                  
                  <td class="info">'.$row->id_nonkomp.'</td>
                  <td class="info">'.$row->nama_nonkomp.'</td>
                  <td class="info">'.$row->tanggal_transaksi.'</td>
                  <td class="info">'.$row->Jenis_nonkomp.'</td>
                  <td class="info">'.$row->merk_nonkomp.'</td>
                  <td class="info">'.$row->jumlah_nonkomp.'</td>
                  <td class="info">'.$row->lokasi_nonkomp.'</td>
                  <td class="info">'.$row->keterangan_nonkomp.'</td>
                  <td class="info"> <button class="btn btn-default edit " type="button" value='.$row->id_nonkomp.'>Edit</button></td>
                </tr>';
                  }
                  ?>
            
        </tbody>
    </table>
              
            </div>
            </form>       

          </div>
        </div>
        </div>
      </div>
      
    </div>
    </div>
</div>


<script src="public/js/edit.js" type="text/javascript"></script>

<script type="text/javascript">
   /* Custom filtering function which will search data in column four between two values */

 
$(document).ready(function() {
    var table = $('#example').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );
</script>

<script src="https://code.jquery.com/jquery-1.12.3.min.js">
</script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">
</script>

</body>

