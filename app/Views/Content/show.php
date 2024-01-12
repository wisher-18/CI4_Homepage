<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add New Content<?= $this->endSection() ?>
<?= $this->section("content") ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="homeContainer col-lg-12">
            <div class="contact-row p-5 shadow rounded">
                <h2 class="mb-4">Content Details</h2>

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
                        <div class="mb-3">
                            <span class="blue_text">Title:</span>
                            <h3 class="text-primary"><?= esc($content->content_title) ?></h3>
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Sub-heading:</span>
                            <h5 class="text-secondary"><?= esc($content->content_sub_heading) ?></h5>
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Content:</span>
                            <p><?= esc($content->content) ?></p>
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Additional Content:</span>
                            <p><?= esc($content->additional_content) ?></p>
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Content Section:</span>
                            <p class="text-muted"><?= esc($content->content_section) ?></p>
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Primary Button:</span>
                            <p class="text-primary"><?= esc($content->primary_btn) ?></p>
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Primary Button URL:</span>
                            <p><a href="<?= esc($content->primary_btn_url) ?>" target="_blank"
                                    class="btn btn-primary"><?= esc($content->primary_btn) ?></a></p>
                        </div>

                        <!-- Add more sections for other details -->

                        <!-- Display Images -->
                        <div class="mb-3">
                            <span class="blue_text">Content Image:</span>
                            <img src="<?= base_url("public/content_images/" . $content->content_image) ?>"
                                alt="Content Image" class="img-fluid rounded" style="height: 200px; width: 200px;">
                        </div>

                        <div class="mb-3">
                            <span class="blue_text">Background Image:</span>
                            <img src="<?= base_url("public/background_img/" . $content->background_img) ?>"
                                alt="Background Image" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
