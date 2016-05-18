<?php

class M_nonkomp extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function insertnonkomp($param1, $param2,$param3,$param4,$param5,$param6) {
        $data = array(
        'id_nonkomp' => null,
        'nama_nonkomp'=>$param1,
        'Jenis_nonkomp'=>$param2,
        'merk_nonkomp'=>$param3,
        'jumlah_nonkomp'=>$param4,
        'lokasi_nonkomp'=>$param5,
        'keterangan_nonkomp'=>$param6,     
        );

     $this->db->insert('nonkomputer',$data);
 
    }
    
    public function gettablenonkomp(){
        
    return $this->db->get('nonkomputer');
    
    }
    
}
