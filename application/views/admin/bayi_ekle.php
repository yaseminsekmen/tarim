 <?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?> 


<head> 
  <title><?=$sayfa?><?=$menu?></title>
</head>





  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Bayi Ekle
          
          </h1>
     
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
        
            <!-- right column -->
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">  <?php if($this->session->flashdata("mesaj"))
    { ?>
  <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>İşlem:</strong> <?=$this->session->flashdata("mesaj")?>
  </div>
    
  <?php }?>
</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <form method="post"  enctype="multipart/form-data" autocomplete="off" action="<?=base_url()?>admin/bayi/ekle_kaydet" role="form">
                                               
                                         
                                              
                                  

                                        <div class="row form-group">
                                        <div class="col col-md-3 text-right control-label col-form-label"><label for="select" class=" form-control-label">Bayilik Adı</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="bayilik_id"  id="select" class="form-control">

                                                  <?php

                                            foreach ($bayilik_getir as $rs) {
                                                # code...
                                           
                                            ?>

                                               <option value="<?=$rs->id?>"><?=$rs->bayilik_adi?></option>
                                              
                                          
                                            
                                                <?php

                                            }
                                                ?>
                                              
                                             
                                            </select>
                                        </div>
                                    </div>

                                    
                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="resim"  class="form-control" id="email1" required="" placeholder="Yükleme için gözat">
                                         
                                      </div>
                                      
                              
                                                </div>              




                                      <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Bayi Link</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="bayi_link"  class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>




                                   <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Açıklama</label>
                                    <div class="col-sm-9">
                                       <textarea name="bayi_aciklama" class="ckeditor" id=""></textarea>
                                    </div>
                                </div>


                                   







                                  
                                             



                                                
                                                
                                            


                                                <div class="border-top">
                                <div class="card-body">
                                  <br>
                                  <br>
                                    <button type="submit" style="margin-left: 850px;" class="btn btn-success">Kaydet</button>
                                </div>
                            </div>
                                              
                                            </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->




















    


<?php
$this->load->view('admin/_footer');
?>

