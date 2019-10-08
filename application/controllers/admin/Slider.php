<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
               $this->load->helper('url');
		      $this->load->model('Database_Model');

                if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}



        }
 
	
	public function index()
	{
	 
		
		
		$data["sayfa"]="Slider Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		$query=$this->db->query("SELECT * FROM slider");
		$data["slider"]=$query->result();


		$this->load->view('admin/slider',$data);
		

		
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
		
	}


	 public function ekle()
	{     

			
		$data["sayfa"]="Slider Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$this->load->view('admin/slider_ekle',$data);
		
	}

public function ekle_kaydet()
	{
			
		$data["sayfa"]="Slider Yönetimi | ";
		$data["menu"]="Admin Paneli ";


	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;

		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\slider_ekle',$data);
                    
            }

        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                         'slogan'=>$this->input->post('slogan'),
                        'slogan2'=>$this->input->post('slogan2'),
                      
                       
						'resim'=>$upload_data["file_name"],
									
                       
                 );

              
             	$this->db->insert("slider",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/slider");

	}
	







	public function duzenle($id)
	{
			
		$data["sayfa"]="Slider Yönetimi | ";
		$data["menu"]="Admin Paneli ";
		
			$query=$this->db->query("SELECT * FROM slider WHERE id=$id");
			$data["slider"]=$query->result();


			$this->load->view('admin/slider_duzenle',$data);
	}


	
	public function guncelle($id)
	{
		
          $query=$this->db->query("SELECT * FROM slider WHERE id=$id");
			$data["slider"]=$query->result();


			
	    $data["sayfa"]="Slider Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		

        $data["id"]=$id;
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2000;
        $this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('resim'))//bu resim formdaki name="resim" den geliyor
             {
                	$error=$this->upload->display_errors();
              	$this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              	$this->load->view('admin\slider_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("slider",$data,$id);
            }						
		
			  

              	 $data=array(

                        'slogan'=>$this->input->post('slogan'),
                        'slogan2'=>$this->input->post('slogan2'),
                      
                       
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("slider",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/slider");




	}


		public function sil($id)
	{
			    $this->db->query("DELETE FROM slider WHERE id=$id");
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/slider");
	}



  


















}
