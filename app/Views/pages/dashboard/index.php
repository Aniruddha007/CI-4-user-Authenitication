<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                <h1>Hello, <?= session()->get('first_name') ?></h1>
                <h3></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 jumbotron ">
            <h3 class="title">Profile Info</h3>
            <table class="table table-border">
                <tr>
                    <td>First name</td>
                    <td><?= session()->get('first_name'); ?>
                <tr>
                    <td>Last name</td>
                    <td><?= session()->get('last_name'); ?></td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td><?= session()->get('birthday'); ?></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td><?= session()->get('phone_number'); ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?= session()->get('address'); ?></td>
                </tr>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>