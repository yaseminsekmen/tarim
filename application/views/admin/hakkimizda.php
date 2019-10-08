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
     Hakkimizda Yönetimi

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
        <form method="post"  enctype="multipart/form-data"  action="<?=base_url()?>admin/hakkimizda/guncelle/<?=$hakkimizda[0]->id?>"  autocomplete="off"  role="form">
        <!-- text input -->


  



        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Resim Seçiniz</label>
          <div class="col-sm-6">
            <input type="file" name="resim" value="<?=$hakkimizda[0]->resim?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$hakkimizda[0]->resim?>

          </div>
          <div class="col-sm-3">
            <img class="rounded-circle" height="150px" width="200px" src="<?=base_url()?>uploads/<?=$hakkimizda[0]->resim?>">

          </div>


        </div>


        <div class="form-group row">
          <label class="col-sm-3 text-right control-label col-form-label">Hakkımızda</label>
          <div class="col-sm-9">
           <textarea name="hakkimizda_aciklama" class="ckeditor" id=""><?=$hakkimizda[0]->hakkimizda_aciklama?></textarea>
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

