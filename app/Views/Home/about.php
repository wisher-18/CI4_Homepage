

</div>

<?php foreach($aboutUsContents as $aboutUsContent): ?>
<section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2 style="color: #ffffff;">
          <?= $aboutUsContent->content_title ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?= base_url("/public/content_images/".$aboutUsContent->content_image )?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3  style="color: #ffffff;">
            <?= $aboutUsContent->content_sub_heading ?>
            </h3>
            <p>
            <?= $aboutUsContent->content ?>
            </p>

            <a href=" <?= $aboutUsContent->primary_btn_url ?>">
              <?= $aboutUsContent->primary_btn_name ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>

