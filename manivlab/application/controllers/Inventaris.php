<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   $this->load->model('m_nonkomp');
  }

  public function index()
  {
    # code...
    $getdb = $this->m_nonkomp->gettablenonkomp();
    $content = array(
    'table'=>$getdb
    );
    $this->load->view('header');
    $this->load->view('inventaris/content',$content);
    $this->load->view('footer');
      
      

  }
    public function insertnonkomp (){
        $namabarang = $this -> input ->post('namabarang');
        $tanggal_transaksi = $this -> input ->post ('tanggal_transaksi');
        $jenisbarang = $this -> input ->post('jenisbarang');
        $merkbarang = $this -> input ->post('merkbarang');
        $jumlahbarang = $this -> input ->post('jumlahbarang');
        $lokasibarang = $this -> input ->post('lokasibarang');
        $keteranganbarang = $this -> input ->post('keteranganbarang');
        
        
        $kirim = $this->m_nonkomp->insertnonkomp($namabarang,$tanggal_transaksi,$jenisbarang,$merkbarang,$jumlahbarang,$lokasibarang,$keteranganbarang);
        redirect(base_url().'inventaris'); 
    }
    public function getdatanonkomp(){
        $id = $this->input->post("id");
        $this->load->model("m_nonkomp");
        $result = $this->m_nonkomp->getdata($id);
        echo json_encode($result);
        
    }
    public function updatenonkomp(){
        $id = $this->input->post("id");
        $namabarang = $this -> input ->post('namabarang');
        $tanggal_transaksi = $this -> input ->post ('tanggal_transaksi');
        $jenisbarang = $this -> input ->post('jenisbarang');
        $merkbarang = $this -> input ->post('merkbarang');
        $jumlahbarang = $this -> input ->post('jumlahbarang');
        $lokasibarang = $this -> input ->post('lokasibarang');
        $keteranganbarang = $this -> input ->post('keteranganbarang');
        
        $this->load->model("m_nonkomp");
        $result = $this->m_nonkomp->updatedata($id,$namabarang,$tanggal_transaksi,$jenisbarang,$merkbarang,$jumlahbarang,$lokasibarang,$keteranganbarang);
        echo json_encode($result);
    }


}
