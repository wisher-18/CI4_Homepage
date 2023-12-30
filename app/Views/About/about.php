<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>About Us<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("home/navbar") ?>
<style>
  .about_section{
    color: #ffffff;
  }
   
</style>
</div>

<section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2 style="color: #ffffff;">
          About <span>Us</span>
        </h2>
        <p>
          Magni quod blanditiis non minus sed aut voluptatum illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="<?= base_url("/public/images/about-us.jpg")?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3  style="color: #ffffff;">
              We Are Finexo
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <p>
              Molestiae odio earum non qui cumque provident voluptates, repellendus exercitationem, possimus at iste corrupti officiis unde alias eius ducimus reiciendis soluta eveniet. Nobis ullam ab omnis quasi expedita.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?= $this->include("home/footer") ?>
      
      
      

<?= $this->endSection() ?>