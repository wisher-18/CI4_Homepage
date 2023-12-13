<?= $this->extend("layouts/default")?>

<?= $this->section("title") ?>Edit Section<?= $this->endSection() ?>

<?= $this->section("content") ?>
    <h1>Edit Article</h1>

    <?php if(session()-> has("errors")): ?>
        <ul>
            <?php foreach(session("errors") as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

<form action=" <?= base_url("articles/".$article->id) ?>" method="post">
   

    <input type="hidden" name="_method" value="patch">

    <?= $this->include("Articles/form") ?>

    </form>

<?= $this->endSection() ?>