
<head> 
    <title><?=$menu_getir[0]->menu_adi?> | <?=$veri[0]->title?></title>
</head>
 




  <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?=base_url()?>uploads/<?=$menu_getir[0]->resim?>);">
            <h2><?=$menu_getir[0]->menu_adi?></h2>
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



    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2><?=$menu_getir[0]->menu_adi?></h2>
                        
                    </div>
                    <p><?=$hakkimizda[0]->hakkimizda_aciklama?></p>

                    <!-- Progress Bar Content Area -->
                 
                </div>

                 <div class="col-12 col-lg-6">
                     <div class="contact--thumbnail">
                        <img src="<?=base_url()?>uploads/<?=$hakkimizda[0]->resim?>" alt="">
                       
                        </a>
                    </div>
                </div>
            </div>
        </div>

      
    </section>

 


      <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                
                <div class="col-12 col-lg-12">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-3">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b1.png" alt="">
                                    <h5>Tohum</h5>
                                    <p><?=$mini[0]->tohum?></p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-3">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b2.png" alt="">
                                    <h5>Gübre</h5>
                                    <p><?=$mini[0]->gubre?></p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-3">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b3.png" alt="">
                                    <h5>Zirai İlaç</h5>
                                    <p><?=$mini[0]->ilac?></p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-3">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b4.png" alt="">
                                    <h5>Sera Örtüsü</h5>
                                    <p><?=$mini[0]->sera?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    



 