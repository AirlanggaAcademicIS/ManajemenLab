<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public function Getpppk($where= "") {
		$data = $this->db->query('select * from ticket_pppk '.$where);
		return $data;
	}

	public function Geticketagian($where= "") {
		$data = $this->db->query('select * from ticket_labkom '.$where);
		return $data;
	}	

	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}

	public function Update($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}

	function detail(){		
		$query= "SELECT * FROM ticket_labkom";
		return $this->db->query($query);
	}

	public function Hapus($table,$where){
		return $this->db->delete($table,$where);
	}

	function UpdatePppk($data){
        $this->db->where('no',$data['no']);
        $this->db->update('ticket_pppk',$data);
    }

    function GetUser($where = ''){
		return $this->db->query("select * from ticket_login $where;");
	}
	/*
	//USer
	public function ajaxlabkom($params = array())
	{

		$this->db->select('id_labkom, labkom');
		$this->db->from('ticket_labkom');
		$ret = $this->db->get();
		return $ret->result_array();
	}

	public function ajaxobject($params = array())
	{
		if (isset($params['labkom_id'])) {
			$this->db->where('labkom_id', $params['labkom_id']);
		}

		$this->db->select('id_object, labkom_id, object');
		$this->db->from('ticket_object');
		$ret = $this->db->get();
		return $ret->result_array();
	}
	*/

	public function ajaxlabkom($params = array())
	{

		$this->db->select('id_labkom, labkom');
		$this->db->from('ticket_labkom');
		$ret = $this->db->get();
		return $ret->result_array();
	}

	public function ajaxobject($params)
	{
		// if (isset($params['labkom'])) {
		// 	$this->db->where('labkom', $params['labkom']);
		// }


		$this->db->select('id_object, labkom_id, object, ticket_labkom.labkom as labkom');
		$this->db->where('labkom', $params);
		$this->db->from('ticket_object');
		$this->db->join('ticket_labkom', 'ticket_labkom.id_labkom = ticket_object.labkom_id');
		$ret = $this->db->get();

		echo $this->db->last_query();
		return $ret->result_array();
	}

	function idppppk(){
		$q = $this->db->query("select MAX(RIGHT(no,3)) as kd_max from ticket_pppk");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "KD-".$kd;
	}
	// Batas User

	public function GetIden($where= "") {
		$data = $this->db->query('select * from ticket_iden '.$where);
		return $data;
	}
	
	public function GetpppkbyTanggal($start_date,$end_date,$kategori) {
		$this->db->where('tanggal >=',$start_date);
		$this->db->where('tanggal <=',$end_date);
        $this->db->from('ticket_pppk');
        $this->db->order_by("tanggal", "desc");
		$query = $this->db->get();
        // echo $this->db->last_query();

        return $query->result();
	}
	public function GetIdenbyTanggal($start_date,$end_date,$kategori) {
		$this->db->where('tanggal >=',$start_date);
		$this->db->where('tanggal <=',$end_date);
        $this->db->from('ticket_iden');
        $this->db->order_by("tanggal", "desc");
		$query = $this->db->get();
        // echo $this->db->last_query();

        return $query->result();
	}


public function jointabelticket(){
	 $query = $this->db->query('SELECT ticket_pppk.no, ticket_pppk.dari, ticket_pppk.tanggal,ticket_pppk.labkom,ticket_pppk.object, ticket_pppk.kepada, ticket_pppk.alasan, ticket_iden.identifikasi, ticket_iden.tanggal_iden FROM ticket_pppk LEFT JOIN ticket_iden on ticket_pppk.no = ticket_iden.no');
		return $query;
}
}