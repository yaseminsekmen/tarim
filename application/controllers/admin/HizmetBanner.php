<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HizmetBanner extends CI_Controller {

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
		


		$query=$this->db->query("SELECT * FROM hizmetlerimiz ");
		$data["hizmet"]=$query->result();


		$query=$this->db->query("SELECT hizmetlerimiz.hizmet_adi,hizmet_resim.* FROM hizmet_resim inner join hizmetlerimiz on hizmet_resim.hizmet_id=hizmetlerimiz.id");
		$data["hresim"]=$query->result();


		$data["sayfa"]="Banner Resmi Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/bannerresim',$data);
		
	}

	 public function ekle()
	{     

		$data["sayfa"]="Banner Resmi Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		$query=$this->db->query("SELECT * FROM hizmetlerimiz ");
		$data["hizmet"]=$query->result();
	
		$this->load->view('admin/banner_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$data["sayfa"]="Banner Resmi Yönetimi | ";
		$data["menu"]="Admin Paneli ";




	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 3024;
        $config['max_height']           = 3000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\banner_duzenle',$data);
                    
            } 
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		
              		 'hizmet_id'=>$this->input->post('hizmet_id'),
                     'header_resim'=>$upload_data["file_name"],

                
              	);

              
             	$this->db->insert("hizmet_resim",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/hizmetbanner");

	}
	






 


	public function duzenle($id)
	{

			
		$data["sayfa"]="Banner Resmi Yönetimi | ";
		$data["menu"]="Admin Paneli ";


        $query=$this->db->query("SELECT * FROM hizmetlerimiz");
		$data["hizmet"]=$query->result();
		
			$query=$this->db->query("SELECT hizmetlerimiz.hizmet_adi,hizmet_resim.*  FROM hizmet_resim inner join hizmetlerimiz on hizmet_resim.hizmet_id=hizmetlerimiz.id where hizmet_resim.id=$id");
		$data["hresim"]=$query->result();

	


			$this->load->view('admin/banner_duzenle',$data);
	}


	public function guncelle($id)
	{

			
		$data["sayfa"]="Banner Resmi Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM hizmetlerimiz");
		$data["hizmet"]=$query->result();

		
        $query=$this->db->query("SELECT * FROM hizmet_resim WHERE id=$id");
		$data["hresim"]=$query->result();


			 $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 3060;
        $config['max_height']           = 3000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\banner_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'header_resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hizmet_resim",$data,$id);
            }						



		 $data=array(

                      
                    
              		 'hizmet_id'=>$this->input->post('hizmet_id'),
                  
                      
                     
           
                       
                 );
				
			   $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hizmet_resim",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/hizmetbanner");

	}




	 public function sil($id)
	{
		
               $this->db->query("DELETE FROM hizmet_resim WHERE id=$id");
		
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/hizmetbanner");
	}








}
