<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
				
	   
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
	}





		public function anasayfa()
	{
		

		$query=$this->db->query("SELECT * FROM anasayfa_ayarlari");
		$data["anasayfa"]=$query->result();

		$data["sayfa"]="Anasayfa Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/anasayfa_duzenle',$data);
		
	}




	

	
	public function anasayfa_guncelle($id)
	{


		$data["sayfa"]="Anasayfa Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
          $query=$this->db->query("SELECT * FROM anasayfa_ayarlari WHERE id=$id");
		  $data["anasayfa"]=$query->result();

	  

              	 $data=array(

                        'title'=>$this->input->post('title'),
                        'title_aciklama'=>$this->input->post('title_aciklama'),
                      
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("anasayfa_ayarlari",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/home/anasayfa");




	}






	










}
