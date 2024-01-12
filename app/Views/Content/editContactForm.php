<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Edit Contact Us
<?= $this->endSection() ?>
<?= $this->section("content") ?>



<div class="row justify-content-center">
    <div class="homeContainer col-8 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Edit Contact Us Section Content</h2>
            <?php if (session()->has("errors")): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach (session("errors") as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (session()->has('message')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session('message') ?>
                </div>
            <?php endif; ?>
            <div class="col-10">
                <div class="form-group">
                    <?= form_open_multipart("/content/update/".$content->content_id) ?>
                    
                    <div class="mb-3">
                        <label for="content_title" class="form-label">Enter Company's Address</label>
                        <textarea class="form-control" name="content_title" id="content_title" cols="30" rows="5" placeholder="Enter content for Hero Section"><?= old("content_title", esc($content->content_title)) ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Enter Company's Phone Number</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                            placeholder="Enter phone number"
                            value="<?= old("content_sub_heading", esc($content->content_sub_heading)) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Enter Company's Email Address</label>
                        <input type="text" name="content" id="content" class="form-control"
                            placeholder="Enter email address"
                            value="<?= old("content", esc($content->content)) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="additional_content" class="form-label">Enter Company's Website</label>
                        <input type="text" name="additional_content" id="additional_content" class="form-control"
                            placeholder="Enter website url"
                            value="<?= old("additional_content", esc($content->additional_content)) ?>">
                    </div>

                    


                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label>
                        <?php if (!empty($content->background_img)): ?>
                            <img src="<?= base_url('public/background_img/' . $content->background_img); ?>" alt="Background Image" class="mb-2" style="max-width: 200px; max-height: 200px;">
                            <input type="file" name="background_img" class="form-control" id="background_img">
                            <small class="text-muted">Leave this field empty if you don't want to change the image.</small>
                        <?php else: ?>
                            <input type="file" name="background_img" class="form-control" id="background_img">
                        <?php endif; ?>
                    </div>

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