<?= $this->extend("layouts/adminDefault") ?>

<?= $this->section('title') ?>View User<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>User Permissions</h2>

    <form action="<?= base_url("admin/users/".$user->id."/permissions") ?>" method="post">

        <div class="form-check">
            <input type="checkbox" name="permissions[]" value="content.edit"
                class="form-check-input" <?= $user->can("content.edit") ? "checked": "" ?>>
            <label for="user" class="form-check-label">Content.Edit</label>
        </div>
        <div class="form-check">
            <input type="checkbox" name="permissions[]" value="content.delete"
                class="form-check-input" <?= $user->can("content.delete") ? "checked": "" ?>>
            <label for="editor" class="form-check-label">Content.Delete</label>
        </div>



        <button type="submit" class="btn btn-primary mt-3">Save</button>

    </form>
</div>

<?= $this->endSection() ?>
