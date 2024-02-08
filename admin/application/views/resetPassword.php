<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Forgot Password</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= DIST . 'css/all.css'; ?>">
        <link rel="stylesheet" href="<?= DIST . 'css/sharp-solid.css'; ?>">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?= DIST . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css'; ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= DIST . 'css/adminlte.min.css'; ?>">

    </head>
    <body class="hold-transition login-page">

        <div class="login-box">
            <div class="login-logo">
                <a href="<?= base_url(); ?>">Reset Password</a>
            </div>

            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
                    <form action="<?= base_url('update-password'); ?>" method="post">
                        <input type="hidden" name="authtoken" value="<?= $this->input->get('authtoken',TRUE); ?>">
                        <?= form_error('password', '<p class="text-danger text-sm mb-0">', '</p>'); ?>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <?= form_error('passconf', '<p class="text-danger text-sm mb-0">', '</p>'); ?>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="passconf">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Change password</button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-3 mb-1">
                        <a href="<?= base_url('login'); ?>">Go back to Login</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= DIST . 'plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= DIST . 'js/adminlte.min.js'; ?>"></script>
    </body>
</html>
