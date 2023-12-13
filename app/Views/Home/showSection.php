<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Section<?= $this->endSection() ?>

<?= $this->section("content")?>
<?= $this->include("home/navbar") ?>
</div>
<!--  Ending div for header -->
<h1><?= esc($section->title) ?></h1>
<h2><?= esc($section->sub_title) ?></h2>

<p><?= esc($section->content) ?></p>

<img src="<?= base_url("public/section_images/").$section->section_image ?>" style="object-fit:cover; height:200px" alt="">


<?= $this->include("home/footer") ?>
<?= $this->endSection() ?>