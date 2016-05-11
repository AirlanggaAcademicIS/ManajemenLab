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
	  
	  $kategori= $this -> input->post('kategori');
	  $kode_barang= $this -> input->post('kode_barang');
	  $nama_barang= $this -> input->post('nama_barang');
	  $kondisi_barang= $this -> input->post('kondisi_barang');
	  $lokasibarang_awal= $this -> input->post('lokasibarang_awal');
	  $lokasibarang_akhir= $this -> input->post('lokasibarang_akhir');
	  $deskripsi_barang= $this -> input->post('deskripsi_barang');
	  
	  $this->load->model('Manage_lab');
	  $this->Manage_lab->insertmanagelab($kategori, $kode_barang, $nama_barang, $kondisi_barang, $lokasibarang_awal, $lokasibarang_akhir, $deskripsibarang);
  }
 


}
