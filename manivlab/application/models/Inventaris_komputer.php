<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_Komputer extends CI_Model {
	
	public function __construct() {
		//Call the CI_Model constructor
		parent::__construct();
	}
	
public function insertkomp($kode, $nama_barang, $lokasi_komp, $merk, $kecepatan, $socket, $merkmotherboard, $modelmotherboard, $northbridge, $southbridge, $tiperam, $kapasitas, $pc, $macaddress, $tahunbeli, $tanggal_transaksi){
	    
		$this->db->where('kode_barangkomp',$kode);
		$this->db->where('nama_barangkomp',$nama_barang);
		$this->db->where('macaddress_komp',$macaddress);
		$query  = $this->db->get("komputer");
		if($query->result()){
		return false;
		}
		else{
		
		$data = array(
		
		  'kode_barangkomp' => $kode,
          'nama_barangkomp' => $nama_barang,
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
		  'tanggal_transaksikomp'=> $tanggal_transaksi,
		  
		  );
		
		
		$this->db->insert('komputer',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
		}
		}
		
	public function gettablekomputer(){
		return $this->db->get('komputer');
		 
<<<<<<< Updated upstream
=======
		}
<<<<<<< HEAD
	public function gettablekomputerbyid($id){
		$query =  $this->db->get_where('komputer',array('id'=>$id));
		return $query->result();
>>>>>>> Stashed changes
		}
			
	public function GetIdbyTanggal($start_date,$kategori) {
 		$this->db->where('tanggal_transaksi >=',$start_date);
        $this->db->from('komputer');
        $this->db->order_by("tanggal", "desc");
=======
		
	public function GetIdbyTanggal($start_date, $end_date,$kategori) {
 		$this->db->where('tanggal_transaksikomp >=',$start_date);
		$this->db->where('tanggal_transaksikomp <=',$end_date);
        $this->db->from('komputer');
        $this->db->order_by("tanggal_transaksikomp", "desc");
<<<<<<< Updated upstream
=======
>>>>>>> origin/master
>>>>>>> Stashed changes
  $query = $this->db->get();
        // echo $this->db->last_query();

        return $query->result();
<<<<<<< HEAD
	}
=======
 }
 public function gettablekompjoinmanajemen() {
		 $query = $this->db->query('SELECT * FROM komputer
LEFT JOIN manajemen_barang
on komputer.kode_barangkomp = manajemen_barang.kode_barang');
		return $query;
	}
	
<<<<<<< Updated upstream
=======
>>>>>>> origin/master
>>>>>>> Stashed changes
}