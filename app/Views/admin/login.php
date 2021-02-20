<?= $this->extend('layouts/admin.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="login-form">
        <div class="custom-center">
            <img src="<?= base_url() ?>/images/Skyzen-logo.png" alt="Skyzen logo">
        </div>

        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control <?= input_error($validation, 'email') ?>">
                <span class="text-danger"><?= display_error($validation, 'email') ?></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control <?= input_error($validation, 'password') ?>">
                <span class="text-danger"><?= display_error($validation, 'password') ?></span>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>