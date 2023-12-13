<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>New Session <?= $this->endSection()?>
<?= $this->section("content") ?>
<?= $this->include("Home/navbar")?>
<?php if(session()->has("errors")): ?>
    <ul>
        <?php foreach(session("errors") as $error): ?>
            <li>
                <?= $error ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
<div class="row justify-content-center">

    <div class="homeContainer col-6 row justify-content-center">
        <div class="contactrow p-5">
            <h2>Add Section</h2>
            <div class="col-8">
                <div class="form-group">
                    <?= form_open_multipart("/section/new") ?>
                    <?= $this->include("Home/sectionForm") ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->include("Home/footer")?>
<?= $this->endSection() ?>