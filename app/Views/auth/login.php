<?= $this->extend('layouts/app'); ?>

<?= $this->section("content") ?>


<div class="bg-dark" id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center align-content-center" style="min-height: 100vh;">
                    <div class="col-lg-5">

                        <?php if (session('error')) : ?>
                            <div class="alert alert-danger text-center mb-2">
                                <p class="mb-0"><?= session('error') ?></p>
                            </div>
                        <?php endif ?>



                        <?php if (session('success')) : ?>
                            <div class="alert alert-success text-center mb-2">
                                <p class="mb-0"><?= session('success') ?></p>
                            </div>
                        <?php endif ?>

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4"><?= $page_title ?></h3>
                            </div>
                            <?= form_open(route_to('authenticate'), ['method' => 'POST']); ?>
                            <div class="card-body">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Type your username" />
                                    <label for="inputUsername">Username</label>

                                    <?php if (session()->has('validation')) : ?>

                                        <?php $validation = session('validation'); ?>
                                        <?php if ($validation->hasError('username')) : ?>

                                            <small class="text-danger"><?= $validation->getError('username') ?></small>

                                        <?php endif ?>

                                    <?php endif ?>

                                </div>


                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                    <label for="inputPassword">Password</label>

                                    <?php if (session()->has('validation')) : ?>

                                        <?php $validation = session('validation'); ?>
                                        <?php if ($validation->hasError('password')) : ?>

                                            <small class="text-danger"><?= $validation->getError('password') ?></small>

                                        <?php endif ?>

                                    <?php endif ?>
                                </div>
                               
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button type="submit" class="btn btn-lg btn-dark d-block w-100">Login</button>
                                </div>
                            </div>
                            <?= form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>

<?= $this->endSection() ?>