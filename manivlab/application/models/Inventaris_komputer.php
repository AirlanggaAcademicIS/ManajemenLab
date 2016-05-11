<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_Komputer extends CI_Model {
	
	public function __construct() {
		//Call the CI_Model constructor
		parent::__construct();
	}
	
	public function insertkomp($param1, $param2, $param3, $param4, $param5, $param6, $param7, $param8, $param9, $param10, $param11, $param12, $param13){
		$data = array(
		  'id_komputer' => "test",
		  'lokasi_komp' => "test",
		  'merk_processor' => $param2,
		  'kecepatan_processor' => $param3,
		  'socket_processor' => $param4,
		  'merkmotherboard_komp' => $param5,
		  'modelmotherboard_komp' => $param6,
		  'northbridge_komp' => $param7,
		  'southbridge_komp'=> $param8,
		  'tiperam_komp'=> $param9,
		  'kapasitas_komp'=> $param10,
		  'pc_komp'=> $param11,
		  'macaddress_komp'=> $param12,
		  'tahunbeli_komp'=> $param13,
		);
		
		$this->db->insert('komputer',$data);
		}
		
	public function gettablekomputer(){
		return $this->db->get('komputer');
		}
	
	
}