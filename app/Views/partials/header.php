
    <nav class="navbar navbar-expand-md navbar-dark bg-header mb-4">
      <a class="navbar-brand" href="/home"><?= getenv('APP_NAME') ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         
          <?php if(session()->get('id')){?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="/dashboard">Dashboard</a>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
         <?php  }else{?>
            <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        <?php } ?>

        </ul>
      </div>
    </nav>
    <!-- Validation error message -->
    <?php
    if(session()->getFlashdata('success')):?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close btn" data-bs-dismiss="alert">&times;</button>
            <?php echo session()->getFlashdata('success') ?>
        </div>
    <?php elseif(session()->getFlashdata('failed')):?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close btn" data-bs-dismiss="alert">&times;</button>
            <?php echo session()->getFlashdata('failed') ?>
        </div>
<?php endif; ?>
    <!-- Validation error message -->