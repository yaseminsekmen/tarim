<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mini extends CI_Controller {

	  function __construct()
        {
                parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
               $this->load->model('Database_Model');
		//$this->load->database();
		//$this->load->library('session');


               if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}




	}
	
	public function index()
	{
		

		$query=$this->db->query("SELECT * FROM mini");
		$data["mini"]=$query->result();

		$data["sayfa"]="Hakkımızda Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/mini_yazi',$data);
		
	}





	public function guncelle($id)
	{

			$data["sayfa"]="Hakkımızda Yönetimi | ";
	     	$data["menu"]="Admin Paneli ";
		
            $query=$this->db->query("SELECT * FROM mini WHERE id=$id");
			$data["mini"]=$query->result();


		

		 $data=array(

                      
                      
                      
                       'tohum'=>$this->input->post('tohum'),
                       'gubre'=>$this->input->post('gubre'),
                       'ilac'=>$this->input->post('ilac'),
                       'sera'=>$this->input->post('sera'),
                   
           
                       
                 );
				
			   $this->load->model('Database_Model');
			   $this->Database_Model->update_data("mini",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/mini");

	}



}
