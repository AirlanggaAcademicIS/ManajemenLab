<?php

class M_nonkomp extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function insertnonkomp($param1,$param2,$param3,$param4,$param5,$param6,$param7) {
        $data = array(
        'id_nonkomp' => null,
        'nama_nonkomp'=>$param1,
        'tanggal_transaksi'=>$param2,
        'Jenis_nonkomp'=>$param3,
        'merk_nonkomp'=>$param4,
        'jumlah_nonkomp'=>$param5,
        'lokasi_nonkomp'=>$param6,
        'keterangan_nonkomp'=>$param7,
        );

     $this->db->insert('nonkomputer',$data);
 
    }
    
    public function gettablenonkomp(){
        
    return $this->db->get('nonkomputer');
    
    }
    public function getdata($id){
        $query = $this->db->get_where('nonkomputer',array('id_nonkomp'=>$id));
        return $query->result();
    }
    public function updatedata($id,$namabarang,$tanggal_transaksi,$jenisbarang,$merkbarang,$jumlahbarang,$lokasibarang,$keteranganbarang){
        $this->db->trans_start();
        $data = array ('nama_nonkomp'=>$namabarang,
                      'tanggal_transaksi'=>$tanggal_transaksi,
                      'Jenis_nonkomp'=>$jenisbarang,
                      'merk_nonkomp'=>$merkbarang,
                      'jumlah_nonkomp'=>$jumlahbarang,
                      'lokasi_nonkomp'=>$lokasibarang,
                      'keterangan_nonkomp'=>$keteranganbarang);
        $this->db->where('id_nonkomp',$id);
        $this->db->update("nonkomputer",$data);
        $this->db->trans_complete();
        if($this->db->affected_rows()>1){
            return true;
        }
        else{
            return false;
        }
    }

    public function searchID($search){
    $search=$this->db->query("select * from table_nonkomp where id_nonkomp like '%$search%'  ");
    return $search->result();
}
		public function GetnonkompbyTanggal($start_date,$end_date,$kategori) {
		$this->db->where('tanggal_transaksinonkomp >=',$start_date);
		$this->db->where('tanggal_transaksinonkomp <=',$end_date);
        $this->db->from('nonkomputer');
        $this->db->order_by("tanggal_transaksinonkomp", "desc");
		$query = $this->db->get();
        // echo $this->db->last_query();

        return $query->result();
	}
	
	public function gettablekompjoinmanajemen() {
		 $query = $this->db->query('SELECT * FROM nonkomputer
LEFT JOIN manajemen_barang
on nonkomputer.id_nonkomp = manajemen_barang.kode_barang');
		return $query;
	}

}

