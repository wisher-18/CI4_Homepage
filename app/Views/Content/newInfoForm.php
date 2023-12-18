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
            <h2>Add Other Section Content</h2>
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
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="5"
                            placeholder="Enter content for Hero Section"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content_image" class="form-label">Content Image</label><br>
                        <input type="file" name="content_image" class="form-control" id="content_image">
                    </div>

                    <div class="mb-3">
                        <!-- Fields for Features Section -->
                        <div class="mb-3">
                            <label for="feature_count" class="form-label">Number of Features</label>
                            <input type="number" name="feature_count" id="feature_count" class="form-control" min="1" value="1" onchange="generateFeatureFields()">
                        </div>

                        <!-- Generated Feature Fields -->
                        <div id="generated_feature_fields"></div>
                    </div>


                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <input type="file" name="background_img" class="form-control" id="background_img">
                    </div>

                    <input type="hidden" name="feature_data" id="feature_data" value="">
                    <input type="hidden" name="content_section" id="content_section" value="info_section">
                    <input type="hidden" name="pages_id" id="pages_id" value="15">

                    <div class="mb-3">
                        <button class="btn btn-outline-primary" onclick="prepareFormData()">Submit</button>
                    </div>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    function generateFeatureFields() {
        const featureCount = document.getElementById("feature_count").value;
        const generatedFeatureFields = document.getElementById("generated_feature_fields");
        generatedFeatureFields.innerHTML = "";

        for (let i = 1; i <= featureCount; i++) {
            generatedFeatureFields.innerHTML += `
            <div class="mb-3">
                <label for="icon${i}" class="form-label">Icon Class for Feature ${i}</label>
                <input type="text" id="icon${i}" class="form-control" placeholder="Enter icon class for feature ${i}">
            </div>
            <div class="mb-3">
                <label for="feature_heading${i}" class="form-label">Feature Heading ${i}</label>
                <input type="text" id="feature_heading${i}" class="form-control" placeholder="Enter heading for feature ${i}">
            </div>
            `;
        }
    }

    function prepareFormData() {
        // Add the JSON data to the hidden input
        const featureData = [];
        const featureCount = document.getElementById("feature_count").value;

        for (let i = 1; i <= featureCount; i++) {
            featureData.push({
                icon: document.getElementById(`icon${i}`).value,
                feature_heading: document.getElementById(`feature_heading${i}`).value
            });
        }

        const featureDataInput = document.getElementById('feature_data');
        featureDataInput.value = JSON.stringify(featureData);

        // Submit the form
        document.querySelector('form').submit();
    }
</script>

<?= $this->endSection() ?>