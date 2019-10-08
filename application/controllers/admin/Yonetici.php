<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetici extends CI_Controller {

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
		

		$query=$this->db->query("SELECT * FROM admin");
		$data["admin"]=$query->result();

		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		   
	
		$this->load->view('admin/yonetici',$data);
		
	}




	 public function ekle()
	{    

	    $data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$this->load->view('admin/yonetici_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";


	      $data=array(

                      
                       'admin_adi'=>$this->input->post('admin_adi'),
                       'admin_sifre'=>$this->input->post('admin_sifre'),
                      
                                           
                 );

               $this->db->insert("admin",$data);
			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/yonetici");

	}
	







	public function duzenle($id)
	{
		$data["sayfa"]="Admin Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
			$query=$this->db->query("SELECT * FROM admin WHERE id=$id");
			$data["admin"]=$query->result();


			$this->load->view('admin/yonetici_duzenle',$data);
	}





		public function guncelle($id)
	{
			$data["sayfa"]="Admin Yönetimi | ";
		    $data["menu"]="Admin Paneli ";

             $data=array(

                       'admin_adi'=>$this->input->post('admin_adi'),
                       'admin_sifre'=>$this->input->post('admin_sifre'),
                                
                 );
				
			    $this->load->model('Database_Model');
			   $this->Database_Model->update_data("admin",$data,$id);
               
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/yonetici");

	}





	public function sil($id)
	{
		
		
		
       
            $this->db->query("DELETE FROM admin WHERE id=$id");
	
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/yonetici");
	}





}
