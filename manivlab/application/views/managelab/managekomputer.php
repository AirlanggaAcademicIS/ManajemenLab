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
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>/managelab">Management Lab<span class="sr-only">(current)</span></a>
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
  <h2>Management Lab</h2>
<br>
<?php if($result=="berhasil"):?>
<div class="alert failed_stock alert-warning" style="display:block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Gagal!</strong> Tidak dapat menyimpan data.
</div>
<?php //sleep(5);
elseif($result=="gagal"):?>
<div class="alert success_stock alert-success" style="display:block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Sukses!</strong> Anda berhasil melakukan menyimpan data.
</div>
<?php endif;?>

 <form role="form" method ="post" action="<?php echo base_url();?>managelab/insertmanagelab">

   <div class="form-group">
     <label for="kode_barang">Kode Barang :</label>
     <select name="kode_barang" class="form-control" name="kode_barang" id="kode_barang">
       
     </select>
</div>

<div class="form-group">
      <label for="nama_barang">Nama Barang :</label>
      <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder=" " readOnly="true">
     </div>

<div class="form-group">
	  <label for="tanggal_transaksi">Tanggal Transaksi :</label>
	  <input type="date" name="tanggal_transaksi" class="form-control" id="tanggal_transaksi" placeholder="" required>
</div>

    
<div class="form-group">
      <label for="kondisi_barang">Kondisi Komputer : </label>
      <label class="radio-inline"><input type="radio" name="kondisi_barang" value="baik">Baik</label>
      <label class="radio-inline"><input type="radio" name="kondisi_barang" value="buruk">Buruk</label>
    </div>
 
 
<div class="form-group">
      <label for="lokasibarang_awal">Lokasi Komputer Awal :</label>
      <input type="text" class="form-control" name="lokasibarang_awal" id="lokasibarang_awal" placeholder=" " readOnly="true">
    </div>
    
    <div class="form-group">
      <label for="lokasibarang_akhir">Lokasi Komputer Akhir: </label>
     <select name="lokasibarang_akhir" class="form-control" id="lokasibarang_akhir"required>
       <option>Labkom 1</option>
       <option>Labkom 2</option>
       <option>Labkom 3</option>
       <option>Labkom 4</option>
       <option>Gudang</option>
     </select>
          ,.
    <div class="form-group">
      <label for="Deskripsi">Keterangan :</label>
      <textarea class="form-control" rows="5" name="Deskripsi" id="Deskripsi"></textarea>
    </div>
    
<br>
<div class="container">
  	  <button type="submit" class="btn btn-primary active btn-md col-sm-2">Insert</button>
  </div>
<br>
  
</div>

<script src="public/js/manage_komputer.js"></script>
</body>