
<style src="public/css/jquery.dataTables.min.css" type="text/css"> </style>
<style src="public/css/jquery.dataTables.css" type="text/css"> </style>
<style src="public/css/datatables.css" type="text/css"> </style>
<script src="public/jquery.js" type="text/javascript"> </script>
<script src="public/jquery.dataTables.min.js" type="text/javascript"> </script>



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
                    <a class="dropdown-item" href="<?php echo base_url();?>/Inventaris">Non-Komputer</a>
                </div>
            </li>
            <li class="nav-item ">
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
    
<div class="container">
  <h2>Inventaris Komputer</h2>

  
  <form role="form" method ="post" action="<?php echo base_url();?>komputer/insertkomp">
    <div class="form-group">
      <label for="kode_barangkomp">Kode Barang:</label>
      <input type="text" name="kode_barangkomp" class="form-control" id="kode_barangkomp" placeholder="ex: 001" required>
    </div>
      
    <div class="form-group">
      <label for="nama_barangkomp">Nama Barang:</label>
      <input type="text" name="nama_barangkomp" class="form-control" id="nama_barangkomp" placeholder="ex: L001" required>
    </div>
      
     <div class="form-group">
      <label for="lokasi_komp">Lokasi Komputer: </label>
     <select name="lokasi_komp" class="form-control" id="lokasi_komp"required>
       <option>Labkom 1</option>
       <option>Labkom 2</option>
       <option>Labkom 3</option>
       <option>Labkom 4</option>
     </select>

    <div class="form-group">
      <label for="merk_processor">Merk Processor:</label>
      <input type="text" name="merk_processor" class="form-control" id="merk_processor" placeholder="ex: intel core i3 3210"required>
    </div>

    <div class="form-group">
      <label for="kecepatan_processor">Kecepatan Processor (GHz):</label>
      <input type="text" name="kecepatan_processor" class="form-control" id="kecepatan_processor" placeholder="ex: 3.2 GHz" required>
    </div>

    <div class="form-group">
      <label for="socket_processor">Socket Processor:</label>
      <input type="text" name="socket_processor" class="form-control" id="socket_processor" placeholder="ex: LGA 1155" required>
    </div>

    <div class="form-group">
      <label for="merkmotherboard_komp">Merek Motherboard:</label>
      <input type="text" name="merkmotherboard_komp" class="form-control" id="merkmotherboard_komp" placeholder="ex: Lenovo"required>
    </div>

    <div class="form-group">
      <label for="modelmotherboard_komp">Model Motherboard:</label>
      <input type="text" name="modelmotherboard_komp" class="form-control" id="modelmotherboard_komp" placeholder="ex: H61M-S2P" required>
    </div>

    <div class="form-group">
      <label for="northbridge_komp">Chipset Northbridge :</label>
      <input type="text" name="northbridge_komp" class="form-control" id="northbridge_komp" placeholder="ex: H61M-S2P" required>
    </div>

    <div class="form-group">
      <label for="southbridge_komp">Chipset Southbridge :</label>
      <input type="text" name="southbridge_komp" class="form-control" id="southbridge_komp" placeholder="ex: Intel Ivy Bridge" required>
    </div>

    <div class="form-group">
      <label for="tiperam_komp">Tipe RAM :</label>
      <input type="text" name="tiperam_komp" class="form-control" id="tiperam_komp" placeholder="ex: DDR3" required>
    </div>

    <div class="form-group">
      <label for="kapasitas_komp">Kapasitas RAM (MB):</label>
      <input type="text" name="kapasitas_komp" class="form-control" id="kapasitas_komp" placeholder="ex: 2048 MB" required>
    </div>
    
    <div class="form-group">
      <label for="pc_komp">PC RAM :</label>
      <input type="text" name="pc_komp" class="form-control" id="pc_komp" placeholder="ex: PC3-10700"required>
    </div>

    <div class="form-group">
      <label for="macaddress_komp">MAC Address :</label>
      <input type="text" name="macaddress_komp" class="form-control" id="macaddress_komp" placeholder="ex: 90-2B-34-7F-57-5C"required>
    </div>

   <div class="form-group">
     <label for="tahunbeli_komp">Tahun Pembelian:</label>
     <select name="tahunbeli_komp" class="form-control" id="tahunbeli_komp"required>
       <option>2016</option>
       <option>2015</option>
       <option>2014</option>
       <option>2013</option>
       <option>2012</option>
       <option>2011</option>
       <option>2010</option>
       <option>2009</option>
       <option>2008</option>
       <option>2007</option>
       <option>2006</option>
       <option>2005</option>
       <option>2004</option>
       <option>2003</option>
       <option>2002</option>
       <option>2001</option>
       <option>2000</option>
     </select>
     
      <div class="form-group">
      <label for="tanggal_transaksikomp">Tanggal Transaksi :</label>
      <input type="date" name="tanggal_transaksikomp" class="form-control" id="tanggal_transaksikomp" placeholder="">
    </div>
       
