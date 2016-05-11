<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_lab extends CI_Model {
	
	public function __construct() {
		//Call the CI_Model constructor
		parent::__construct();
	}
	
	public function insertmanagelab($kategori, $kode_barang, $nama_barang, $kondisi_barang, $lokasibarang_awal, $lokasibarang_akhir, $deskripsibarang){
		$data = array(
		'id' => "test",
		'kategori' => $kategori,
		'kode_barang' => $kode_barang,
		'nama_barang' => $nama_barang,
		'kondisi_barang' => $kondisi_barang,
		'lokasibarang_awal' => $lokasibarang_awal,
		'lokasibarang_akhir' => $lokasibarang_akhir,
		'deskripsi_barang' => $deskripsibarang,
		);
		
		$this->db->insert('manajemen_barang',$data);
	} 
	public function gettablemanajemen_barang(){
		return $this->db->get('manajemen_barang');
		}
}