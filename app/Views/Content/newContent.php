<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Add Content
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<?= $this->include("Home/navbar") ?>
<?php if (session()->has("errors")): ?>
    <ul>
        <?php foreach (session("errors") as $error): ?>
            <li>
                <?= $error ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
<div class="row justify-content-center">

    <div class="homeContainer col-6 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Add Content</h2>
            <div class="col-8">
                <div class="form-group">
                    <?= form_open_multipart("/content/new") ?>

                    <div class="mb-3">
    <label for="content_title" class="form-label">Content Title</label>
    <input type="text" name="content_title" id="content_title" class="form-control"
        placeholder="Enter title of the content" ?>
</div>
<div class="mb-3">
    <label for="content_sub_heading" class="form-label">Content Subheading</label>
    <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
        placeholder="Enter subheading of the content">
</div>
<div class="mb-3">
    <label for="content_image" class="form-label">Content Image</label><br>
    
        <input type="file" name="content_image" class="form-control" id="content_image">
    
</div>

<div class="mb-3">
    <label class="form-label">
        Select Page:
        <select class="form-control" name="pages_id">
            <?php if (!empty($pageIds)): ?>
                <?php foreach ($pageIds as $pageId): ?>
                    <option value="<?= $pageId->page_id; ?>">
                        <?= $pageId->page_title; ?>
                    </option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </label>
</div>
<div class="mb-3">
    <label for="content">Your content</label><br>
    <textarea class="form-control" name="content" id="content" cols="30"
        rows="10"></textarea>
</div>
<div class="mb-3">
    <label for="content_section" class="form-label">Content Section</label>
    <input type="text" name="content_section" id="content_section" class="form-control"
      placeholder="features/hero/other_section">
</div>
<div class="mb-3">
    <label for="additional_content" class="form-label">Additional Content</label>
    <input type="text" name="additional_content" id="additional_content" class="form-control"
        placeholder="Enter additional content separated by comma">
</div>
<div class="mb-3">
    <label for="primary_btn" class="form-label">Need primary button?
        <input type="radio" name="primary_btn" value="yes" <?= set_radio('primary_btn', 'yes'); ?> onchange="toggleUrlInput('primary_btn_url', this.value)" /> Yes
        <input type="radio" name="primary_btn" value="no" <?= set_radio('primary_btn', 'no'); ?> onchange="toggleUrlInput('primary_btn_url', this.value)" /> No
    </label>

    <!-- Show the URL input only if the user wants a primary button -->
    <label for="primary_btn_url" class="urlLabel" style="display: none;">
        URL for the primary button:
        <input type="text" name="primary_btn_url" id="primary_btn_url"
            value="<?= set_value('primary_btn_url'); ?>" />
    </label>
</div>

<div class="mb-3">
    <label for="secondary_btn" class="form-label">Need secondary button?
        <input type="radio" name="secondary_btn" value="yes" <?= set_radio('secondary_btn', 'yes'); ?> onchange="toggleUrlInput('secondary_btn_url', this.value)" /> Yes
        <input type="radio" name="secondary_btn" value="no" <?= set_radio('secondary_btn', 'no'); ?> onchange="toggleUrlInput('secondary_btn_url', this.value)" /> No
    </label>

    <!-- Show the URL input only if the user wants a secondary button -->
    <label for="secondary_btn_url" class="urlLabel" style="display: none;">
        URL for the secondary button:
        <input type="text" name="secondary_btn_url" id="secondary_btn_url"
            value="<?= set_value('secondary_btn_url'); ?>" />
    </label>
</div>

<script>
    function toggleUrlInput(inputId, value) {
        const urlLabel = document.querySelector(`label[for="${inputId}"]`);
        urlLabel.style.display = value === 'yes' ? 'block' : 'none';
    }
</script>



<div class="mb-3">
    <label for="background_img" class="form-label">Background Image</label><br>
        <input type="file" name="background_img" class="form-control" id="content_image">
   
</div>



<div class="mb-3">
    <button class="btn btn-outline-primary">Submit</button>
</div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->include("Home/footer") ?>
<?= $this->endSection() ?>