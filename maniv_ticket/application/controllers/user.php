<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->_cek_login();
	}
	private function _cek_login()
	{
		if(!$this->session->userdata('user')){            
            redirect(base_url().'home');
        }
	}

	public function index()
	{
		$this->load->view('user/index');
	}

	/*Login  */
	function proses(){		
		if($_POST){
			$user = addslashes($_POST['user']);
			$pass = addslashes($_POST['pass']);			
			$temp = $this->model->GetUser("where user = '$user' and pass = '$pass'")->result_array();
			if($temp != NULL){
				$data = array(
					'user' => $temp[0]['user'],
					'pass' => $temp[0]['pass']
				);
				$this->session->set_userdata('loging',$data);
				session_start();
				$_SESSION['kcfinder_mati'] = false;				
				header('location:'.base_url().'user/');
			}else{
				header('location:'.base_url().'user/login/0');
			}
		}else{
			echo "salah pak";
		}
	}
	/*Batas login */

	function labkom($pes = -1){
		
		$data = array(
			'session' => $this->session->userdata('login'),
			'status' => 'baru',
			'labkom' => '',
			'id_labkom' => '',
			'pesan' => $pes,
			'label' => $this->model->Geticketagian("order by id_labkom desc")->result_array(),
			'tampil' => $this->model->detail()
			);

		$this->load->view('user/labkom', $data);
	}

	function editicketagian($kode = 0){
		
		
		$tampung = $this->model->Geticketagian("where id_labkom = '$kode'")->result_array();
		$data = array(
			'status' => 'lama',
			'labkom' => $tampung[0]['labkom'],
			'id_labkom' => $tampung[0]['id_labkom'],
			'pesan' => "",
			'label' => $this->model->Geticketagian("where id_labkom != '$kode' order by id_labkom desc")->result_array()
			);
		$this->load->view('user/labkom', $data);
	}

	function simpanlabkom(){
		
		if($_POST){
			$status = $_POST['status'];
			$id_labkom = $_POST['id_labkom'];
			$labkom = $_POST['labkom'];
			if($status == "baru"){
				$data = array(
					'id_labkom' => $id_labkom,
					'labkom' => $labkom
					);
				$result = $this->model->Simpan('ticket_labkom', $data);
				if($result == 1){
					header('location:'.base_url().'user/labkom/2');
				}else{
					header('location:'.base_url().'user/labkom/0');
				}
			}else{
				$data = array(
					'labkom' => $labkom
					);
				$result = $this->model->Update('ticket_labkom', $data, array('id_labkom' => $id_labkom));
				if($result == 1){
					header('location:'.base_url().'user/labkom/3');
				}else{
					header('location:'.base_url().'user/labkom/0');
				}
			}
		}else{
			echo('Salah!!!');
		}
	}

	function hapuslabkom($kode = 1){
		
		$result = $this->model->Hapus('ticket_labkom', array('id_labkom' => $kode));
		if($result == 1){
			header('location:'.base_url().'user/labkom/1');
		}else{
			header('location:'.base_url().'user/labkom/0');
		}
	}

	public function pppk()
	{
		$data = array(
			'labkoms' => $this->model->ajaxlabkom(),
			'labkom' => $this->model->Geticketagian()->result_array(),
			'id_pppk' => $this->model->idppppk(),
		);
		$this->load->view('user/pppk', $data);
	}

	public function getobject()
	{
		$labkom_id = $this->input->post('key');
		// print_r($labkom_id);exit();
		$kab = $this->model->ajaxobject($labkom_id);

		echo '<select name=""';
		echo '<option value="">--Pilih object--</option>';
		foreach ($kab as $row)
		{
			echo '<option value="'.$row['object'].'">'.$row['object'].'</option>';
		}
		echo '</select>';
	}

	public function datapppk()
	{
		$data = array(
			'pppk' => $this->model->Getpppk('order by no desc')->result_array(),
		);
		$this->load->view('user/datapppk', $data);
	}

	public function teridentifikasi()
	{
		$data = array(
			'identifikasi' => $this->model->GetIden('order by no desc')->result_array(),
		);
		$this->load->view('user/identifikasi', $data);
	}

	function simpanpppk(){
		
		$no = $_POST['no'];
		$dari = $_POST['dari'];
		$labkom = $_POST['labkom'];
		$object = $_POST['object'];		
		$kepada = $_POST['kepada'];
		$alasan = $_POST['alasan'];
		$tanggal = $_POST['tanggal'];

		$data = array(	
			'no'=> $no,
			'dari' => $dari,
			'labkom' => $labkom,
			'object' => $object,
			'kepada' => $kepada,
			'alasan' => $alasan,
			'tanggal' => $tanggal,
			);

		$this->model->Simpan('ticket_pppk', $data);

		redirect('user/datapppk');
	}

	function editpppk($kode = 0){
		
		$data_rum = $this->model->Getpppk("where no = '$kode'")->result_array();

		$data = array(
			'session' => $this->session->userdata('login'),
			'no' => $data_rum[0]['no'],
			'dari' => $data_rum[0]['dari'],
			'labkom' => $this->model->Geticketagian()->result_array(),
			'tanggal' => $data_rum[0]['tanggal'],
			'kepada' => $data_rum[0]['kepada'],
			'alasan' => $data_rum[0]['alasan'],
			);
			
		$this->load->view('user/editpppk', $data);
	}

	function updatepppk(){
		

		$data = array(
			'no' => $this->input->post('no'),
			'judul' => $this->input->post('judul'),
			'labkom' => $this->input->post('labkom'),
			'tanggal' => $this->input->post('tanggal'),			
			        
			);

		$res = $this->model->Updatepppk($data);
		if($res>=1){
			header('location:'.base_url().'user/datapppk/3');
		}else{
			header('location:'.base_url().'user/datapppk/0');
		}
	}

	function hapuspppk($kode = 0){
		
		$this->model->Hapus('ticket_pppk',array('no' => $kode));
		$result = $this->model->Hapus('ticket_pppk',array('no' => $kode));
		if($result == 1){
			header('location:'.base_url().'user/datapppk');
		}else{
			header('location:'.base_url().'user/datapppk/0');
		}
	}

	public function update(){
		

		$data = array(
			'id_set' => $this->input->post('id_set'),
			'tentang' => $this->input->post('tentang'),
			'cara' => $this->input->post('cara'),	        
			);

		$res = $this->model->UpdateSet($data);
		if($res>=1){
			header('location:'.base_url().'user/tentang/3');
		}else{
			header('location:'.base_url().'user/tentang/1');
		}
	}
	public function updatepes(){
		

		$data = array(
			'id_set' => $this->input->post('id_set'),
			'tentang' => $this->input->post('tentang'),
			'cara' => $this->input->post('cara'),	        
			);

		$res = $this->model->UpdateSet($data);
		if($res>=1){
			header('location:'.base_url().'user/carapesan/0');
		}else{
			header('location:'.base_url().'user/carapesan/1');
		}
	}
}
