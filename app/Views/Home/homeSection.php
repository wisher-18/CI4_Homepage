<?php foreach($heroContents as $heroContent): ?>
<section class="theme-bg banner" style="padding-bottom: 0px;">
        <div class="homeContainer">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 download-para">
            
                    <strong><h4><?= $heroContent->content_sub_heading ?></h4></strong><br>
                    <h1><?= $heroContent->content_title ?></h1><br>
                    <p class="col-lg-10"><?= $heroContent->content ?></p><br>
                    <a href="<?= $heroContent->primary_btn_url ?>"><div class="blue-button btn no-wrap-text"><?= $heroContent->primary_btn_name ?></div></a>
                    <a href="<?= $heroContent->secondary_btn_url ?>"><div class="secondaryView-button btn"><?= $heroContent->secondary_btn_name ?></div></a>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url("public/content_images/".$heroContent->content_image) ?>" class="device" alt="iphone">
                </div>
                
            </div>
        </div>
        
    </section>
    <?php endforeach; ?>
  </div>  
