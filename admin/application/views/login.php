<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= PLUGINS . 'fontawesome-free/css/all.min.css'; ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= PLUGINS . 'icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= DIST . 'css/adminlte.min.css'; ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url(); ?>"><b>Admin</b> Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

        <?php if($this->session->flashdata('error')!=''){ ?>
        <div class="row">
          <div class="col-12">
            <p class="text-center text-danger"><?= $this->session->flashdata('error'); ?></p>
          </div>
        </div>
        <?php } ?>
        <?php if($this->session->flashdata('success')!=''){ ?>
        <div class="row">
          <div class="col-12">
            <p class="text-center text-success"><?= $this->session->flashdata('success'); ?></p>
          </div>
        </div>
        <?php } ?>
      <form action="<?= base_url('login/'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?= isset($_COOKIE['username'])?$_COOKIE['username']:''; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<p class="text-danger text-sm mb-0">', '</p>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" id="input-password">
          <div class="input-group-append">
            <div class="input-group-text" id="toggle-password">
              <span class="fas fa-eye"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember"> Remember Me </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>

      </form>

      <p class="mb-1 text-center">
        <a href="<?= base_url('forgot-password'); ?>">Forgot Password?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= PLUGINS . 'jquery/jquery.min.js'; ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= PLUGINS . 'bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?= DIST . 'js/adminlte.min.js'; ?>"></script>
<script>
    $(function() {
        
        $(document).on('click', '#toggle-password', function(event) {
            
            if ($(this).find('span').hasClass('fa-eye')) {
                $(this).find('span').removeClass('fa-eye').addClass('fa-eye-slash');
                $("#input-password").attr('type','text');
            } else {
                $(this).find('span').removeClass('fa-eye-slash').addClass('fa-eye');
                $("#input-password").attr('type','password');
            }

        });

    });
</script> 
</body>
</html>
