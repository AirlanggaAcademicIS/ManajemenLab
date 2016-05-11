<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'pppk' => $this->model->Getpppk('order by no desc')->result_array(),
			'identifikasi' => $this->model->GetIden('order by no desc')->result_array(),
		);
		$this->load->view('front/alldata', $data);
	}
}

/* End of file  */
/* Location: ./application/controllers/ */