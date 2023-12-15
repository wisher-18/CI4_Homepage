<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add New Content<?= $this->endSection()?>
<?= $this->section("content") ?>
 

    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="homeContainer col-lg-12">
                <div class="contact-row p-5">
                    <h2>Content</h2>

                    <!-- Display Error Messages -->
                    <?php if (session('error') !== null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session('error') ?>
                        </div>
                    <?php elseif (session('errors') !== null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php if (is_array(session('errors'))) : ?>
                                <?php foreach (session('errors') as $error) : ?>
                                    <?= $error ?>
                                    <br>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?= session('errors') ?>
                            <?php endif ?>
                        </div>
                    <?php endif ?>

                    <!-- Display Success Messages -->
                    <?php if (session('message') !== null) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('message') ?>
                        </div>
                    <?php endif ?>

                    <div class="col-12">
                        <div class="content-details">
                            <p><span class="blue_text">Title: </span><?= esc($content->content_title) ?></p>
                            <p><span class="blue_text">Sub-heading: </span><?= esc($content->content_sub_heading) ?></p>
                            <p><span class="blue_text">Content: </span><?= esc($content->content) ?></p>
                            <p><span class="blue_text">Additional Content: </span><?= esc($content->additional_content) ?></p>
                            <p><span class="blue_text">Content Section: </span><?= esc($content->content_section) ?></p>
                            <p><span class="blue_text">Primary Button: </span><?= esc($content->primary_btn) ?></p>
                            <p><span class="blue_text">Primary Button URL: </span><?= esc($content->primary_btn_url) ?></p>
                            <p><span class="blue_text">Secondary Button: </span><?= esc($content->secondary_btn) ?></p>
                            <p><span class="blue_text">Secondary Button URL: </span><?= esc($content->secondary_btn_url) ?></p>

                            <!-- Display Images -->
                            <div class="image-container">
                                <p><span class="blue_text">Content Image:</span></p>
                                <img src="<?= base_url("public/content_images/" . $content->content_image) ?>" alt="Content Image">
                            </div>

                            <div class="image-container">
                                <p><span class="blue_text">Background Image:</span></p>
                                <img src="<?= base_url("public/background_img/" . $content->background_img) ?>" alt="Background Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include("Home/footer") ?>
<?= $this->endSection() ?>
