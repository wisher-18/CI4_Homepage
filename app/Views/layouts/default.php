<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->renderSection("title") ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/all.css">

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Quicksand:300,regular,500,600,700&amp;subset=latin,latin-ext,vietnamese">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese">


</head>


<body>

 <?= $this->renderSection("content") ?>


    <script src="<?= base_url() ?>public/js/bootstrap.bundle.js"></script>
    <script src="<?= base_url() ?>public/js/index.js"></script>
    
</body>
</html>