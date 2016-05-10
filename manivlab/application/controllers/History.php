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
    $this->load->model('model');
	$tabel=$this->model->Getpppk();
	$a = array (
		'table'=> $tabel
	);
	
	$this->load->view('header');
    $this->load->view('history/content',$a);
    $this->load->view('footer');
	
	
	
	
	}

	

 


}