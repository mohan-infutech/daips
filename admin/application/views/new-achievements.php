<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?= $page; ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <link rel="stylesheet" href="<?= PLUGINS; ?>fontawesome-free/css/all.min.css" />
        <link rel="stylesheet" href="<?= DIST; ?>css/adminlte.min.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?php 
                $this->load->view('includes/header'); 
                $this->load->view('includes/sidebar');
            ?>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0"><?= $page; ?></h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('achievements'); ?>">Achievements</a></li>
                                    <li class="breadcrumb-item active"><?= $page; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 mx-auto">
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
                                <form action="<?= base_url('achievements/upload'); ?>" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="text-center">Add New Achievements</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" name="date" class="form-control datepicker">
                                        </div>
                                        <label>Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="picture">
                                                <label class="custom-file-label" for="picture">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="desc" class="form-control" placeholder="Enter description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-upload"></i> SAVE </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('includes/footer'); ?>
        </div>
                      
        <script src="<?= PLUGINS; ?>jquery/jquery.min.js"></script>
        <script src="<?= PLUGINS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= DIST; ?>js/adminlte.min.js"></script>  
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                $('.datepicker').datepicker();
            });
        </script>  
    </body>
</html>