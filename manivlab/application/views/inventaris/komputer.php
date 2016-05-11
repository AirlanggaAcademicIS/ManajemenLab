<body>
     <nav class="navbar navbar-dark bg-inverse navbar-full" id="nav-main">
        <img class="navbar-brand" src="<?php echo base_url();?>public/images/logomanivlab.png">
        <ul class="nav navbar-nav">
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>/home">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>/inventaris">Inventaris<span class="sr-only">(current)</span></a>
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
      <label for="id_komputer">ID Komputer:</label>
      <input type="id_komputer" class="form-control" id="id_komputer" placeholder="ex: 001">
    </div>

    <div class="form-group">
      <label for="lokasi_komp">Lokasi Komputer: </label>
      <label class="radio-inline"><input type="radio" id="lokasi_komp">Labkom 1</label>
      <label class="radio-inline"><input type="radio" id="lokasi_komp">Labkom 2</label>
      <label class="radio-inline"><input type="radio" id="lokasi_komp">Labkom 3</label>
    </div>

    <div class="form-group">
      <label for="merk_processor">Merk Processor:</label>
      <input type="merk_processor" class="form-control" id="merk_processor" placeholder="ex: intel core i3 3210">
    </div>

    <div class="form-group">
      <label for="kecepatan_processor">Kecepatan Processor (GHz):</label>
      <input type="kecepatan_processor" class="form-control" id="kecepatan_processor" placeholder="ex: 3.2 GHz">
    </div>

    <div class="form-group">
      <label for="socket_processor">Socket Processor:</label>
      <input type="socket_processor" class="form-control" id="socket_processor" placeholder="ex: LGA 1155">
    </div>

    <div class="form-group">
      <label for="merkmotherboard_komp">Merek Motherboard:</label>
      <input type="merkmotherboard_komp" class="form-control" id="merkmotherboard_komp" placeholder="ex: Lenovo">
    </div>

    <div class="form-group">
      <label for="modelmotherboard_komp">Model Motherboard:</label>
      <input type="modelmotherboard_komp" class="form-control" id="modelmotherboard_komp" placeholder="ex: H61M-S2P">
    </div>

    <div class="form-group">
      <label for="northbridge_komp">Chipset Northbridge :</label>
      <input type="northbridge_komp" class="form-control" id="northbridge_komp" placeholder="ex: H61M-S2P">
    </div>

    <div class="form-group">
      <label for="southbridge_komp">Chipset Southbridge :</label>
      <input type="southbridge_komp" class="form-control" id="southbridge_komp" placeholder="ex: Intel Ivy Bridge">
    </div>

    <div class="form-group">
      <label for="tiperam_komp">Tipe RAM :</label>
      <input type="tiperam_komp" class="form-control" id="tiperam_komp" placeholder="ex: DDR3">
    </div>

    <div class="form-group">
      <label for="kapasitas_komp">Kapasitas RAM (MB):</label>
      <input type="kapasitas_komp" class="form-control" id="kapasitas_komp" placeholder="ex: 2048 MB">
    </div>
    
    <div class="form-group">
      <label for="pc_komp">PC RAM :</label>
      <input type="pc_komp" class="form-control" id="pc_komp" placeholder="ex: PC3-10700">
    </div>

    <div class="form-group">
      <label for="macaddress_komp">MAC Address :</label>
      <input type="macaddress_komp" class="form-control" id="macaddress_komp" placeholder="ex: 90-2B-34-7F-57-5C">
    </div>

   <div class="form-group">
     <label for="tahunbeli_komp">Tahun Pembelian:</label>
     <select class="form-control" id="tahunbeli_komp">
       <option>2016</option>
       <option>2015</option>
       <option>2014</option>
       <option>2013</option>
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
</div>
<br>
<div class="container">
  <button type="submit" class="btn btn-primary active btn-md col-sm-2">Insert</button>
  <button type="submit" class="btn btn-primary disabled btn-md col-sm-offset-1 col-sm-2">Update</button>
</div>
  <br> <br>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Barang</th>
        <th>Lokasi Komputer</th>
        <th>Merk Processor</th>
        <th>Kecepatan Processor(GHz)</th>
        <th>Socket Processor</th>
        <th>Merk Motherboad</th>
        <th>Model Motherboard</th>
        <th>Chipset NorthBridge</th>
        <th>Chipset SouthBridge</th>
        <th>Tipe RAM</th>
        <th>Kapasitas RAM</th>
        <th>PC RAM</th>
        <th>MAC Address</th>
        <th>Tahun Pembelian</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>001</td>
        <td>Labkom 1</td>
        <td>Lenovo</td>
        <td>3.2</td>
        <td>LGA 1155</td>
        <td>Lenovo</td>
        <td>H61M-S2P</td>
        <td>H61M-S2P</td>
        <td>Intel Ivy Bridge</td>
        <td>DDR3</td>
        <td>2048</td>
        <td>PC3-10700</td>
        <td>90-2B-34-7F-57-5C</td>
        <td>2012</td>
      </tr>
     
    </tbody>
  </table>
</div>
</body>