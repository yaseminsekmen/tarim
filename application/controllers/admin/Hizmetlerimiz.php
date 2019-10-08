<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hizmetlerimiz extends CI_Controller {

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
	 
		
		
		$data["sayfa"]="Hizmetlerimiz Yönetimi | ";
		$data["menu"]="Admin Paneli ";


		$query=$this->db->query("SELECT * FROM hizmetlerimiz");
		$data["hizmet"]=$query->result();


		$this->load->view('admin/hizmetlerimiz',$data);
		

		
		if(! $this->session->userdata('admin_session')){
			redirect(base_url().'admin/login');
		}
		
	}


	 public function ekle()
	{     

			
		$data["sayfa"]="Hizmetlerimiz Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		$this->load->view('admin/hizmet_ekle',$data);
		
	}

public function ekle_kaydet()
	{
			
		$data["sayfa"]="Hizmetlerimiz Yönetimi | ";
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
              	$this->load->view('admin\hizmet_ekle',$data);
                    
            }

        else
            {
            	
			    $upload_data=$this->upload->data();
			    

			     $data=array(

		 			
                         'hizmet_adi'=>$this->input->post('hizmet_adi'),
                        'hizmet_aciklama'=>$this->input->post('hizmet_aciklama'),
                      
                       
						'hizmet_resim'=>$upload_data["file_name"],
									
                       
                 );

              
             	$this->db->insert("hizmetlerimiz",$data);
			
            }						

			   $this->session->set_flashdata("mesaj","Kayıt Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/hizmetlerimiz");

	}
	







	public function duzenle($id)
	{
			
		$data["sayfa"]="Hizmetlerimiz Yönetimi | ";
		$data["menu"]="Admin Paneli ";

		
			$query=$this->db->query("SELECT * FROM hizmetlerimiz WHERE id=$id");
			$data["hizmet"]=$query->result();


			$this->load->view('admin/hizmet_duzenle',$data);
	}


	
	public function guncelle($id)
	{
		
          $query=$this->db->query("SELECT * FROM hizmetlerimiz WHERE id=$id");
			$data["hizmet"]=$query->result();


			
		$data["sayfa"]="Hizmetlerimiz Yönetimi | ";
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
              	$this->load->view('admin\hizmet_duzenle',$data);
                    
            }
        else
            {
            	
			    $upload_data=$this->upload->data();
              	$data=array(
                        'hizmet_resim'=>$upload_data["file_name"],
                
              	);

              	 
               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hizmetlerimiz",$data,$id);
            }						
		
			  

              	 $data=array(

                          'hizmet_adi'=>$this->input->post('hizmet_adi'),
                        'hizmet_aciklama'=>$this->input->post('hizmet_aciklama'),
                               
                       
                 );

               $this->load->model('Database_Model');
			   $this->Database_Model->update_data("hizmetlerimiz",$data,$id);


			   
            
			   $this->session->set_flashdata("mesaj","Güncelleme Başarıyla Gerçekleştirildi"); 
			   redirect(base_url()."admin/hizmetlerimiz");




	}


		public function sil($id)
	{

			 $query=$this->db->query("SELECT hizmet_id FROM hizmet_resim WHERE hizmet_id=$id");
		 $data["hizmet_sil"]=$query->result(); 
		
		if($data["hizmet_sil"]!=null){
			     $this->db->query("DELETE hizmetlerimiz,hizmet_resim FROM hizmetlerimiz INNER JOIN hizmet_resim ON hizmetlerimiz.id=hizmet_resim.hizmet_id WHERE hizmetlerimiz.id=$id");
		}
		else{
       
            $this->db->query("DELETE FROM hizmetlerimiz WHERE id=$id");
		}






			    
               
                 $this->session->set_flashdata("mesaj","Silme İşlemi Başarıyla Gerçekleştirildi"); 
			    redirect(base_url()."admin/hizmetlerimiz");



	}



  


















}
