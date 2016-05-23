<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class gb extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
    # code...
    $this->load->view('header');
    $this->load->view('home/content');
    $this->load->view('footer');

  }
  
  

}
