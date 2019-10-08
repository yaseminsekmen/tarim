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
     Site Ayarları Yönetimi

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



        <form method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/ayar/logo_guncelle/<?=$veri[0]->id?>"  autocomplete="off"  role="form">
          <!-- text input -->



          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Firma Logo</label>
            <div class="col-sm-6">
              <input type="file" name="logo" value="<?=$veri[0]->logo?>" class="form-control" id="email1" placeholder="Yükleme için gözat"><?=$veri[0]->logo?>

            </div>

            <div class="col-sm-3">
              <img class="rounded-circle" height="100px" width="100px" src="<?=base_url()?>uploads/<?=$veri[0]->logo?>">

            </div>

          </div>





          <div class="border-top">
            <div class="card-body">
              <br>
              <br>
              <button type="submit" style="margin-left: 850px;" class="btn btn-success"> Logoyu Kaydet</button>
            </div>
          </div>



        </form>





        <hr>



        <form method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/ayar/ayarlar_guncelle/<?=$veri[0]->id?>"  autocomplete="off"  role="form">
          <!-- text input -->

          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Tittle</label>
            <div class="col-sm-9">
              <input type="text" name="title" value="<?=$veri[0]->title?>"class="form-control" id="email1" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Site Meta</label>
            <div class="col-sm-9">
              <input type="text" name="meta" value="<?=$veri[0]->meta?>" class="form-control" id="email1" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Keywords</label>
            <div class="col-sm-9">
              <input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control" id="email1" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Description</label>
            <div class="col-sm-9">
              <input type="text" name="description" value="<?=$veri[0]->description?>" class="form-control" id="email1" placeholder="">
            </div>
          </div>








          <hr> 




          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Telefon</label>
            <div class="col-sm-9">
              <input type="text"  name="telefon" value="<?=$veri[0]->telefon?>"class="form-control" id="email1" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Fax</label>
            <div class="col-sm-9">
              <input type="text"  name="fax" value="<?=$veri[0]->fax?>" class="form-control" id="email1" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text"  name="email" value="<?=$veri[0]->email?>"class="form-control" id="email1" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Adres</label>
            <div class="col-sm-9">
              <input type="text"  name="adres" value="<?=$veri[0]->adres?>"class="form-control" id="email1" placeholder="">
            </div>
          </div>
          <hr>
          <div class="form-group row">
           <label class="col-sm-3 text-right control-label col-form-label">Google Maps</label>
           <div class="col-sm-9">
             <textarea name="maps" class="" cols="67" rows="6"><?=$veri[0]->maps?></textarea>
           </div>
         </div>
         <hr>

         <div class="form-group row">

          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Facebook Sayfa URL
          </label>
          <div class="col-sm-9">
            <input type="text"  name="face" value="<?=$veri[0]->face?>"class="form-control" id="email1" placeholder="">
          </div>




        </div>

        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Twitter Sayfa URL
          </label>
          <div class="col-sm-9">
            <input type="text"  name="twitter" value="<?=$veri[0]->twitter?>"class="form-control" id="email1" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Google Sayfa URL</label>
          <div class="col-sm-9">
            <input type="text"  name="google" value="<?=$veri[0]->google?>"class="form-control" id="email1" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Instagram Sayfa URL
          </label>
          <div class="col-sm-9">
            <input type="text"  name="instagram" value="<?=$veri[0]->instagram?>" class="form-control" id="email1" placeholder="">
          </div>
        </div>



        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Youtube</label>
          <div class="col-sm-9">
            <input type="text" name="youtube" value="<?=$veri[0]->youtube?>"class="form-control" id="email1" placeholder="">
          </div>
        </div>


        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Çalışma Saati 1</label>
          <div class="col-sm-9">
            <input type="text" name="Calisma_saati1" value="<?=$veri[0]->Calisma_saati1?>"class="form-control" id="email1" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label for="email1" class="col-sm-3 text-right control-label col-form-label">Çalışma Saati 2</label>
          <div class="col-sm-9">
            <input type="text" name="Calisma_saati2" value="<?=$veri[0]->Calisma_saati2?>"class="form-control" id="email1" placeholder="">
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

