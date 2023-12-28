
</div>
<section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center text-center">
        <h2>
          Why Choose <span style="color: #00bbf0;">Us</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <?php foreach($whyUsContents as $content): ?>
          <div class="img-box">
            <img src="<?= base_url("public/content_images/".$content->content_image) ?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              <?= $content->content_title ?>
            </h5>
            <p>
            <?= $content->content ?>
            </p>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url("public/images/w2.png")?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Secure Investment
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url("public/images/w3.png")?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Instant Trading
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="<?= base_url("public/images/w4.png")?>" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Happy Customers
            </h5>
            <p>
              Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.
              Tempore laborum nesciunt ut veniam, nemo officia ullam repudiandae repellat veritatis unde reiciendis possimus animi autem natus
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
