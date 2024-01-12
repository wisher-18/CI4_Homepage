
<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.useMagicLink') ?><?= $this->endSection() ?>

<?= $this->section('main') ?>
<body class="bg-gradient-primary">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                    and we'll send you a link to reset your password!</p>
                            </div>
                            
                            <?php if (session('error') !== null) : ?>
                                <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                            <?php elseif (session('errors') !== null) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php if (is_array(session('errors'))) : ?>
                                        <?php foreach (session('errors') as $error) : ?>
                                            <?= $error ?>
                                            <br>
                                        <?php endforeach ?>
                                    <?php else : ?>
                                        <?= session('errors') ?>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                            <form action="<?= url_to('magic-link') ?>" method="post" class="user">
                            <?= csrf_field() ?>

                                <div class="form-group">
                              
                                    <input type="email" class="form-control form-control-user" id="floatingEmailInput" name="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>"
                                        value="<?= old('email', auth()->user()->email ?? null) ?>" required>
                                    
                          
                                    
                                </div>
                                <div class="d-grid col-12 col-md-8 mx-auto m-3">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Reset Password</button>
                                </div>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= url_to('register') ?>">Create an Account!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= url_to('login') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

</body>
<?= $this->endSection(); ?>