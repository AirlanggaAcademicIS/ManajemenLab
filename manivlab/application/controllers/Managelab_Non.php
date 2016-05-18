<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Managelab extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    # code...
    $this->load->view('header');
    $this->load->view('managelab/managekomputer.php');
    $this->load->view('footer');

  }

 public function managelab(){
	  $this->load->view("managelab/managekomputer.php");
	  }
  public function insertmanagelab(){
	  $kode_barang= $this -> input->post('kode_barang');
	  $nama_barang= $this -> input->post('nama_barang');
	  $tanggal_transaksi= $this -> input->post('tanggal_transaksi');
	  $kondisi_barang= $this -> input->post('kondisi_barang');
	  $lokasibarang_awal= $this -> input->post('lokasibarang_awal');
	  $lokasibarang_akhir= $this -> input->post('lokasibarang_akhir');
	  $Deskripsi= $this -> input->post('Deskripsi');
	  
	  $this->load->model('Manage_lab');
	  $this->Manage_lab->insertmanagelab($kode_barang, $nama_barang, $tanggal_transaksi, $kondisi_barang, $lokasibarang_awal, $lokasibarang_akhir, $Deskripsi);
  }
   public function getKomputer(){
   $this->load->model("Manage_lab");
   $info = $this->Manage_lab->getKomputer();
   echo json_encode($info);
   }
   
   public function getKomputerByKodeBarang(){
	$kode_barang= $this -> input->post('kode_barang');   
   $this->load->model("Manage_lab");
   $info = $this->Manage_lab->getKomputerByKodeBarang($kode_barang);
   echo json_encode($info);
   }
 


}
