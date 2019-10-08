 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(<?=base_url()?>assets/img/bg-img/aa.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="<?=base_url()?>uploads/<?=$veri[0]->logo?>" height="35px" width="130px" alt=""></a>
                            </div>
                           
                            <div class="social-info">
                                <a href="<?=$veri[0]->face?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?=$veri[0]->twitter?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                              
                                <a href="<?=$veri[0]->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                             
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                
                            </div>
                            <nav class="widget-nav">
                                <ul>

                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                           
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>İletişim</h5>
                            </div>

                            <div class="contact-information">
                               <p><span>Adres:</span> <?=$veri[0]->adres?></p>
                        <p><span>Telefon:</span> <?=$veri[0]->telefon?></p>
                        <p><span>Email:</span> <?=$veri[0]->email?></p>
                        <p><span>Hafta İçi:</span> <?=$veri[0]->Calisma_saati1?></p>
                        <p><span>Hafta Sonu:</span><?=$veri[0]->Calisma_saati2?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>




        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm hakları saklıdır | nedimmedya.net | <a href="https://nedimmedya.net" target="_blank">NedimMedya</a>

</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                               
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?=base_url()?>assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?=base_url()?>assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?=base_url()?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?=base_url()?>assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?=base_url()?>assets/js/active.js"></script>
</body>

</html>