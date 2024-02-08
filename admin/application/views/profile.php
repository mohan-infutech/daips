<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Account</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= PLUGINS; ?>fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="<?= DIST; ?>css/adminlte.min.css" />
  <style>
    .profile-user-img{
      height: 100px;
    }

    .user-panel img{
      height: 2.1rem!important;
    }

    .btn-fav{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        width: 30px;
        font-size: 12px;
        border-radius: 50%;
        margin: 0px auto;
    }

    .btn-fav-success{
        background-color: #00FF00;
    }
    .btn-fav-danger{
        background-color: #FF0000;
    }
    .img-rounded {
        border-radius: .25rem;
        height: 80px;
        margin-right: 10px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <?php 
          $this->load->view('includes/header'); 
          $this->load->view('includes/sidebar'); 
      ?>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                  <li class="breadcrumb-item active">Profile</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                  <div class="card card-primary card-outline">
                      <div class="card-body box-profile">
                          <?php 
                            if(empty($admin->photo)){
                               $image = "https://via.placeholder.com/120x120?text=preview";
                            }else{
                               if (file_exists('assets/uploads/' . $admin->photo)) {
                                  $image = base_url('assets/uploads/' . $admin->photo);
                               } else {
                                  $image = "https://via.placeholder.com/120x120?text=preview";
                               }
                            }
                          ?>
                          <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle" src="<?= $image; ?>" alt="User profile picture" />
                          </div>
                          <h3 class="profile-username text-center"><?= $admin->name; ?></h3>
                          <p class="text-muted text-center">Administartor</p>
                          <form method="post" action="<?= base_url('profile/updateProfilePic'); ?>" id="change-profile" enctype="multipart/form-data">
                            <div class="form-group">
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="file" class="custom-file-input" id="profilePic">
                                  <label class="custom-file-label" for="profilePic">Choose file</label>
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Update Now</button>   
                          </form>   
                      </div>
                  </div>
              </div>
              <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                              <a class="nav-link active" href="#account" data-toggle="tab">Account</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="account">
                              <div class="row">
                                <div class="col-8 mx-auto">
                                <?php 

                                    if($this->session->flashdata('success') != ""){
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('success'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                                    }

                                    if($this->session->flashdata('error') != ""){
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('error'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } ?>
                                  <form action="<?= base_url('profile/updatePassword'); ?>" id="account-form" method="post">
                                    <div class="form-group">
                                      <label>Current Password</label>
                                      <input type="password" class="form-control" name="cur_pass" required>
                                    </div>
                                    <div class="form-group">
                                      <label>New Password</label>
                                      <input type="password" class="form-control" name="new_pass" required>
                                    </div>
                                    <div class="form-group">
                                      <label>Confirm Password</label>
                                      <input type="password" class="form-control" name="con_pass" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php $this->load->view('includes/footer'); ?>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <script src="<?= PLUGINS; ?>jquery/jquery.min.js"></script>
    <script src="<?= PLUGINS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= DIST; ?>js/adminlte.min.js"></script>
    <script>
      $(document).ready(function(){

      });
    </script>
</body>
</html>