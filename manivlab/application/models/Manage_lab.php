<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_lab extends CI_Model {
	
	public function __construct() {
		//Call the CI_Model constructor
		parent::__construct();
	}
	
	public function insertmanagelab($kode_barang, $nama_barang, $tanggal_transaksi, $kondisi_barang, $lokasibarang_awal, $lokasibarang_akhir, $Deskripsi){
		$data = array(
		'id' => "test",
		'kode_barang' => $kode_barang,
		'nama_barang' => $nama_barang,
		'tanggal_transaksi' => $tanggal_transaksi,
		'kondisi_barang' => $kondisi_barang,
		'lokasibarang_awal' => $lokasibarang_awal,
		'lokasibarang_akhir' => $lokasibarang_akhir,
		'Deskripsi' => $Deskripsi,
		);
		
		$this->db->insert('manajemen_barang',$data);
		if($this->db->affected_rows()>1){				
			$result =  "berhasil";
		}
		else{
			$result =  "gagal";
		}
		return $result;
	} 
	public function gettablemanajemen_barang(){
		return $this->db->get('manajemen_barang');
		}
		
	public function getKomputer(){
		$query =  $this->db->get('komputer');
		return $query->result();
		}	
		
	public function getKomputerByKodeBarang($kode_barang){
		//ambil kode barang dari tabel manajemen barang
		$this->db->where("kode_barang",$kode_barang);
        $this->db->from('manajemen_barang'); 
        return $query->result();
	}	
	
	//ambil kode barang dari tabel komputer
	//public function getKodeBarangMaster($kode_barang){
	//	$this->db->where("kode_barang",$kode_barang);
     //   $this->db->from('komputer'); 
     //   $query = $this->db->get();

    //    return $query->result();
	//}	
}