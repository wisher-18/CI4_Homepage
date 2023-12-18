<?php foreach($infoContents as $infoContent): ?>
<section class="about-long">
        <div class="homeContainer">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 row justify-content-center">
              <img class="iphone-beauty" src="<?= base_url("public/content_images/".$infoContent->content_image)?>" alt="Iphone Image">
            </div>
            <div class="col-md-6 beutiful-feature">
              <h4><?= $infoContent->content_sub_heading ?></h4>
              <h2 class="no-wrap-text" style="position: relative;"><?= $infoContent->content_title ?></h2>
              <img style="position: absolute;" src="public/images/prostok_t_2.png" alt="">
              <br>
              <p><?= $infoContent->content ?></p>
              <br>
              <?php
                // Decode the JSON string from feature_data column
                $features = json_decode($infoContent->feature_data, true);
                ?>
                <?php foreach ($features as $featureItem): ?>
              <i class="fa-solid fa-<?= $featureItem["icon"] ?>"></i>
              <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $featureItem["feature_heading"] ?></span><br><br>
              <?php endforeach; ?>
            </div>
            </div>
          </div>
        </div>
  </section>

  <?php endforeach; ?>