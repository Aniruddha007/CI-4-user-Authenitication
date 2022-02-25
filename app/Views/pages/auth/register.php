<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3 border pb-3">
            <div class="p-3 my-3 text-black-50  bg-dark  rounded box-shadow">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Registration</h6>
                </div>
            </div>
            <?php if (isset($validation)) : ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
            <?php endif; ?>

            <form class="" action="<?= base_url('do-register') ?>" method="post">
                <div class="row">

                    <div class="col-6">
                        <label for="first_name">First Name<sup class="required">*</sup></label>
                        <input required type="text" class="form-control" name="first_name" id="first_name">
                    </div>
                    <div class="col-6">
                        <label for="last_name">Last Name<sup class="required">*</sup></label>
                        <input required type="text" class="form-control" name="last_name" id="last_name">
                    </div>
                    <div class="col-6">
                        <label for="user_name">User Name<sup class="required">*</sup></label>
                        <input required type="text" class="form-control" name="user_name" id="user_name">
                    </div>
                    <div class="col-6">
                        <label for="birthday">Birthday<sup class="required">*</sup></label>
                        <input type="date" class="form-control" name="birthday" id="birthday">
                    </div>
                    <div class="col-6">
                        <label for="phone_number">Phone Number<sup class="required">*</sup></label>
                        <input required minlength="10" maxlength="10" type="text" class="form-control" name="phone_number" id="phone_number">
                    </div>
                    <div class="col-6">
                        <label for="phone_number">Address<sup class="required">*</sup></label>
                        <textarea required class="form-control" name="address"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="password">Password<sup class="required">*</sup></label>
                        <input required type="password" class="form-control password_check" name="password" id="password">
                        <div id="meter_wrapper">
                            <div id="meter"></div>
                        </div>
                        <span id="pass_type"></span>
                    </div>
                    <div class="col-6">
                        <label for="password_confirm">Confirm Password<sup class="required">*</sup></label>
                        <input required type="password" class="form-control" name="password_confirm" id="password_confirm">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>