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
                    <?= form_open_multipart("/content/new") ?>
                    <div class="mb-3">
                        <label for="content_title" class="form-label">Name</label>
                        <input type="text" name="content_title" id="content_title" class="form-control"
                            placeholder="Enter name of the customer">
                    </div>
                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Enter City</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                            placeholder="Enter name of the city">
                    </div>


                    <div class="mb-3">
                        <label for="content" class="form-label">Feedback</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="5"
                            placeholder="Enter feedback from the customer"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content_image" class="form-label">Customer's Image</label><br>
                        <input type="file" name="content_image" class="form-control" id="content_image">
                    </div>


                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <input type="file" name="background_img" class="form-control" id="background_img">
                    </div>

                    <input type="hidden" name="content_section" id="content_section" value="testimonial_section">
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