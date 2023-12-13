<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete Page
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<?= $this->include("home/navbar") ?>
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

            <h1>Delete Page</h1>
            <p>Are you sure?</p>

            <form action="<?= base_url("page/delete/" . $page->page_id) ?>" method="delete">

                <input type="hidden" name="_method" value="delete">

                <button>Yes</button>

            </form>

        </div>
    </div>
</div>
<?= $this->include("Home/footer") ?>
<?= $this->endSection() ?>