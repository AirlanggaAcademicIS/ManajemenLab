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
 <form role="form" method ="post" action="<?php echo base_url();?>managekomputer/insertmanagelab">

<div class="form-group">
     <label for="kategori">Kategori Barang :</label>
     <select class="form-control" id="kategori">
       <option>Komputer</option>
       <option>Non Komputer</option>
     </select>
</div>
   <div class="form-group">
     <label for="kode_barang">Kode Barang :</label>
     <select class="form-control" id="kode_barang">
       <option>K001</option>
       <option>K002</option>
       <option>K003</option>
       <option>K004</option>
       <option>K005</option>
     </select>
</div>

<div class="form-group">
      <label for="namabarang">Nama Barang :</label>
      <input type="namabarang" class="form-control" id="namabarang" placeholder="ex: PC3-10700">
    </div>

<div class="form-group">
      <label for="kondisi_barang">Kondisi Komputer : </label>
      <label class="radio-inline"><input type="radio" id="kondisi_barang">Baik</label>
      <label class="radio-inline"><input type="radio" id="kondisi_barang">Buruk</label>
    </div>
 
 
<div class="form-group">
      <label for="lokasi_komp">Lokasi Komputer Awal :</label>
      <input type="pc_komp" class="form-control" id="lokasi_komp" placeholder="ex: PC3-10700">
    </div>
       
<div class="form-group">
      <label for="lokasi_komp">Lokasi Komputer Akhir : </label>
      <label class="radio-inline"><input type="radio" id="lokasi_komp">Labkom 1</label>
      <label class="radio-inline"><input type="radio" id="lokasi_komp">Labkom 2</label>
      <label class="radio-inline"><input type="radio" id="lokasi_komp">Labkom 3</label>
    </div>
    

    <div class="form-group">
      <label for="Deskripsi">Deskripsi:</label>
      <textarea class="form-control" rows="5" id="Deskripsi"></textarea>
    </div>
    
<br>
<div class="container">
  <button type="button" class="btn btn-primary active btn-md col-sm-2">Insert</button>
  </div>
<br>
  
</div>
</body>