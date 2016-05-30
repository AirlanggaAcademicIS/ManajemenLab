<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Laporan History Manivlab</title>
  
  </head>
    <script src='../public/jquery.js'></script>
	  <link href='../public/css/datatables.css' rel='stylesheet' type='text/css'>
    <link href='../public/css/dataTables.bootstrap.css' rel='stylesheet' type='text/css'>
    <link href='../public/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    
    <script src='../public/jquery.dataTables.min.js'></script>

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
             
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">History</a>
                <div class="dropdown-menu">
                     <a class="dropdown-item" href="<?php echo base_url();?>/history">Non-Komputer</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>/history/viewkomputer">Komputer</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>/history/viewhistorylaporan">Laporan</a>
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
      <h1> LAPORAN</h1></center>
    
  </div>
  <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Laporan Transaksi</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content" style=" background: #D6D6D6 !important;">
						<form class="form-horizontal">
							<fieldset>
							  <div class="control-group">
								<label class="control-label">Pilih Kategori Pencarian</label><br/>
								<div class="controls" style="float:right; margin-right:39%">
								  <label class="radio">
									
									<input  type="date" class="input datepicker" id="tanggal" name="tanggal" value="<?php echo date('d-m-Y')?>"> s/d
									<input  type="date" class="input datepicker" id="end_date" name="end_date" value="<?php echo date('d-m-Y')?>">
									  
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio" style="margin-top:20px"><!-- <div class="control-group"> -->
										<!-- <label class="control-label" for="selectError">Pilih Kategori Barang</label> -->
										<!-- <div class="controls"> -->
									<select id="selectKategori" name="selectKategori" data-rel="chosen" style="float:left">
										 
								      <option value="keluhan">keluhan</option>
								      <option value="identifikasi_keluhan">identifikasi keluhan</option>
								      <option value="item_masuk">barang komputer masuk</option>
                                      <option value="item_keluar">barang dipindah</option>
                                      <option value="item_masuk_nonkomputer">barang non-komputer masuk</option> 		
		
								    </select>
										<!-- </div> -->
									<!-- </div> -->
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio" style="margin-top:20px"><!-- <div class="control-group"> --><br>
										<!-- </div> -->
									<!-- </div> -->
								  </label>
								  <div style="clear:both"></div>
								  <button id="CariRekap" type="button" style="margin: 45px;" class="btn btn-info">Cari Rekap</button>
								</div>
							  </div>
							</fieldset>
						</form>
					</div>
				</div><!--/span-->

			</div><!--/row-->
            
            <div class="row-fluid sortable table-laporan1" style="display:none;">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Keluhan Masuk</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						 <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>NO</th>
                                        <th>KODE</th>
                                        <th>DARI</th>
                                        <th>TGL KELUHAN</th>
                                        <th>LABKOM</th>
                                        <th>SUBJECT</th>
                                        <th>ALASAN</th>
                                        
                                    </tr>
                                </thead>
						  <tbody id="example1">
						  	<!-- Pengambilan item list dari database -->
		                     
		                      <!-- End Of Pengambilan item list -->
						  </tbody>
						  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<div class="row-fluid sortable table-laporan2" style="display:none;">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Identifikasi Keluhan</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<table id="tabel_identifikasi_keluhan" class="table table-striped table-bordered" >
						  <thead>
							  	<tr>
								  <th>NO</th>
                                        <th>DARI</th>
                                         <th>KODE</th>
                                        <th>TANGGAL</th>
                                        <th>IDENTIFIKASI</th>
								</tr>
						  </thead>   
						  <tbody id="tabel_identifikasi_keluhan1">
						  	<!-- Pengambilan item list dari database -->
		                     
		                      <!-- End Of Pengambilan item list -->
						  </tbody>
						  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

<div class="row-fluid sortable table-laporan3" style="display:none;">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Barang Masuk</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<table id="tabel_item_masuk" class="table table-striped table-bordered" >
						  <thead>
							  	<tr>
								 		 <th>NO</th>
                                        <th>NAMA BARANG</th>
                                        <th>MERK</th>
                                        
                                        <th>TANGGAL TRANSAKSI</th>
								</tr>
						  </thead>   
						  <tbody id="tbody_item_masuk1">
						  	<!-- Pengambilan item list dari database -->
		                     
		                      <!-- End Of Pengambilan item list -->
						  </tbody>
						  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			<div class="row-fluid sortable table-laporan4" style="display:none;">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Barang Keluar</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<table id="tabel_item_keluar" class="table table-striped table-bordered">
						  <thead>
							  <tr>
								 		<th>NO</th>
                                        <th>KODE BARANG</th>
                                        <th>NAMA BARANG</th>
                                        <th>LOKASI AWAL</th>
                                        <th>LOKASI AKHIR</th>
                                        <th>TANGGAL TRANSAKSI</th>
							  </tr>
						  </thead>   
						  <tbody id="tbody_item_keluar2">
						  	<!-- Pengambilan item list dari database -->
		                      
		                      <!-- End Of Pengambilan item list -->
						  </tbody>
						  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
            
			<div class="row-fluid sortable table-laporan5" style="display:none;">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>History Barang Masuk Non-Komputer</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<table id="tabel_item_masuk_nonkomputer" class="table table-striped table-bordered">
						  <thead>
							  <tr>
								 		<th>NO</th>
                                        <th>KODE BARANG</th>
                                        <th>NAMA BARANG</th>
                                        <th>JENIS</th>
                                        <th>JUMLAH</th>
                                        <th>TANGGAL TRANSAKSI</th>
							  </tr>
						  </thead>   
						  <tbody id="tabel_item_masuk_nonkomputer2">
						  	<!-- Pengambilan item list dari database -->
		                      
		                      <!-- End Of Pengambilan item list -->
						  </tbody>
						  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
            
			<script src="../public/laporan.js"></script>	
	<div style="display:none" id="baseurl"><?php echo base_url() ?></div>
    		
  
  </body>