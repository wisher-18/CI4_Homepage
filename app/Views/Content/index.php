<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>All Content
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<?= $this->include("Home/navbar") ?>
</div>



<div class="row justify-content-center">

    <div class="homeContainer col-11 row justify-content-center">
        <div class="contactrow ">
            <?php if (session()->has("errors")): ?>
                <ul>
                    <?php foreach (session("errors") as $error): ?>
                        <li>
                            <?= $error ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <h2>All Content</h2>
            <h4><a href="<?= url_to("Content::new") ?>">Add Content</a></h4>

            <div class="col-11">
                <table class="table table-hover table-bordered border-primary">
                    <thead class="">
                        <th>Id</th>

                        <th>Title</th>
                        <th>Sub-heading</th>
                        <th>Content</th>
                        <th>Content_Section</th>
                        <th>Additional Content</th>
                        <th>Primary btn</th>
                        <th>Primary url</th>
                        <th>Secondary btn</th>
                        <th>Secondary url</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </thead>
                    <tbody class="">
                        <?php foreach ($contents as $content): ?>
                            <tr>
                                <td>
                                    <?= esc($content->content_id) ?>
                                </td>
                                <td>
                                    <?= esc($content->content_title) ?>
                                </td>
                                <td>
                                    <?= esc($content->content_sub_heading) ?>
                                </td>
                                <td>
                                    <?= esc($content->content) ?>
                                </td>
                                <td>
                                    <?= esc($content->content_section) ?>
                                </td>
                                <td>
                                    <?= esc($content->additional_content) ?>
                                </td>
                                <td>
                                    <?= esc($content->primary_btn) ?>
                                </td>
                                <td>
                                    <?= esc($content->primary_btn_url) ?>
                                </td>
                                <td>
                                    <?= esc($content->secondary_btn) ?>
                                </td>
                                <td>
                                    <?= esc($content->secondary_btn_url) ?>
                                </td>
                                <td>
                                    <?= esc($content->created_at) ?>
                                </td>
                                <td>
                                    <?= esc($content->updated_at) ?>
                                </td>
                                <td>
                                    <a class="btn btn-outline-danger" href="javascript:void(0);"
                                        onclick="confirmDelete(<?= $content->content_id ?>)">Delete
                                    </a>
                                    </td>
                                    <td><a class="btn btn-outline-primary"
                                            href="<?= url_to("Content::edit", $content->content_id) ?>">Edit</a></td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?= $pager->simplelinks()?>
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
<?= $this->include("Home/footer") ?>
<?= $this->endSection() ?>