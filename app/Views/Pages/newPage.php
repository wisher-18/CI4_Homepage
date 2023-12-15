<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section("title") ?>Add New Page<?= $this->endSection()?>
<?= $this->section("content") ?>



            
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
                        <h2>Add A New Page</h2>
                        <div class="col-10">
                            <div class="form-group">
                                <?= form_open_multipart("/page/new") ?>
            
                                <div class="mb-3">
                                    <label for="page_title" class="form-label">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control"
                                        placeholder="Enter title of the page">
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

<?= $this->endSection() ?>