<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add New Content<?= $this->endSection() ?>
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
    <div class="homeContainer col-6 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Add Content</h2>
            <div class="col-8">
                <div class="form-group">
                    <?= form_open_multipart("/content/new") ?>

                    <div class="mb-3">
                        <label class="form-label">
                            Select Page:
                            <select class="form-control" name="pages_id">
                                <?php if (!empty($pages)): ?>
                                    <?php foreach ($pages as $page): ?>
                                        <option value="<?= $page->page_id; ?>">
                                            <?= $page->page_title; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="section" class="form-label">
                            Select Section:
                            <select name="content_section" class="form-control" id="section" onchange="showFields()">
                                <option value="hero" selected>Hero Section</option>
                                <option value="features">Features Section</option>
                                <option value="other_section">Other Section</option>
                            </select>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label for="content_title" class="form-label">Content Title</label>
                        <input type="text" name="content_title" id="content_title" class="form-control" placeholder="Enter title of the content">
                    </div>

                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Content Subheading</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control" placeholder="Enter subheading of the content">
                    </div>

                    <div id="feature_fields" style="display: none;">
                        <!-- Fields for Features Section -->
                        <div class="mb-3">
                            <label for="feature_count" class="form-label">Number of Features</label>
                            <input type="number" name="feature_count" id="feature_count" class="form-control" min="1" value="1" onchange="generateFeatureFields()">
                        </div>

                        <!-- Generated Feature Fields -->
                        <div id="generated_feature_fields"></div>
                    </div>

                    <div id="hero_fields">
                        <!-- Fields for Hero Section -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Hero Content</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="5" placeholder="Enter content for Hero Section"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="content_image" class="form-label">Content Image</label><br>
                            <input type="file" name="content_image" class="form-control" id="content_image">
                        </div>

                        <div class="mb-3">
                            <label for="primary_btn" class="form-label">
                                Need primary button?
                                <input type="radio" name="primary_btn" value="yes" <?= set_radio('primary_btn', 'yes'); ?> onchange="toggleInputFields('primary_btn', this.value)" /> Yes
                                <input type="radio" name="primary_btn" value="no" <?= set_radio('primary_btn', 'no'); ?> onchange="toggleInputFields('primary_btn', this.value)" /> No
                            </label>

                            <!-- Show the input fields only if the user wants a primary button -->
                            <div class="inputFields" id="primary_btn_fields" style="display: none;">
                                <label for="primary_btn_name" class="form-label">Name for the primary button:</label>
                                <input type="text" class="form-control" name="primary_btn_name" id="primary_btn_name" value="<?= set_value('primary_btn_name'); ?>" placeholder="Enter name for primary button">

                                <label for="primary_btn_url" class="form-label">URL for the primary button:</label>
                                <input type="text" class="form-control" name="primary_btn_url" id="primary_btn_url" value="<?= set_value('primary_btn_url'); ?>" placeholder="Enter URL for primary button">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="secondary_btn" class="form-label">
                                Need secondary button?
                                <input type="radio" name="secondary_btn" value="yes" <?= set_radio('secondary_btn', 'yes'); ?> onchange="toggleInputFields('secondary_btn', this.value)" /> Yes
                                <input type="radio" name="secondary_btn" value="no" <?= set_radio('secondary_btn', 'no'); ?> onchange="toggleInputFields('secondary_btn', this.value)" /> No
                            </label>

                            <!-- Show the input fields only if the user wants a secondary button -->
                            <div class="inputFields" id="secondary_btn_fields" style="display: none;">
                                <label for="secondary_btn_name" class="form-label">Name for the secondary button:</label>
                                <input type="text" class="form-control" name="secondary_btn_name" id="secondary_btn_name" value="<?= set_value('secondary_btn_name'); ?>" placeholder="Enter name for secondary button">

                                <label for="secondary_btn_url" class="form-label">URL for the secondary button:</label>
                                <input type="text" class="form-control" name="secondary_btn_url" id="secondary_btn_url" value="<?= set_value('secondary_btn_url'); ?>" placeholder="Enter URL for secondary button">
                            </div>
                        </div>
                    </div>

                    <!-- Remaining form fields -->
                    <input type="hidden" name="feature_data" id="feature_data" value="">

                    <div class="mb-3">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <input type="file" name="background_img" class="form-control" id="background_img">
                    </div>

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
    function toggleInputFields(btnType, value) {
        const fieldsContainer = document.getElementById(`${btnType}_fields`);
        fieldsContainer.style.display = value === 'yes' ? 'block' : 'none';
    }

    function showFields() {
        const section = document.getElementById("section").value;
        const featureFieldsContainer = document.getElementById("feature_fields");
        const heroFieldsContainer = document.getElementById("hero_fields");
        const generatedFeatureFields = document.getElementById("generated_feature_fields");

        if (section === "features") {
            featureFieldsContainer.style.display = "block";
            heroFieldsContainer.style.display = "none";
            generatedFeatureFields.innerHTML = ""; // Clear generated fields for Features Section
        } else if (section === "hero") {
            featureFieldsContainer.style.display = "none";
            heroFieldsContainer.style.display = "block";
            generatedFeatureFields.innerHTML = ""; // Clear generated fields for Features Section
        } else {
            featureFieldsContainer.style.display = "none";
            heroFieldsContainer.style.display = "none";
            generatedFeatureFields.innerHTML = ""; // Clear generated fields for Features Section
        }
    }

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
            <div class="mb-3">
                <label for="feature_content${i}" class="form-label">Feature Content ${i}</label>
                <textarea class="form-control" id="feature_content${i}" cols="30" rows="5" placeholder="Enter content for feature ${i}"></textarea>
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
                feature_heading: document.getElementById(`feature_heading${i}`).value,
                feature_content: document.getElementById(`feature_content${i}`).value
            });
        }

        const featureDataInput = document.getElementById('feature_data');
        featureDataInput.value = JSON.stringify(featureData);

        // Submit the form
        document.querySelector('form').submit();
    }
</script>

<?= $this->endSection() ?>
