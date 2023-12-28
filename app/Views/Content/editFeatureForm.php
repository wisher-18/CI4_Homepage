<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Edit Features Content<?= $this->endSection() ?>
<?= $this->section("content") ?>

<div class="row justify-content-center">
    <div class="homeContainer col-10 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Edit Features Content</h2>
            <?php if (session()->has("errors")): ?>
                <ul>
                    <?php foreach (session("errors") as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- Display Success Messages -->
            <?php if (session('message') !== null): ?>
                <div class="alert alert-success" role="alert"><?= session('message') ?></div>
            <?php endif ?>

            <div class="col-12">
                <form action="<?= base_url("content/update/" . $content->content_id) ?>" method="post">
                    <input type="hidden" name="_method" value="patch">

                    <div class="col-6">

                        <!-- Content Title -->
                        <div class="mb-3">
                            <label for="content_title" class="form-label">Content Title</label>
                            <input type="text" name="content_title" id="content_title" class="form-control"
                            value="<?= old("content_title", esc($content->content_title)) ?>">
                        </div>
                        
                        <!-- Content Subheading -->
                        <div class="mb-3">
                            <label for="content_sub_heading" class="form-label">Content Subheading</label>
                            <input type="text" name="content_sub_heading" id="content_sub_heading" class="form-control"
                            value="<?= old("content_sub_heading", esc($content->content_sub_heading)) ?>">
                        </div>
                        
                        <!-- Fields for Features Section -->
                        <div class="mb-3">
                            <label for="feature_count" class="form-label">Number of Features</label>
                            <input type="number" name="feature_count" id="feature_count" class="form-control" min="1"
                            value="<?= old("feature_count", $content->feature_count) ?>" onchange="generateFeatureFields()">
                        </div>
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
                                                <label for="icon<?= $i ?>" class="form-label">Icon Class</label>
                                                <input type="text" id="icon<?= $i ?>" class="form-control"
                                                    value="<?= old('icon' . $i, esc($features[$i - 1]["icon"])) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="feature_heading<?= $i ?>" class="form-label">Feature Heading</label>
                                                <input type="text" id="feature_heading<?= $i ?>" class="form-control"
                                                    value="<?= old('feature_heading' . $i, esc($features[$i - 1]["feature_heading"])) ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="feature_content<?= $i ?>" class="form-label">Feature Content</label>
                                                <textarea class="form-control" id="feature_content<?= $i ?>" cols="30"
                                                    rows="5"><?= old('feature_content' . $i, esc($features[$i - 1]["feature_content"])) ?></textarea>
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

                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button class="btn btn-outline-primary" onclick="prepareFormData()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function generateFeatureFields() {
        const featureCount = document.getElementById("feature_count").value;
        const generatedFeatureFields = document.getElementById("generated_feature_fields");

        // Remove existing fields beyond the current feature count
        Array.from(generatedFeatureFields.children).forEach((child, index) => {
            if (index + 1 > featureCount) {
                child.remove();
            }
        });

        // Add or update fields based on the feature count
        for (let i = 1; i <= featureCount; i++) {
            const existingFields = document.getElementById(`icon${i}`);
            if (!existingFields) {
                generatedFeatureFields.innerHTML += `
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Feature ${i}</h5>
                            <div class="mb-3">
                                <label for="icon${i}" class="form-label">Icon Class</label>
                                <input type="text" id="icon${i}" class="form-control" placeholder="Enter icon class for feature ${i}">
                            </div>
                            <div class="mb-3">
                                <label for="feature_heading${i}" class="form-label">Feature Heading</label>
                                <input type="text" id="feature_heading${i}" class="form-control" placeholder="Enter heading for feature ${i}">
                            </div>
                            <div class="mb-3">
                                <label for="feature_content${i}" class="form-label">Feature Content</label>
                                <textarea class="form-control" id="feature_content${i}" cols="30" rows="5" placeholder="Enter content for feature ${i}"></textarea>
                            </div>
                            <button type="button" class="btn btn-danger" onclick="deleteFeature(${i})">Delete</button>
                        </div>
                    </div>
                </div>
                `;
            }
        }
    }

    function deleteFeature(featureIndex) {
        const generatedFeatureFields = document.getElementById("generated_feature_fields");
        const featureCard = document.getElementById(`icon${featureIndex}`).closest('.col-md-4');
        generatedFeatureFields.removeChild(featureCard);

        // Update feature count
        const updatedFeatureCount = generatedFeatureFields.children.length;
        document.getElementById("feature_count").value = updatedFeatureCount;

        // Regenerate feature fields
        generateFeatureFields();
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
