<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eticketing extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
   
  }

  public function index()
  {
    # code...
    $this->load->view('header');
    $this->load->view('eticketing/content');
    $this->load->view('footer');

  }


 


}
