<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komputer extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    # code...
   
	
	$this->load->model('Inventaris_komputer');
	$data['komputer']=$this->Inventaris_komputer->gettablekomputer();
	$this->load->view('header');
	$this->load->view('inventaris/komputer.php',$data);
    $this->load->view('footer');
  }
  
  public function inventaris(){
	  $this->load->view("inventaris/komputer.php");
	  }
	  
  public function insertkomp (){
	  $kode = $this -> input->post('kode_barangkomp');
      $nama_barang = $this -> input->post('nama_barangkomp');
	  $lokasi_komp= $this -> input->post('lokasi_komp');
	  $merk= $this -> input->post('merk_processor');
	  $kecepatan= $this -> input->post('kecepatan_processor');
	  $socket= $this -> input->post('socket_processor');
	  $merkmotherboard= $this -> input->post('merkmotherboard_komp');
	  $modelmotherboard= $this -> input->post('modelmotherboard_komp');
	  $northbridge= $this -> input->post('northbridge_komp');
	  $southbridge= $this -> input->post('southbridge_komp');
	  $tiperam= $this -> input->post('tiperam_komp');
	  $kapasitas= $this -> input->post('kapasitas_komp');
	  $pc= $this -> input->post('pc_komp');
	  $macaddress= $this -> input->post('macaddress_komp');
	  $tahunbeli_komp= $this -> input->post('tahunbeli_komp');
	  $tanggal_transaksi= $this -> input->post('tanggal_transaksikomp');
	  
	  $this->load->model('Inventaris_komputer');
	  $temp=$this->Inventaris_komputer->insertkomp($kode,$nama_barang,$lokasi_komp,$merk,$kecepatan,$socket,$merkmotherboard,$modelmotherboard,$northbridge,$southbridge,$tiperam,$kapasitas,$pc,$macaddress,$tahunbeli_komp, $tanggal_transaksi );
	  
	  if($temp){
		  redirect ('komputer','refresh');
	  }
	  else{
	  	  redirect ('komputer','refresh');
	  }
  }
  

	public function getDataKompById(){
		$id = $this->input->post('id');
		$this->load->model('inventaris_komputer');
		
		$info = $this->inventaris_komputer->gettablekomputerbyid($id);
		echo json_encode($info);
	}
	
	
	function searchID(){
$search=$this->input->get('search');
$beda['search']=$this->inventaris_komputer>searchID($search);
$this->load->view('komputer',$beda);
}

}