</div>
</form>
<br>
<div class="container">
  <button type="submit" class="btn btn-primary active btn-md col-sm-2">Insert</button>
</div>
  <br> <br>         
  <table class="table table-bordered" id="tbl_komputer">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Lokasi Komputer</th>
        <th>Tahun Pembelian</th>
        <th>Tanggal Transaksi</th>
        <th>Detail</th>
      </tr>
    </thead>
     <tbody>
	<!-- Pengambilan item list dari database -->
   
	
        	<?php
			$count = 1;
			foreach($komputer as $row) {?>
	  
		   
			<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $row->kode_barangkomp; ?></td>
			<td><?php echo $row->nama_barangkomp; ?> </td>
			<td><?php echo $row->lokasi_komp; ?></td>
			<td><?php echo $row->tahunbeli_komp; ?></td>
			<td><?php echo $row->tanggal_transaksikomp; ?></td>
            <td><button type="button" data-id="<?php echo $row->id?>" class="detail_barang" data-toggle="modal" data-target="#modaldetail">Detail</button></td>
			</tr>
			
        <?php $count++;}  ?>
        
        </tbody>
  </table>
</div>
<div class="modal fade" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Barang</h4>
      </div>
      <div class="modal-body">
        <label>Id</label> : <label id="iddetile"></label> <br/>
        <label>Kode Barang</label> : <label id="kodedetile"> </label> <br/>
        <label>Nama Barang</label> : <label id="namadetile"></label> <br/>
        <label>Lokasi Kompute</label> : <label id="lokasidetile"></label> <br/>
        <label>Merk Processor</label> : <label id="merkdetile"></label> <br/>
        <label>Kecepatan Processor (GHz)</label> :<label id="kecepatandetile"></label> <br/>
        <label>Socket Processor </label> : <label id="socketdetile"></label> <br/>
        <label>Merek Motherboard </label> :<label id="merkmotherboarddetile"></label> <br/>
        <label>Model Motherboard </label> :<label id="modelmotherboarddetile"></label> <br/>
        <label>Chipset Northbridge </label> :<label id="northbridgedetile"></label> <br/>
        <label>Chipset Southbridge </label>  :<label id="southbridgedetile"></label> <br/>
        <label>Tipe RAM </label> : <label id="tiperamdetile"></label> <br/>
        <label>Kapasitas RAM (MB)</label> : <label id="kapasitasramdetile"></label> <br/>
        <label>PC RAM </label> : <label id="pcramdetile"></label> <br/>
        <label>MAC Address </label> : <label id="macaddressdetile"></label> <br/>
        <label>Tahun Pembelian</label> : <label id="tahundetile"></label> <br/>
        <label>Tanggal Transaksi </label> : <label id="transaksidetile"></label> <br/>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<script src="public/detile.js" type="text/javascript"></script>
</body>