<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3 border pb-3">
            <div class="p-3 my-3 text-black-50  bg-dark  rounded box-shadow">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Login</h6>
                </div>
            </div>
            <?php if (isset($validation)) : ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>
            <form class="" action="<?= base_url('do-login') ?>" method="post">
                <div class="form-group">
                    <label for="user_name">User Name<sup class="required">*</sup></label>
                    <input type="text" class="form-control" name="user_name" id="user_name" required>
                </div>
                <div class="form-group">
                    <label for="password">Password<sup class="required">*</sup></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <button type="submit" class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>