<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_cek_login();
	}
	private function _cek_login()
	{
		if(!$this->session->userdata('admin')){            
			redirect(base_url().'home');
		}
	}

	public function index()
	{
		$data = array(
			'total_pk' => $this->model->Getpppk()->num_rows(),
			'total_id' => $this->model->GetIden()->num_rows(),
		);
		$this->load->view('admin/index', $data);
	}

	public function datapppk()
	{
		$data = array(
			'pppk' => $this->model->Getpppk('order by no desc')->result_array(),
			);
		$this->load->view('admin/datapppk', $data);
	}
	// Segala fungsi identifikasi
	function identifikasi($kode = 0){
		$row = $this->model->Getpppk("where no = '$kode'")->result_array();

		$data = array(
			'no' => $row[0]['no'],
			'dari' => $row[0]['dari'],
			'tanggal' => $row[0]['tanggal'],
			'alasan' => $row[0]['alasan'],
			);

		$this->load->view('admin/identifikasi', $data);
	}

	function ubahstatus($kode = 0){
		$row = $this->model->Getpppk("where no = '$kode'")->result_array();

		$data = array(
			'no' => $row[0]['no'],
			'dari' => $row[0]['dari'],
			'labkom' => $row[0]['labkom'],
			'object' => $row[0]['object'],
			'kepada' => $row[0]['kepada'],
			'tanggal' => $row[0]['tanggal'],
			'alasan' => $row[0]['alasan'],
			'status' => $row[0]['status'],
			);

		$this->load->view('admin/ubahstatus', $data);
	}

	function updatepppk(){

		$data = array(
			'no' => $this->input->post('no'),
			'dari' => $this->input->post('dari'),
			'labkom' => $this->input->post('labkom'),
			'object' => $this->input->post('object'),
			'kepada' => $this->input->post('kepada'),
			'tanggal' => $this->input->post('tanggal'),
			'alasan' => $this->input->post('alasan'),			
			'status' => $this->input->post('status'),
			);

		$res = $this->model->Updatepppk($data);
		if($res>=1){
			header('location:'.base_url().'admin/datapppk/3');
		}else{
			header('location:'.base_url().'admin/datapppk/0');
		}
	}

	function simpaniden(){
		
		$no = $_POST['no'];
		$dari = $_POST['dari'];
		$identifikasi = $_POST['identifikasi'];
		$tanggal = $_POST['tanggal'];

		$data = array(	
			'no'=> $no,
			'dari' => $dari,
			'identifikasi' => $identifikasi,
			'tanggal' => $tanggal,
			);

		$this->model->Simpan('ticket_iden', $data);

		redirect('admin/teridentifikasi');
	}
	function teridentifikasi()
	{
		$data = array(
			'identifikasi' => $this->model->GetIden('order by no desc')->result_array(),
			);
		$this->load->view('admin/iden', $data);
	}
	function printppk($kode = 0){
		 // load dompdf
		$this->load->helper('dompdf');
        //load content html
		$row = $this->model->GetIden("where no = '$kode'")->result_array();

		$data = array(
			'identifikasi' => $this->model->GetIden('order by tanggal asc')->result_array(),
		);
		$html = $this->load->view('admin/printpppk', $data, true);
        // create pdf using dompdf
		$filename = 'Large Table';
		$paper = 'A4';
		$orientation = 'potrait';
		pdf_create($html, $filename, $paper, $orientation);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */