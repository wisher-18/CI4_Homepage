<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section('title') ?>View User<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="mb-4">User Details</h2>

    <dl class="row">
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9"><?= esc($user->first_name." ".$user->last_name) ?></dd>
        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9"><?= esc($user->email) ?></dd>

        

        <dt class="col-sm-3">Creation</dt>
        <dd class="col-sm-9"><?= esc($user->created_at->humanize()) ?></dd>

        <dt class="col-sm-3">Groups</dt>
        <dd class="col-sm-9">
            <?= $user->user_role ?>
            <a href="<?= base_url("admin/users/".$user->id."/groups") ?>" class="btn btn-sm btn-warning">Edit</a>
        </dd>


    </dl>

</div>

<?= $this->endSection(); ?>
