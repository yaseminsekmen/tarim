

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

        	<?php
			foreach ($slider as $rs) {
				# code...
			

			?>

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(<?=base_url()?>uploads/<?=$rs->resim?>);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2><?=$rs->slogan?></h2>
                                <p><?=$rs->slogan2?></p>
                                <div class="welcome-btn-group">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            	<?php
			}
			

			?>

         

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->