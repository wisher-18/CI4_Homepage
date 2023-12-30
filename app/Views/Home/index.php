<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Home Page<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("home/navbar") ?>

<?= $this->include("home/homeSection") ?>

<?= $this->include("home/featuresSection") ?>
<?= $this->include("home/testimonials") ?>




<?= $this->include("home/aboutLong") ?>
<?= $this->include("home/pricing") ?>
<?= $this->include("home/whyUs") ?>
<?= $this->include("home/about") ?>

<?= $this->include("home/aboutShort") ?>

<?= $this->include("home/footer") ?>
      
      
      

<?= $this->endSection() ?>