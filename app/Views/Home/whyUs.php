
</div>
<?php if($whyUsContents): ?>
<section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center text-center">
        <h2>
          Why Choose <span style="color: #00bbf0;">Us</span>
        </h2>
      </div>
      <?php foreach($whyUsContents as $content): ?>
      <div class="why_container">
        <div class="box">
          
          <div class="img-box">
            <img src="<?= base_url("public/content_images/".$content->content_image) ?>" alt="">
          </div>
          <div class="detail-box mb-3">
            <h5>
              <?= $content->content_title ?>
            </h5>
            <p>
            <?= $content->content ?>
            </p>
          </div>
          
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </section>
  <?php endif; ?>
