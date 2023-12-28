<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>
    <?= esc($page->page_title) ?>
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("home/navbar") ?>

<?= $this->include("home/homeSection") ?>

<?= $this->include("home/featuresSection") ?>



<?= $this->include("home/aboutLong") ?>
<?= $this->include("home/pricing") ?>

<?= $this->include("home/aboutShort") ?>

<?= $this->include("home/footer") ?>
      
      
      

<?= $this->endSection() ?>