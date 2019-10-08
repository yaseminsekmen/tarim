<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayilik extends CI_Controller {

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
		

		$query=$this->db->query("SELECT * FROM bayilik ");
		$data["bayilik"]=$query->result();

		$data["sayfa"]="Bayilik Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/bayilikler',$data);
		
	}

	 public function ekle()
	{     

		$data["sayfa"]="Bayilik Yönetimi | ";
		$data["menu"]="Admin Paneli ";

	
		$this->load->view('admin/bayilik_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$data["sayfa"]="Bayilik Yönetimi | ";
		$data["menu"]="Admin Paneli ";



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
              	$this->load->view('admin\bayilik_duzenle',$data);
                    
            } 
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		 'bayilik_adi'=>$this->input->post('bayilik_adi'),
                     'header_resim'=>$upload_data["file_name"],

                
              	);

              
             	$this->db->insert("bayilik",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/bayilik");

	}
	









	public function duzenle($id)
	{

			
		$data["sayfa"]="Bayilik Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
			$query=$this->db->query("SELECT * FROM bayilik WHERE id=$id");
			$data["bayilik"]=$query->result();


			$this->load->view('admin/bayilik_duzenle',$data);
	}


	public function guncelle($id)
	{

			
		$data["sayfa"]="Bayilik Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
         $query=$this->db->query("SELECT * FROM bayilik WHERE id=$id");
			$data["bayilik"]=$query->result();

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
              	$this->load->view('admin\bayilik_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'header_resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("bayilik",$data,$id);
            }						



		 $data=array(

                      
                       'bayilik_adi'=>$this->input->post('bayilik_adi'),
                      
                     
           
                       
                 );
				
			   $this->load->model('Database_Model');
			   $this->Database_Model->update_data("bayilik",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/bayilik");

	}


	 public function sil($id)
	{
		 $query=$this->db->query("SELECT bayilik_id FROM bayi WHERE bayilik_id=$id");
		 $data["bayilik_sil"]=$query->result(); 
		
		if($data["bayilik_sil"]!=null){
			     $this->db->query("DELETE bayi,bayilik FROM bayilik INNER JOIN bayi ON bayilik.id=bayi.bayilik_id WHERE bayilik.id=$id");
		}
		else{
       
            $this->db->query("DELETE FROM bayilik WHERE id=$id");
		}
			   
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/bayilik");
	}








}
