
</div>


<style>
    .owl-carousel {
        margin-top: 45px;
    }

    .owl-carousel .item {
        /* Set a fixed height for the items */
        
    }

    .owl-carousel .item .box {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .owl-carousel .item .img-box img {
        /* Set a fixed height and width for the images */
        height: 150px;
        width: 150px;
        border-radius: 50%; /* Optional: Add border-radius for a circular image */
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

<?php if($testimonialContents): ?>
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>What says our Customers</h2>
        </div>

        <!-- Owl Carousel container with the 'client_owl-carousel' class -->
        <div class="owl-carousel client_owl-carousel">
            <!-- Individual items with the 'item' class -->
            <?php foreach($testimonialContents as $testimonial): ?>
            <div class="item">
                <div class="box">
                    <div class="img-box">
                        <img src="<?= base_url("public/content_images/".$testimonial->content_image) ?>" alt="" class="box-img">
                    </div>
                    <div class="detail-box">
                        <div class="client_id">
                            <div class="client_info">
                                <h6><?= $testimonial->content_title ?></h6>
                                <p><?= $testimonial->content_sub_heading ?></p>
                            </div>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p><?= $testimonial->content ?></p>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>




            <!-- Repeat for other items -->
        </div>
    </div>
</section>

<?php endif; ?>