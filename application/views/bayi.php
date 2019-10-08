 <?php
$this->load->view('_header');

?> 

<head> 
    <title><?=$bayilik_getir[0]->bayilik_adi?> | <?=$veri[0]->title?></title>
</head>
 

  <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
      

        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?=base_url()?>uploads/<?=$bayilik_getir[0]->header_resim?>);">
            <h2><?=$bayilik_getir[0]->bayilik_adi?></h2>
        </div>




     

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>home"><i class="fa fa-home"></i> Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$menu_getir[0]->menu_adi?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <?php 
    $sno=0;
    foreach ($bayi_getir as $rs) {
    $sno++; 
if($sno%2==1){

        ?> 

 
 
   
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <img src="<?=base_url()?>uploads/<?=$rs->bayi_adi?>" alt="" height="100px" width="200px"> 
                        
                    </div>
                    <p><?=$rs->bayi_aciklama?></p>

                    <!-- Progress Bar Content Area -->
                    <br>
                      <a href="<?=$rs->bayi_link?>" target="_blank" class="btn alazea-btn mr-30">Detaylı Bilgi İçin Tıklayınız</a>
                      <br>
                </div>

                 <div class="col-12 col-lg-5">
                     <div class="contact--thumbnail">
                        <img src="<?=base_url()?>uploads/<?=$rs->bayi_resim?>" alt="">
                       
                      
                    </div>
                </div>
            </div>
        </div>

      
    </section>
    <hr>



 <?php
}else{


 ?>

  <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                 <div class="col-12 col-lg-5">
                     <div class="contact--thumbnail">
                        <img src="<?=base_url()?>uploads/<?=$rs->bayi_resim?>"   alt="">
                       
                        </a>
                    </div>
                </div>


                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                      
                       <img src="<?=base_url()?>uploads/<?=$rs->bayi_adi?>" alt=""  height="100px" width="200px"> 
                       
                    </div>
                    <p><?=$rs->bayi_aciklama?></p>
                      <br>

                    <a href="<?=$rs->bayi_link?>" target="_blank" class="btn alazea-btn mr-30">Detaylı Bilgi İçin Tıklayınız</a>

                    <!-- Progress Bar Content Area -->

                 <br>
                </div>

                
            </div>
        </div>

      
    </section>
    <hr>





 <?php
}}


 ?>















 <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>

 


    


 <?php
$this->load->view('_footer');

?> 
 