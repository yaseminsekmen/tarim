<?php

class Database_Model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		
	}
	public function login($tablo,$Admin_adi,$Admin_sifre)
	{
		$this->db->select('*');
        $this->db->from($tablo);
        $this->db->where('admin_adi', $Admin_adi);
        $this->db->where('admin_sifre', $Admin_sifre);
        $this->db->limit(1);
         
        
        $query = $this->db->get(); //Verileri getir
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
	}

		public function insert_data($table,$data){
		$this->db->insert($table,$data);
		return true;
		
	}
	
		public function update_data($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
		return true;
		
	}


	

	
}
?>