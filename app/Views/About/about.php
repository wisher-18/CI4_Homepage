<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>About Us<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("home/navbar") ?>
</div>
<style>
    /* .our-story-img{
        transition: all 0.2sec ease;
        cursor: pointer;
        
    }
    .our-story-img:hover{
        transform: scale(1.1);
        overflow: hidden;
    } */
</style>
<!-- <section class="about-us">
<div class="homeContainer">
            <div class="row justify-content-center">
                <h2><strong>About Us</strong></h2>
                <div class="col-lg-6 about-para mb-3">
                <h4>Our Story</h4>
            <h3>Icredible Journey</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Possimus dicta placeat eos tenetur voluptatibus. 
                Obcaecati vitae non optio eligendi libero ipsa fuga temporibus quod, nihil suscipit aliquam modi asperiores quo?
            </p>
            <div class="buttn">
                <button class="btn btn-outline-dark">Our Team</button>
                <button class="btn btn-outline-dark active">Learn More</button>
            </div>
                </div>
                <div class="our-story-img col-lg-6 mb-3">
                <img class="col-12" src="public/images/our-story.jpg" alt="about-us">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
            <div class="col-lg-6">
                <img class="col-12" src="public/images/about-us.jpg" alt="about-us">
                </div>

                <div class="col-lg-6 about-para mb-3">
                <h4>Our Team</h4>
            <h3>A House of Creative and Intelligent</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Possimus dicta placeat eos tenetur voluptatibus. 
                Obcaecati vitae non optio eligendi libero ipsa fuga temporibus quod, nihil suscipit aliquam modi asperiores quo?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id repellendus deserunt veritatis doloremque nobis quidem adipisci reprehenderit, esse repellat dignissimos, soluta ducimus a ullam, iste neque ipsa. Fugit, quidem consequatur?
            </p>
            <div class="buttn">
                <button class="btn btn-outline-dark">Our Team</button>
                <button class="btn btn-outline-dark active">Learn More</button>
            </div>
                </div>
                
            </div>
        </div>


</section> -->
<section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
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
            <h3>
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