<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_Komputer extends CI_Model {
	
	public function __construct() {
		//Call the CI_Model constructor
		parent::__construct();
	}
	
	public function insertkomp($id,$kondisi, $lokasi_komp, $merk, $kecepatan, $socket, $merkmotherboard, $modelmotherboard, $nortbridge, $southbridge, $tiperam, $kapasitas, $pc, $macaddress, $tahunbeli){
		$data = array(
		  'id' => $id,
		  'kode_barang' => $kode,
		  'lokasi_komp' => $lokasi_komp,
		  'merk_processor' => $merk,
		  'kecepatan_processor' => $kecepatan,
		  'socket_processor' => $socket,
		  'merkmotherboard_komp' => $merkmotherboard,
		  'modelmotherboard_komp' => $modelmotherboard,
		  'northbridge_komp' => $northbridge,
		  'southbridge_komp'=> $southbridge,
		  'tiperam_komp'=> $tiperam,
		  'kapasitas_komp'=> $kapasitas,
		  'pc_komp'=> $pc,
		  'macaddress_komp'=> $macaddress,
		  'tahunbeli_komp'=> $tahunbeli,
		);
		
		$this->db->insert('komputer',$data);
		}
		
	public function gettablekomputer(){
		return $this->db->get('komputer');
		}
	
	
}