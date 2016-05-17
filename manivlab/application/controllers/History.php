<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   
  }

 
 public function index()
	{
		 # code...
 /*   $this->load->model('model');
	$tabel=$this->model->Getpppk();
	$a = array ('table'=> $tabel);
	 $tabel2=$this->model->GetIden();
	$aa = array ('table2'=> $tabel2); */
	
		$this->load->model('model');
		$data['table']=$this->model->Getpppk();
		$data['table2']=$this->model->GetIden();
		
		$this->load->model('M_nonkomp');
		$data['nonkomp']=$this->M_nonkomp->gettablenonkomp();
		

		$this->load->model('Manage_lab');
		$data['manajemenbarang']=$this->Manage_lab->gettablemanajemen_barang();
		

	$this->load->view('header');
    $this->load->view("history/content",$data);
    $this->load->view('footer');
	
	} 
	function viewkomputer(){
		$this->load->model('model');
		$data['table']=$this->model->Getpppk();
		$data['table2']=$this->model->GetIden();
		
		$this->load->model('inventaris_komputer');
		$data['komp']=$this->inventaris_komputer->gettablekomputer();
		

		$this->load->model('Manage_lab');
		$data['manajemenbarang']=$this->Manage_lab->gettablemanajemen_barang();
		

	$this->load->view('header');
    $this->load->view("history/viewkomputer",$data);
    $this->load->view('footer');
	}
	
	function viewhistorylaporan(){
	$this->load->view('header');
    $this->load->view("history/viewhistorylaporan");
    $this->load->view('footer');
	}
	
	// Mengambil laporan history
	function getLaporanItemByTgl(){
		$start_date = $this->input->post("start_date");
		$end_date = $this->input->post("end_date");
		$start_date = date('Y-m-d',strtotime($start_date));
		$end_date = date('Y-m-d',strtotime($end_date));
		$kategori = $this->input->post("kategori");
		$this->load->model('model');
		$result['item_pppk'] = $this->model->GetpppkbyTanggal($start_date,$end_date,$kategori);
		$result['iden'] = $this->model->GetIdenbyTanggal($start_date,$end_date,$kategori);
		
		$this->load->model('inventaris_komputer');
		$result['komputer'] = $this->inventaris_komputer->GetIdbyTanggal($start_date,$end_date,$kategori);
		
		$this->load->model('Manage_lab');
		$result['manajemen'] = $this->Manage_lab->GetManajemenLabbyTanggal($start_date,$end_date,$kategori); 
		// print_r($result['item_masuk']);
		// print_r($result['item_keluar']);
		echo json_encode($result);
	}
	
/*	public function histononkomp()
	{ 
	
	$this->load->view("history/content",$data);



	$this->load->view('header');
    
    $this->load->view('footer');
	}*/
}