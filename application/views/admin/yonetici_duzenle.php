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
             Yönetici Yönetimi
          
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
                 <form method="post" action="<?=base_url()?>admin/yonetici/guncelle/<?=$admin[0]->id?>"  autocomplete="off"  role="form">
                    <!-- text input -->
                              
                                   

                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Yönetici Adı</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="admin_adi" value="<?=$admin[0]->admin_adi?>" class="form-control" id="email1" placeholder="">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Şifre</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="admin_sifre" value="<?=$admin[0]->admin_sifre?>" class="form-control" id="email1" placeholder="">
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

