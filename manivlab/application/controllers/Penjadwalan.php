<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjadwalan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    # code...
    $this->load->view('header');
    $this->load->view('penjadwalan/content');
    $this->load->view('footer');

  }


 


}
