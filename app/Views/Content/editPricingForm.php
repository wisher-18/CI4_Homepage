<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Edit Pricing Content
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
            <h2>Edit Pricing Section Content</h2>
            <div class="col-10">
                <div class="form-group">
                <form action="<?= base_url("content/update/" . $content->content_id) ?>" method="post">
                    <div class="mb-3">
                        <label for="content_title" class="form-label">Pricing Title</label>
                        <input type="text" name="content_title" id="content_title" class="form-control"
                            value="<?= old("content_title", esc($content->content_title)) ?>"
                            placeholder="title for pricing">
                    </div>

                    <div class="mb-3">
                        <label for="content_sub_heading" class="form-label">Price for the plan</label>
                        <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                        value="<?= old("content_sub_heading", esc($content->content_sub_heading)) ?>"
                            placeholder="Enter price e.g. Free/150 Rs">
                    </div>
                    <div class="mb-3">
                        <label for="additional_content" class="form-label">Enter Icon Class</label>
                        <input type="text" name="additional_content" id="additional_content" class="form-control"
                        value="<?= old("additional_content", esc($content->additional_content)) ?>"
                            placeholder="e.g. laptop, gear, trophy">
                    </div>

                    <div class="mb-3">
                        <!-- Fields for Features Section -->
                        <div class="mb-3">
                            <label for="feature_count" class="form-label">Number of Features</label>
                            <input type="number" name="feature_count" id="feature_count" class="form-control" min="1" value="1"
                            value="<?= old("feature_count", $content->feature_count) ?>" onchange="generateFeatureFields()">
                        </div>

                    <!-- Generated Feature Fields -->
                    <div id="generated_feature_fields" class="row">
                        <?php
                        // Decode the JSON string from feature_data column
                        $features = json_decode($content->feature_data, true);

                        for ($i = 1; $i <= $content->feature_count; $i++):
                            // Check if features array is set and has the specific index
                            if (isset($features[$i - 1])):
                                ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Feature <?= $i ?></h5>

                                            <div class="mb-3">
                                                <label for="feature_heading<?= $i ?>" class="form-label">Feature Heading</label>
                                                <input type="text" id="feature_heading<?= $i ?>" class="form-control"
                                                    value="<?= old('feature_heading' . $i, esc($features[$i - 1]["feature_heading"])) ?>">
                                            </div>

                                            <button type="button" class="btn btn-danger" onclick="deleteFeature(<?= $i ?>)">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endif;
                        endfor;
                        ?>
                    </div>

                    <!-- Remaining form fields -->
                    <input type="hidden" name="feature_data" id="feature_data" value="">
                    <input type="hidden" name="content_section" id="content_section" value="pricing_section">
                    <input type="hidden" name="pages_id" id="pages_id" value="15">

                    <div class="mb-3">
                    <label for="primary_btn_name" class="form-label">Name for the primary button:</label>
                            <input type="text" class="form-control" name="primary_btn_name" id="primary_btn_name"
                            value="<?= set_value('primary_btn_name', old('primary_btn_name', $content->primary_btn_name)); ?>"
                             placeholder="Enter name for primary button">
                    </div>

                    <div class="mb-3">
                    <label for="primary_btn_url" class="form-label">URL for the primary button:</label>
                            <input type="text" class="form-control" name="primary_btn_url" id="primary_btn_url"
                            value="<?= set_value('primary_btn_url', old('primary_btn_url', $content->primary_btn_url)); ?>"
                             placeholder="Enter URL for primary button">
                    </div>
                    
                    <!-- Background Image -->
                    <div class="mb-3 col-6">
                        <label for="background_img" class="form-label">Background Image</label><br>
                        <?php if (!empty($content->background_img)): ?>
                            <img src="<?= base_url('public/background_img/' . $content->background_img); ?>"
                                alt="Background Image" class="mb-2" style="max-width: 200px; max-height: 200px;">
                            <input type="file" name="background_img" class="form-control" id="background_img">
                            <small class="text-muted">Leave this field empty if you don't want to change the image.</small>
                        <?php else: ?>
                            <input type="file" name="background_img" class="form-control" id="background_img">
                        <?php endif; ?>
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


    function generateFeatureFields() {
        const featureCount = document.getElementById("feature_count").value;
        const generatedFeatureFields = document.getElementById("generated_feature_fields");
        generatedFeatureFields.innerHTML = "";

        for (let i = 1; i <= featureCount; i++) {
            generatedFeatureFields.innerHTML += `
           
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

                feature_heading: document.getElementById(`feature_heading${i}`).value,
            });
        }

        const featureDataInput = document.getElementById('feature_data');
        featureDataInput.value = JSON.stringify(featureData);

        // Submit the form
        document.querySelector('form').submit();
    }
</script>

<?= $this->endSection() ?>