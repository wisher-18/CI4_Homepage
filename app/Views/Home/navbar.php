<div class="laptop-back">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="col-md-2 clearfix">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <h4 class="lucid">lucid</h4>
                        <h4 class="onepage">onepage<br>theme</h4>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars" style="color: #e7ebf4;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($pages as $page): ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?= url_to($page->page_title) ?>">
                                    <?= $page->page_title ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

