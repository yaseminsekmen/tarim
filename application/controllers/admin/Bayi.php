<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

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
		

		  $query=$this->db->query("SELECT * FROM bayilik INNER JOIN bayi ON bayi.bayilik_id=bayilik.id");
		$data["bayi"]=$query->result();

		$query=$this->db->query("SELECT * FROM bayilik ");
		$data["bayilik"]=$query->result();

		$data["sayfa"]="Bayi Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		   
	
		$this->load->view('admin/bayiler',$data);
		
	}

	 public function ekle()
	{     

		$data["sayfa"]="Bayi Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$query=$this->db->query("SELECT * FROM bayilik ");
		$data["bayilik_getir"]=$query->result();
	
		$this->load->view('admin/bayi_ekle',$data);
		
	}

public function ekle_kaydet()
	{
		$data["sayfa"]="Bayi Yönetimi | ";
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
              	$this->load->view('admin\bayi_duzenle',$data);
                    
            } 
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		
              		 'bayi_aciklama'=>$this->input->post('bayi_aciklama'),
              		 'bayi_link'=>$this->input->post('bayi_link'),
              		 'bayilik_id'=>$this->input->post('bayilik_id'),
                     'bayi_resim'=>$upload_data["file_name"],

                
              	);

              
             	$this->db->insert("bayi",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/bayi");

	}
	





 
 


	public function duzenle($id)
	{ 

			
		$data["sayfa"]="Bayi Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
			

		  $query=$this->db->query("SELECT * FROM bayilik INNER JOIN bayi ON bayi.bayilik_id=bayilik.id WHERE bayi.id=$id");
		$data["bayi"]=$query->result();


			$query=$this->db->query("SELECT * FROM bayilik ");
		    $data["bayilik"]=$query->result();


			$this->load->view('admin/bayi_duzenle',$data);
	}


	public function guncelle($id)
	{

			
		$data["sayfa"]="Bayi Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
         $query=$this->db->query("SELECT * FROM bayi WHERE id=$id");
			$data["bayi"]=$query->result();

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
              	$this->load->view('admin\bayi_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'bayi_resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("bayi",$data,$id);
            }						



		 $data=array(

                  
              		 'bayi_aciklama'=>$this->input->post('bayi_aciklama'),
              		 'bayi_link'=>$this->input->post('bayi_link'),
              		 'bayilik_id'=>$this->input->post('bayilik_id'),
                  
                      
                     
           
                       
                 );
				
			   $this->load->model('Database_Model');
			   $this->Database_Model->update_data("bayi",$data,$id);
               
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/bayi");

	}




	 public function sil($id)
	{
		
            $this->db->query("DELETE FROM bayi WHERE id=$id");
		
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/bayi");
	}







public function resim_yukle($id)
        {
        	$data["sayfa"]="Bayi Yönetimi | ";
		    $data["menu"]="Admin Paneli ";
		
            $query=$this->db->query("SELECT * FROM bayi WHERE id=$id");
			$data["bayi"]=$query->result();
        	

	
          
            $data["id"]=$id;
                
            $this->load->view('admin/resim_yukle',$data);

        }
     
		  public function resim_kaydet($id)
	{

		

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
              	$this->load->view('admin\resim_yukle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
              		'bayi_adi'=>$upload_data["file_name"]
              	);
             	
              	   $this->load->model('Database_Model');
			   $this->Database_Model->update_data("bayi",$data,$id);

              	redirect(base_url().'admin/bayi');

			
						
            }						
		
	}	






 












}
