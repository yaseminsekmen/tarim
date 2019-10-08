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
      Hizmetlerimiz Yönetimi
      
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



 


      <div class="row">

       
        <div class="col-lg-9">
          
        </div>
        <div class="col-lg-3 ">
         <a href="<?=base_url()?>admin/hizmetlerimiz/ekle" class="btn btn-success"><i class="fa fa-fw fa-plus" aria-hidden="true" title="Copy to use plus"></i> Yeni hizmet ekle</a> 
         <br>
       </div>
       <br>
       <div class="col-lg-12">
         <br>
       </div>
       
     </div>




     <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
           
            <div class="box-tools">
             
            </div>
          </div><!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              
             <tr>
              <th>S.No</th>
              <th>Hizmet Adı</th>
              
              <th>Resim</th>
              
              <th>İşlemler</th>
            </tr>
            
            

            <?php
            $sno=0;
            foreach($hizmet as $rs)
              { $sno++;   
                ?>
                <tr>
                 <td><?=$sno?></td>
                 
                 <td><?=$rs->hizmet_adi?></td>


                 <td>
                   
                  <img class="rounded-circle" height="100px" width="150px" src="<?=base_url()?>uploads/<?=$rs->hizmet_resim?>"></a>
                  
                </td>






                <td>

                  <a href="<?=base_url()?>admin/hizmetlerimiz/duzenle/<?=$rs->id?>" class="btn btn-info btn-info"><i class=" fa fa-fw fa-edit"></i></a> 

                  <a href="<?=base_url()?>admin/hizmetlerimiz/sil/<?=$rs->id?>" class="btn btn-danger btn-danger"   onclick="return confirm('Silinsin mi?');" role="button"><i class="fa fa-fw fa-trash-o"></i></a>




                </td>
              </tr>

              <?php
            }
            ?>

            
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>









</div><!-- /.box -->
</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->























<?php
$this->load->view('admin/_footer');
?>

