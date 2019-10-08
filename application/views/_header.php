<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta name="description" content="<?=$veri[0]->description?>">
    <meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
  

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url()?>assets/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/classy-nav.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/elegant-icon.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="<?=base_url()?>assets/img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: <?=$veri[0]->email?></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Telefon:</span> <?=$veri[0]->telefon?></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                <div class="">
                                 <a href="<?=$veri[0]->face?>"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
                                <!-- Login -->
                                </div>
                                <div class="login">
                                    <a href="<?=$veri[0]->twitter?>"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
                                </div>



                               
                                <!-- Cart -->
                                <div class="cart">
                                    <a href="<?=$veri[0]->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i> <span>İnstagram <span class="cart-quantity"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="<?=base_url()?>home" class="nav-brand"><img src="<?=base_url()?>uploads/<?=$veri[0]->logo?>" height="15px" width="130px" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?=base_url()?>home">Anasayfa</a></li>


 
                        <?php 
                        foreach ($menu as $rs) {
                      
                      if($rs->id==1){

                        ?> 
                                    <li><a href="<?=base_url()?>hakkimizda"><?=$rs->menu_adi?></a></li>

                         <?php
                      }  if($rs->id==2){
                        
                        ?>            
                                    <li><a href="#"><?=$rs->menu_adi?></a>
                                        <ul class="dropdown">


                        <?php 
                            foreach ($hizmet as $a) {
                      
                     

                        ?> 


                                            <li><a href="<?=base_url()?>hizmetlerimiz/hizmet/<?=$a->id?>"><?=$a->hizmet_adi?></a></li>
                                            <br>
                                        
                        <?php
                    }
                        ?>




                                        </ul>
                                    </li>


                         <?php
                      }  if($rs->id==3){
                        
                        ?>   
                            <li><a href="#"><?=$rs->menu_adi?></a>
                                        <ul class="dropdown">
                                               <?php 
                            foreach ($bayilik as $a) {
                      
                     

                        ?> 


                                            <li><a href="<?=base_url()?>bayilikler/bayi/<?=$a->id?>"><?=$a->bayilik_adi?></a></li>
                                           
                                        
                        <?php
                    }
                        ?>
                                        </ul>
                                    </li>


                                   <?php
                      }  if($rs->id==4){
                        
                        ?>   


                                   
                                    <li><a href="<?=base_url()?>home/iletisim"><?=$rs->menu_adi?></a></li>

<?php }} ?>



                                </ul>

                                <!-- Search Icon -->
                               

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->