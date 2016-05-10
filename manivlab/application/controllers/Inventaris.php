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
        $jenisbarang = $this -> input ->post('jenisbarang');
        $merkbarang = $this -> input ->post('merkbarang');
        $jumlahbarang = $this -> input ->post('jumlahbarang');
        $lokasibarang = $this -> input ->post('lokasibarang');
        $keteranganbarang = $this -> input ->post('keteranganbarang');
        
        
        $kirim = $this->m_nonkomp->insertnonkomp($namabarang,$jenisbarang,$merkbarang,$jumlahbarang,$lokasibarang,$keteranganbarang);
        redirect(base_url().'inventaris');
        
        
    }
}
