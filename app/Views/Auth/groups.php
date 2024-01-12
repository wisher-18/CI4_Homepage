<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section('title') ?>View User<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>User Groups</h2>

    <form action="<?= base_url("admin/users/".$user->id."/groups") ?>" method="post">

        <div class="form-check">
            <input type="checkbox" name="groups[]" value="user"
                class="form-check-input" <?= $user->inGroup("user") ? "checked": "" ?>>
            <label for="user" class="form-check-label">User</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="groups[]" value="editor"
                class="form-check-input" <?= $user->inGroup("editor") ? "checked": "" ?>>
            <label for="editor" class="form-check-label">Editor</label>
        </div>

        <div class="form-check">
            <?php if($user->id === auth()->user()->id): ?>
                <input type="checkbox" checked disabled class="form-check-input">
                <label class="form-check-label">Admin</label>
                <input type="hidden" name="groups[]" value="admin">
            <?php else: ?>
                <input type="checkbox" name="groups[]" value="admin"
                    class="form-check-input" <?= $user->inGroup("admin") ? "checked": "" ?>>
                <label for="admin" class="form-check-label">Admin</label>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save</button>

    </form>
</div>

<?= $this->endSection() ?>
