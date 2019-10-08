<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hizmetlerimiz extends CI_Controller {

	 public function __construct()
        {
                   parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
        }
 
	
	public function index()
	{

		$query=$this->db->query("SELECT * FROM hizmetlerimiz");
		$data["hizmet"]=$query->result();

		$query=$this->db->query("SELECT * FROM bayilik");
		$data["bayilik"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();
		$data["sayfa"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

	

		$query=$this->db->query("SELECT * FROM menu where id=2");
		$data["menu_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM mini");
		$data["mini"]=$query->result();




	
	}


public function hizmet($id)
	{
		 $query=$this->db->query("SELECT * FROM hizmet_resim where hizmet_id=$id");
		  $data["banner_getir"]=$query->result();

		

          $query=$this->db->query("SELECT * FROM hizmetlerimiz where id=$id");
		  $data["hizmet_getir"]=$query->result();


		 $query=$this->db->query("SELECT * FROM hizmetlerimiz");
		$data["hizmet"]=$query->result();

		$query=$this->db->query("SELECT * FROM bayilik");
		$data["bayilik"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where menu_durum='Aktif'");
		$data["menu"]=$query->result();
		$data["sayfa"]=$query->result();

		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

	

		$query=$this->db->query("SELECT * FROM menu where id=2");
		$data["menu_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM mini");
		$data["mini"]=$query->result();



		
			$this->load->view('hizmetlerimiz',$data);
		


}









	





}
