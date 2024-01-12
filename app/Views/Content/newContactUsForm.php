<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add Contact Us
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
            <h2>Add Contact Us Section Content</h2>
            <div class="col-10">
                <div class="form-group">
                    <?= form_open_multipart("/content/new") ?>
                    <div class="mb-3">
                        <label for="content_title" class="form-label">Enter Company's Address</label>
                        <textarea class="form-control" name="content_title" id="content_title" cols="30" rows="5" placeholder="Enter content for Hero Section"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Enter Company's Phone Number</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                            placeholder="Enter phone number">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Enter Company's Email Address</label>
                        <input type="text" name="content" id="content" class="form-control"
                            placeholder="Enter email address">
                    </div>

                    <div class="mb-3">
                        <label for="additional_content" class="form-label">Enter Company's Website</label>
                        <input type="text" name="additional_content" id="additional_content" class="form-control"
                            placeholder="Enter website url">
                    </div>

                    


                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <input type="file" name="background_img" class="form-control" id="background_img">
                    </div>
                    <input type="hidden" name="content_section" id="content_section" value="contact_us_section">
                    <input type="hidden" name="pages_id" id="pages_id" value="<?= $paging->page_id ?>">

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