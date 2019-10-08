<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM hakkimizda");
		$data["hakkimizda"]=$query->result();

		$query=$this->db->query("SELECT * FROM menu where id=1");
		$data["menu_getir"]=$query->result();

		$query=$this->db->query("SELECT * FROM mini");
		$data["mini"]=$query->result();




		$this->load->view('_header',$data);
	   
		$this->load->view('hakkimizda',$data);
		$this->load->view('_footer',$data);
	}








	





}
