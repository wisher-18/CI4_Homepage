<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Edit Other Content
<?= $this->endSection() ?>
<?= $this->section("content") ?>

<div class="row justify-content-center">
    <div class="homeContainer col-8 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Edit Other Content</h2>
            <?php if (session()->has("errors")): ?>
                <ul>
                    <?php foreach (session("errors") as $error): ?>
                        <li>
                            <?= $error ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- Display Success Messages -->
            <?php if (session('message') !== null): ?>
                <div class="alert alert-success" role="alert">
                    <?= session('message') ?>
                </div>
            <?php endif ?>

            <div class="col-10">
                <div class="form-group">
                    <form action="<?= base_url("content/update/" . $content->content_id) ?>" method="post">
                        <input type="hidden" name="_method" value="patch">

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

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="5" placeholder="Enter content for Hero Section"><?= old("content", esc($content->content)) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="content_image" class="form-label">Content Image</label><br>
                            <?php if (!empty($content->content_image)) : ?>
                                <img src="<?= base_url('public/content_images/' . $content->content_image); ?>" alt="Previous Image" class="mb-2" style="max-width: 200px; max-height: 200px;">
                                <input type="file" name="content_image" class="form-control" id="content_image">
                                <input type="hidden" name="old_image" value="<?= old("content_image", esc($content->content_image)) ?>">
                                <small class="text-muted">Leave this field empty if you don't want to change the image.</small>
                            <?php else : ?>
                                <input type="file" name="content_image" class="form-control" id="content_image">
                            <?php endif; ?>
                        </div>


                        <!-- Background Image -->
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

                        <!-- Submit Button -->
                        <div class="mb-3">
                        <button class="btn btn-outline-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>