<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loginpage extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    # code...
    $this->load->view('header');
    $this->load->view('login/content');

  }


 


}
