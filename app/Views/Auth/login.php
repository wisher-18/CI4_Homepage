
<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?><?= $this->endSection() ?>

<?= $this->section('main') ?>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <?php if (session('error') !== null): ?>
                        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php if (is_array(session('errors'))): ?>
                                    <?php foreach (session('errors') as $error): ?>
                                            <?= $error ?>
                                            <br>
                                    <?php endforeach ?>
                            <?php else: ?>
                                    <?= session('errors') ?>
                            <?php endif ?>
                        </div>
                <?php endif ?>
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form  class="user" action="<?= url_to('login') ?>" method="post">
                                    
    
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                                            
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required>
                                            
                                        </div>

      

                                        <div class="form-group">

                                         <!-- Remember me -->
                                        <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                                            

                                                    <div class="custom-control custom-checkbox small">
                                                        <input type="checkbox" id="customCheck" name="remember" class="custom-control-input" <?php if (old('remember')): ?> checked<?php endif ?>>
                                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                    </div>
                                            
                                        <?php endif; ?>
                                        </div>

                                        
                                        <div class="d-grid col-12 mx-auto m-3">
                                            <button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.login') ?></button>
                                        </div>

                                        <hr>
                                    </form>
                                    <hr>
                                    <?php if (setting('Auth.allowMagicLinkLogins')): ?>
                                        <div class="text-center">
                                            <a class="small" href="<?= url_to('magic-link') ?>">Forgot Password?</a>
                                        </div>
                                    <?php endif ?>

                                    <?php if (setting('Auth.allowRegistration')): ?>
                                        <div class="text-center">
                                            <a class="small" href="<?= url_to('register') ?>">Create an Account!</a>
                                        </div>
                                    <?php endif ?>

                                    

                                    
                                  
                                    

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