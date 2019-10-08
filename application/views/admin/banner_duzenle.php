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
     Banner Yönetimi
     
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
       <form method="post"  enctype="multipart/form-data"  action="<?=base_url()?>admin/hizmetbanner/guncelle/<?=$hresim[0]->id?>"  autocomplete="off"  role="form">
        <!-- text input -->
        
        



        <div class="row form-group">
          <div class="col col-md-3 text-right control-label col-form-label"><label for="select" class=" form-control-label">Hizmet Adı</label></div>
          <div class="col-12 col-md-9">
            <select name="hizmet_id"  id="select" class="form-control">
              <option value="<?=$hresim[0]->hizmet_id?>"><?=$hresim[0]->hizmet_adi?></option>
              <?php

              foreach ($hizmet as $rs) {
                                                # code...

                ?>

                <option value="<?=$rs->id?>"><?=$rs->hizmet_adi?></option>
                
                
                
                <?php

              }
              ?>
              
              
            </select>
          </div>
        </div>





        



        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
          <div class="col-sm-6">
            <input type="file" name="resim" value="<?=$hresim[0]->header_resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$hresim[0]->header_resim?>
            <br>

            <br>
            <img class="rounded-circle" height="250px" width="550px" src="<?=base_url()?>uploads/<?=$hresim[0]->header_resim?>">
            
          </div>
          <div class="col-sm-3">


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

