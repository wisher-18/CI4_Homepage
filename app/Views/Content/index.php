<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>All Content<?= $this->endSection() ?>
<?= $this->section("content") ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <?php if (session()->has("errors")): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach (session("errors") as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <!-- Display Success Messages -->
            <?php if (session('message') !== null) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session('message') ?>
                </div>
            <?php endif ?>
            <h2 class="mb-4">All Content</h2>
            <a href="<?= route_to("Content::new") ?>" class="btn btn-primary mb-4">Add Content</a>

            <div class="table-responsive">
                <table class="table table-hover table-bordered border-primary">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Sub-heading</th>
                            <th>Content</th>
                            <th>Content Image</th>
                            <th>Content Section</th>
                            <th>Additional Content</th>
                            <th>Background Image</th>
                            <th>Primary Button</th>
                            <th>Primary Button Name</th>
                            <th>Primary URL</th>
                            <th>Secondary Button</th>
                            <th>Secondary Button Name</th>
                            <th>Secondary URL</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contents as $content): ?>
                            <tr>
                                <td><?= esc($content->content_id) ?></td>
                                <td><?= esc($content->content_title) ?></td>
                                <td><?= esc($content->content_sub_heading) ?></td>
                                <td><?= esc(strlen($content->content) > 50 ? substr($content->content, 0, 50) . '...' : $content->content) ?></td>

                                <td>
                                    <img src="<?= base_url("public/content_images/".$content->content_image) ?>"
                                        class="img-thumbnail" alt="Content Image">
                                </td>
                                <td><?= esc($content->content_section) ?></td>
                                <td><?= esc($content->additional_content) ?></td>
                                <td>
                                    <img src="<?= base_url("public/background_img/".$content->background_img) ?>"
                                        class="img-thumbnail" alt="Background Image">
                                </td>
                                <td><?= esc($content->primary_btn) ?></td>
                                <td><?= esc($content->primary_btn_name) ?></td>
                                <td><?= esc($content->primary_btn_url) ?></td>
                                <td><?= esc($content->secondary_btn) ?></td>
                                <td><?= esc($content->secondary_btn_name) ?></td>
                                <td><?= esc($content->secondary_btn_url) ?></td>
                                <td><?= esc($content->created_at) ?></td>
                                <td><?= esc($content->updated_at) ?></td>
                                <td>
                                    <a class="btn btn-outline-danger" href="javascript:void(0);"
                                        onclick="confirmDelete(<?= $content->content_id ?>)">Delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary"
                                        href="<?= base_url("content/edit/".$content->content_id) ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?= $pager->links() ?>
        </div>
    </div>
</div>

<script>
    function confirmDelete(contentId) {
        var confirmation = confirm("Are you sure you want to delete this content?");

        if (confirmation) {
            // User clicked "OK," proceed with the deletion
            window.location.href = "<?= base_url("/content/delete/") ?>" + contentId;
        } else {
            // User clicked "Cancel," do nothing
        }
    }
</script>

<?= $this->endSection() ?>
