<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Home Page<?= $this->endSection() ?>

<?= $this->section("content") ?>

<?= $this->include("home/navbar") ?>
</div>
<style>


        .container {
            
            margin-top: 50px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container col-4 mb-5">
    <h2 class="text-center">Set Password</h2>

    <?php if(session()->has("errors")): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach(session("errors") as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Repeat Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>



<?= $this->include("home/footer") ?>
<?= $this->endSection() ?>