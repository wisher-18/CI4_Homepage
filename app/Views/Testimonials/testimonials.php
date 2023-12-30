<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Testimonials<?= $this->endSection() ?>
<?= $this->section("content") ?>
<?= $this->include("home/navbar") ?>
</div>


<style>
    .owl-carousel {
        margin-top: 45px;
    }

    .owl-nav .owl-prev,
    .owl-nav .owl-next {
        width: 55px;
        height: 55px;
        background-color: #ffffff;
        color: #000000;
        outline: none;
        font-size: 24px;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
    }

    .owl-nav .owl-prev:hover,
    .owl-nav .owl-next:hover {
        color: #00204a !important;
    }
</style>

<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>What says our Customers</h2>
        </div>

        <!-- Owl Carousel container with the 'client_owl-carousel' class -->
        <div class="owl-carousel client_owl-carousel">
            <!-- Individual items with the 'item' class -->
            <div class="item">
                <div class="box">
                    <div class="img-box">
                        <img src="<?= base_url("public/images/client1.jpg") ?>" alt="" class="box-img">
                    </div>
                    <div class="detail-box">
                        <div class="client_id">
                            <div class="client_info">
                                <h6>LusDen</h6>
                                <p>magna aliqua. Ut</p>
                            </div>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <div class="img-box">
                        <img src="<?= base_url("public/images/client2.jpg") ?>" alt="" class="box-img">
                    </div>
                    <div class="detail-box">
                        <div class="client_id">
                            <div class="client_info">
                                <h6>LusDen</h6>
                                <p>magna aliqua. Ut</p>
                            </div>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                    </div>
                </div>
            </div>



            <!-- Repeat for other items -->
        </div>
    </div>
</section>




<?= $this->include("home/footer") ?>
<?= $this->endSection("content") ?>
