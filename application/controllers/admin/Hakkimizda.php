<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {

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
		

		$query=$this->db->query("SELECT * FROM hakkimizda");
		$data["hakkimizda"]=$query->result();

		$data["sayfa"]="Hakkımızda Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/hakkimizda',$data);
		
	}





	public function guncelle($id)
	{

			$data["sayfa"]="Hakkımızda Yönetimi | ";
	     	$data["menu"]="Admin Paneli ";
		
            $query=$this->db->query("SELECT * FROM hakkimizda WHERE id=$id");
			$data["hakkimizda"]=$query->result();


			 $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2024;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\hakkimizda',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hakkimizda",$data,$id);
            }						



		 $data=array(

                      
                      
                      
                       'hakkimizda_aciklama'=>$this->input->post('hakkimizda_aciklama'),
                   
           
                       
                 );
				
			   $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hakkimizda",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/hakkimizda");

	}



}
