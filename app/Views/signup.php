<?= $this->extend('Layout/main') ?>

<?= $this->section('content') ?>

<div class="container" style="max-width: 900px;">
    <div class="text-center m-5">
        <h3 class="text-warning">Sign Up</h3>
        <p class="text-light">Don't have an account? Sign Up</p>
    </div>

    <div class="card mb-8 sm-4 w-100">
        <div class="row no-gutters justify-content-center align-items-center text-center">
            <div class="col">
                <img src="<?= base_url('assets/images/signup3.png') ?>" class="w-50" alt="Sign Up Image">
            </div>

            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Sign Up</h5>
                    <form method="POST">
                        <div class="mb-3">
                            <!-- Name Field -->
                            <label for="user_name">Name</label>
                            <input id="user_name" type="text" class="form-control" name="user_name"
                                placeholder="Enter your name ..." value="<?= isset($validation) ? old('user_name') : '' ?>">

                            <?php if (isset($validation) && $validation->hasError('user_name')): ?>
                                <div class="text-danger"><?= $validation->getError('user_name') ?></div>
                            <?php endif; ?>

                            <!-- Email Field -->
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email"
                                placeholder="Enter your email ..." value="<?= isset($validation) ? old('email') : '' ?>">

                            <?php if (isset($validation) && $validation->hasError('email')): ?>
                                <div class="text-danger"><?= $validation->getError('email') ?></div>
                            <?php endif; ?>

                            <!-- Password Field -->
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password ...">
                                <button type="button" class="btn btn-outline-secondary" id="togglePassword">Show</button>
                            </div>

                            <?php if (isset($validation) && $validation->hasError('password')): ?>
                                <div class="text-danger"><?= $validation->getError('password') ?></div>
                            <?php endif; ?>

                            <!-- Checkbox -->
                            <input type="checkbox" name="choose" id="choose">
                            <label for="choose">I agree to the privacy policy</label>

                            <?php if (isset($validation) && $validation->hasError('choose')): ?>
                                <div class="text-danger"><?= $validation->getError('choose') ?></div>
                            <?php endif; ?>

                            <!-- Submit Button -->
                            <br>
                            <input id="ssubmit" type="submit" name="submit" value="Submit" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>