 <?php
$this->load->view('_header');

  ?>


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
     <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                  
                    <div class="contact-form-area mb-100">
                      
                          
                               
                    <div class="section-heading">
                        <h2>Bize Ulaşın</h2>
                       
                    </div>
                    <!-- Contact Information -->
                    <div class="contact-information">
                        <p><span>Adres:</span> <?=$veri[0]->adres?></p>
                        <p><span>Telefon:</span> <?=$veri[0]->telefon?></p>
                        <p><span>Email:</span> <?=$veri[0]->email?></p>
                        <p><span>Hafta İçi:</span> <?=$veri[0]->Calisma_saati1?></p>
                        <p><span>Hafta Sonu:</span><?=$veri[0]->Calisma_saati2?></p>
                    </div>
            
                          
                       
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-100">
                        <iframe src="<?=$veri[0]->maps?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
 


 

 <?php
$this->load->view('_footer');

?> 
 