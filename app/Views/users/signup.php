<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="login-form">
        <div class="custom-center">
            <h1>Register User</h1>
        </div>

        <?= form_open() ?>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" class="form-control <?= input_error($validation, 'name') ?>">
            <span class="text-danger"><?= display_error($validation, 'name') ?></span>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control <?= input_error($validation, 'email') ?>">
            <span class="text-danger"><?= display_error($validation, 'email') ?></span>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="number" name="mobile" id="mobile" class="form-control <?= input_error($validation, 'mobile') ?>">
            <span class="text-danger"><?= display_error($validation, 'mobile') ?></span>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control <?= input_error($validation, 'password') ?>">
            <span class="text-danger"><?= display_error($validation, 'password') ?></span>
        </div>

        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control <?= input_error($validation, 'cpassword') ?>">
            <span class="text-danger"><?= display_error($validation, 'cpassword') ?></span>
        </div>

        <button type="submit" class="btn btn-primary form-control">Signup</button>
        <?= form_close() ?>
    </div>
</div>

<?= $this->endSection(); ?>