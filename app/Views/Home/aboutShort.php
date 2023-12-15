<style>
  /* .last{
    transition: width 2s, height 2s, transform 2s;

  }
  .last:hover{
    

  transform: rotate(360deg);

  } */
</style>

<?php foreach($otherSections as $section): ?>
<section class="about-short">
        <div class="homeContainer">
          <div class="row align-items-center ">
            <div class="col-lg-6">
              
              <h4><?= esc($section->content_sub_heading) ?></h4>
                  <h2 style="position: relative;"><?= esc($section->content_title) ?></h2>
                  <img style="position: absolute;" src="public/images/prostok_t_2.png" alt="">
                  <br>
                  
                  <p><?= esc($section->content) ?></p>
            </div>
            <div class="col-lg-6">
              <img class="iphone-5 last" src="<?= base_url("public/content_images/".$section->content_image)?>" alt="">
            </div> 
                  
          </div>
        </div>
      </section>
      
      <?php endforeach;?>  
  