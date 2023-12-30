<?php if($heroContents): ?>
<section class="theme-bg banner" style="padding-bottom: 0px; min-height: 615px;">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators" style="top:530px">
      <?php foreach ($heroContents as $key => $heroContent): ?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $key + 1 ?>"></button>
      <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
      <?php foreach ($heroContents as $key => $heroContent): ?>
        <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
          <div class="homeContainer">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 download-para">
                <strong><h4><?= $heroContent->content_sub_heading ?></h4></strong><br>
                <h1><?= $heroContent->content_title ?></h1><br>
                <p class="col-lg-10"><?= $heroContent->content ?></p><br>
                <a href="<?= $heroContent->primary_btn_url ?>" style="z-index:+1;"><div class="blue-button btn no-wrap-text" ><?= $heroContent->primary_btn_name ?></div></a>
                <a href="<?= $heroContent->secondary_btn_url ?>"><div class="secondaryView-button btn"><?= $heroContent->secondary_btn_name ?></div></a>
              </div>
              <div class="col-lg-6">
                <img src="<?= base_url("public/content_images/".$heroContent->content_image) ?>" class="device" alt="iphone">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" style="width: 100px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
</div>
<?php endif; ?>