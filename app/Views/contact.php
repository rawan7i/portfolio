<?= $this->extend('Layout/main') ?>

<?= $this->section('content') ?>

<div class="container" style="max-width: 900px;">
    <div class="text-center m-5">
        <h3 class="text-warning">Contact us</h3>
        <p class="text-light">You can contact us at any time</p>
    </div>
    <div class="card mb-8 sm-4 w-100">
        <div class="row no gutters justify-content-center align-items-center text-center">
            <div class="col">
                <img src="<?= base_url('assets/images/contact.jpg') ?>" class="w-100" alt="...">
            </div>
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">Contact us</h5>

                    <form method="POST">
                        <div class="mb-3">
                            <label for="users_name">Name</label>
                            <input id="users_name" type="text" class="form-control" name="users_name" 
                                   placeholder="Enter your name ..." value="<?= old('users_name') ?>"><br />
                                   <?php if (isset($validation) && $validation->hasError('users_name')): ?>
                                <div class="text-danger"><?= $validation->getError('users_name') ?></div>
                            <?php endif; ?>

                            <label for="users_email">Email</label>
                            <input id="users_email" type="email" class="form-control" name="users_email" 
                                   placeholder="Enter your email ..." value="<?= old('users_email') ?>"><br />
                                   <?php if (isset($validation) && $validation->hasError('users_email')): ?>
                                <div class="text-danger"><?= $validation->getError('users_email') ?></div>
                            <?php endif; ?>

                            <label for="text_area">Message</label>
                            <textarea name="text_area" class="form-control"><?= old('text_area') ?></textarea>
                            <?php if (isset($validation) && $validation->hasError('text_area')): ?>
                                <div class="text-danger"><?= $validation->getError('text_area') ?></div>
                            <?php endif; ?>

                            <input type="checkbox" class="filled-in" name="choose" value="choose" id="choose" 
                                   <?= old('choose') ? 'checked' : '' ?>>
                            <label for="choose">I agree to the privacy policy</label><br />
                            <?php if (isset($validation) && $validation->hasError('choose')): ?>
                                <div class="text-danger"><?= $validation->getError('choose') ?></div>
                            <?php endif; ?>

                            <input id="submit" type="submit" name="submit" value="Submit" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('') ?>
