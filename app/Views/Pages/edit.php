<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Add New Page<?= $this->endSection()?>
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
                    <?php if (session('message') !== null) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('message') ?>
                        </div>
                    <?php endif ?>
                        <h2>Add A New Page</h2>
                        <div class="col-10">
                            <div class="form-group">
                                <?= form_open("/page/update/".$pages->page_id) ?>
            
                                <div class="mb-3">
                                    <label for="page_title" class="form-label">Page Title</label>
                                    <input type="text" name="page_title" id="page_title" class="form-control"
                                        value="<?= old("page_title", esc($pages->page_title)) ?>" placeholder="Enter title of the page">
                                </div>
                                
                                <div class="mb-3">
                                    <button class="btn btn-outline-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<?= $this->include("Home/footer")?>
<?= $this->endSection() ?>