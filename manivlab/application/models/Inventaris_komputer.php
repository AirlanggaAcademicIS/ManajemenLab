<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_Komputer extends CI_Model {
	
	public function __construct() {
		//Call the CI_Model constructor
		parent::__construct();
	}
	
public function insertkomp($kode, $nama_barang, $lokasi_komp, $merk, $kecepatan, $socket, $merkmotherboard, $modelmotherboard, $northbridge, $southbridge, $tiperam, $kapasitas, $pc, $macaddress, $tahunbeli, $tanggal_transaksi){
	
		$data = array(
		
		  'kode_barang' => $kode,
          'nama_barang' => $nama_barang,
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
		  'tanggal_transaksi'=> $tanggal_transaksi,
		  
		  );
		
		
		$this->db->insert('komputer',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
		}
		
	public function gettablekomputer(){
		return $this->db->get('komputer');
		}
	
	
}