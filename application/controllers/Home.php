<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

		$query=$this->db->query("SELECT * FROM mini");
		$data["mini"]=$query->result();

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["anasayfa_ayar"]=$query->result();



		$query=$this->db->query("SELECT * FROM slider");
		$data["slider"]=$query->result();


		$this->load->view('_header',$data);
	    $this->load->view('_slider',$data);
		$this->load->view('_content',$data);
		$this->load->view('_footer',$data);
	}



	public function iletisim()
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

		$query=$this->db->query("SELECT * FROM mini");
		$data["mini"]=$query->result();

		

		$query=$this->db->query("SELECT * FROM menu where id=4");
		$data["menu_getir"]=$query->result();

		
		$this->load->view('iletisim',$data);
		
	}








	





}
