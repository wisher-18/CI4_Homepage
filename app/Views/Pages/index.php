<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>All pages<?= $this->endSection()?>
<?= $this->section("content") ?>
<?= $this->include("Home/navbar")?>
</div>


            
            <div class="row justify-content-center">
            
                <div class="homeContainer col-8 row justify-content-center">
                    <div class="contactrow p-5">
                    <?php if (session()->has("errors")): ?>
                        <ul>
                            <?php foreach (session("errors") as $error): ?>
                                <li>
                                    <?= $error ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                        <h2>All Pages</h2>
                        <h4><a href="<?= url_to("Pages::new") ?>">Add A Page</a></h4>
                        
                        <div class="col-10">
                            <table class="table table-hover table-bordered border-primary">
                                <thead class="">
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </thead>
                                <tbody class="">
                                <?php foreach($pages as $page): ?>
                                    <tr>
                                    <td><?= esc($page->page_id) ?></td>
                                    <td><?= esc($page->page_title) ?></td>
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
<?= $this->include("Home/footer")?>
<?= $this->endSection() ?>