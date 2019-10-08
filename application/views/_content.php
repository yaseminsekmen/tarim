 <head> 
    <title>Anasayfa | <?=$veri[0]->title?></title>
</head>

    <!-- ##### Service Area Start ##### -->
   
    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2><?=$anasayfa_ayar[0]->title?></h2>
                       <p></p>
                    </div>
                   <p><?=$anasayfa_ayar[0]->title_aciklama?></p>

                     <div class="col-12 text-center">
                    <a href="<?=base_url()?>hakkimizda" class="btn alazea-btn">Detaylı Bilgi</a>
                </div>

                    <!-- Progress Bar Content Area -->
                    <div class="alazea-progress-bar mb-50">
                        <!-- Single Progress Bar -->
                        
                      

                       
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b1.png" alt="">
                                    <h5>Tohum</h5>
                                    <p><?=$mini[0]->tohum?></p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b2.png" alt="">
                                    <h5>Gübre</h5>
                                    <p><?=$mini[0]->gubre?></p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?=base_url()?>assets/img/core-img/b3.png" alt="">
                                    <h5>Zirai İlaç</h5>
                                    <p><?=$mini[0]->ilac?></p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
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
    <!-- ##### About Area End ##### -->

    




    <!-- ##### Subscribe Area Start ##### -->
    <section class="subscribe-newsletter-area" style="background-image: url(<?=base_url()?>assets/img/bg-img/subscribe.png);">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                   
                </div>
                <div class="col-12 col-lg-6">
                   
                </div>
            </div>
        </div>

        <!-- Subscribe Side Thumbnail -->
        <div class="subscribe-side-thumb wow fadeInUp" data-wow-delay="500ms">
            <img class="first-img" src="<?=base_url()?>assets/img/core-img/in.png" alt="">
        </div>
    </section>


    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
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
    <!-- ##### Contact Area End ##### -->

   