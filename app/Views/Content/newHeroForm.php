<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add Hero Content
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
            <h2>Add Hero Content</h2>
            <div class="col-10">
                <div class="form-group">
                    <?= form_open_multipart("/content/new") ?>
                    <div class="mb-3">
                        <label for="content_title" class="form-label">Content Title</label>
                        <input type="text" name="content_title" id="content_title" class="form-control"
                            placeholder="Enter title of the content">
                    </div>

                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Content Subheading</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                            placeholder="Enter subheading of the content">
                    </div>


                    <div class="mb-3">
                        <label for="content" class="form-label">Hero Content</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="5"
                            placeholder="Enter content for Hero Section"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content_image" class="form-label">Content Image</label><br>
                        <input type="file" name="content_image" class="form-control" id="content_image">
                    </div>

                    <div class="mb-3">
                        <label for="primary_btn" class="form-label">
                            Need primary button?
                            <input type="radio" name="primary_btn" value="yes" <?= set_radio('primary_btn', 'yes'); ?>
                                onchange="toggleInputFields('primary_btn', this.value)" /> Yes
                            <input type="radio" name="primary_btn" value="no" <?= set_radio('primary_btn', 'no'); ?>
                                onchange="toggleInputFields('primary_btn', this.value)" /> No
                        </label>

                        <!-- Show the input fields only if the user wants a primary button -->
                        <div class="inputFields" id="primary_btn_fields" style="display: none;">
                            <label for="primary_btn_name" class="form-label">Name for the primary button:</label>
                            <input type="text" class="form-control" name="primary_btn_name" id="primary_btn_name"
                                value="<?= set_value('primary_btn_name'); ?>"
                                placeholder="Enter name for primary button">

                            <label for="primary_btn_url" class="form-label">URL for the primary button:</label>
                            <input type="text" class="form-control" name="primary_btn_url" id="primary_btn_url"
                                value="<?= set_value('primary_btn_url'); ?>" placeholder="Enter URL for primary button">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="secondary_btn" class="form-label">
                            Need secondary button?
                            <input type="radio" name="secondary_btn" value="yes" <?= set_radio('secondary_btn', 'yes'); ?> onchange="toggleInputFields('secondary_btn', this.value)" /> Yes
                            <input type="radio" name="secondary_btn" value="no" <?= set_radio('secondary_btn', 'no'); ?>
                                onchange="toggleInputFields('secondary_btn', this.value)" /> No
                        </label>

                        <!-- Show the input fields only if the user wants a secondary button -->
                        <div class="inputFields" id="secondary_btn_fields" style="display: none;">
                            <label for="secondary_btn_name" class="form-label">Name for the secondary
                                button:</label>
                            <input type="text" class="form-control" name="secondary_btn_name" id="secondary_btn_name"
                                value="<?= set_value('secondary_btn_name'); ?>"
                                placeholder="Enter name for secondary button">

                            <label for="secondary_btn_url" class="form-label">URL for the secondary button:</label>
                            <input type="text" class="form-control" name="secondary_btn_url" id="secondary_btn_url"
                                value="<?= set_value('secondary_btn_url'); ?>"
                                placeholder="Enter URL for secondary button">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <input type="file" name="background_img" class="form-control" id="background_img">
                    </div>

                    <input type="hidden" name="content_section" id="content_section" value="hero">
                   
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

<script>
    function toggleInputFields(btnType, value) {
        const fieldsContainer = document.getElementById(`${btnType}_fields`);
        fieldsContainer.style.display = value === 'yes' ? 'block' : 'none';
    }
</script>

<?= $this->endSection() ?>