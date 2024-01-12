<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Pages<?= $this->endSection() ?>
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
                    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Pages</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
 
                <div class="row">
                <h4><a href="<?= url_to("Pages::new") ?>">Add A Page</a></h4>
                    <div class="col-sm-12">


                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 86.2px;">
                                        ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 120.2px;">
                                        Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 64.2px;">
                                        Slugs</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="width: 30.2px;">
                                        Delete
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 72.2px;">
                                        Edit</th>
 
                                </tr>
                            </thead>

                            <tbody>
                            
                            <?php foreach($pages as $page): ?>
                                    <tr>
                                    <td><?= esc($page->page_id) ?></td>
                                    <td><?= esc($page->page_title) ?></td>
                                    <td><?= esc($page->slug) ?></td>
                                    <td><a class="btn btn-outline-danger" 
                                    href="javascript:void(0);"
                                        onclick="confirmDelete(<?= $page->page_id ?>)">Delete</a></td>
                                    <td><a class="btn btn-outline-primary" 
                                            href="<?= url_to("Pages::edit", $page->page_id)  ?>">Edit</a></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(contentId) {
        var confirmation = confirm("Are you sure you want to delete this page?");

        if (confirmation) {
            // User clicked "OK," proceed with the deletion
            window.location.href = "<?= base_url("/page/delete/") ?>" + contentId;
        } else {
            // User clicked "Cancel," do nothing
        }
    }
</script>

<?= $this->endSection() ?>