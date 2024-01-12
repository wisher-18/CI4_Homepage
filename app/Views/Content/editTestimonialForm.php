<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add Testimonial
<?= $this->endSection() ?>
<?= $this->section("content") ?>

<?php if (session()->has("errors")): ?>
    <ul>
        <?php foreach (session("errors") as $error): ?>
            <li>
                <?= $error ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="homeContainer col-8 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Customer's Thought</h2>
            <div class="col-10">
                <div class="form-group">
                <form action="<?= base_url("content/update/" . $content->content_id) ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="content_title" class="form-label">Name</label>
                        <input type="text" name="content_title" id="content_title" class="form-control"
                        value="<?= old("content_title", esc($content->content_title)) ?>"
                            placeholder="Enter name of the customer">
                    </div>
                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Enter City</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                        value="<?= old("content_sub_heading", esc($content->content_sub_heading)) ?>"
                            placeholder="Enter name of the city">
                    </div>


                    <div class="mb-3">
                        <label for="content" class="form-label">Feedback</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="5"
                            placeholder="Enter feedback from the customer"><?= old("content", esc($content->content)) ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content_image" class="form-label">Customer's Image</label><br>
                        <?php if (!empty($content->content_image)) : ?>
                                <img src="<?= base_url('public/content_images/' . $content->content_image); ?>" alt="Previous Image" class="mb-2" style="max-width: 200px; max-height: 200px;">
                                <input type="file" name="content_image" class="form-control" id="content_image">
                                <input type="hidden" name="content_image" value="<?= old("content_image", esc($content->content_image)) ?>">
                                <small class="text-muted">Leave this field empty if you don't want to change the image.</small>
                            <?php else : ?>
                                <input type="file" name="content_image" class="form-control" id="content_image">
                            <?php endif; ?>
                    </div>


                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <?php if (!empty($content->background_img)): ?>
                                <img src="<?= base_url('public/background_img/' . $content->background_img); ?>"
                                    alt="Background Image" class="mb-2" style="max-width: 200px; max-height: 200px;">
                                <input type="file" name="background_img" class="form-control" id="background_img">
                                <small class="text-muted">Leave this field empty if you don't want to change the
                                    image.</small>
                            <?php else: ?>
                                <input type="file" name="background_img" class="form-control" id="background_img">
                            <?php endif; ?>
                    </div>

                    <input type="hidden" name="content_section" id="content_section" value="testimonial_section">
                    <input type="hidden" name="pages_id" id="pages_id" value="<?= old("pages_id", esc($content->pages_id))?>">
                    

                    <div class="mb-3">
                        <button class="btn btn-outline-primary" >Submit</button>
                    </div>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>