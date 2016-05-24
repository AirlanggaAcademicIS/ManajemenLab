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
	  $kode = $this -> input->post('kode_barang');
      $nama_barang = $this -> input->post('nama_barang');
	  $lokasi_komp= $this -> input->post('lokasi_komp');
	  $merk_processor= $this -> input->post('merk_processor');
	  $kecepatan_processor= $this -> input->post('kecepatan_processor');
	  $socket_processor= $this -> input->post('socket_processor');
	  $merkmotherboard_komp= $this -> input->post('merkmotherboard_komp');
	  $modelmotherboard_komp= $this -> input->post('modelmotherboard_komp');
	  $northbridge_komp= $this -> input->post('northbridge_komp');
	  $southbridge_komp= $this -> input->post('southbridge_komp');
	  $tiperam_komp= $this -> input->post('tiperam_komp');
	  $kapasitas_komp= $this -> input->post('kapasitas_komp');
	  $pc_komp= $this -> input->post('pc_komp');
	  $macaddress_komp= $this -> input->post('macaddress_komp');
	  $tahunbeli_komp= $this -> input->post('tahunbeli_komp');
	  $tanggal_transaksi= $this -> input->post('tanggal_transaksi');
	  
	  $this->load->model('Inventaris_komputer');
	  $temp=$this->Inventaris_komputer->insertkomp($kode,$nama_barang,$lokasi_komp,$merk_processor,$kecepatan_processor,$socket_processor,$merkmotherboard_komp,$modelmotherboard_komp,$northbridge_komp,$southbridge_komp,$tiperam_komp,$kapasitas_komp,$pc_komp,$macaddress_komp,$tahunbeli_komp, $tanggal_transaksi );
	  
	  if($temp){
		  redirect ('komputer','refresh');
	  }
	  else{
	  	  redirect ('komputer','refresh');
	  }
  }
  
  
  


}
