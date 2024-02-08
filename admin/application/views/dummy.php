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
                                    <li class="breadcrumb-item active"><?= $page; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pictures List</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add new</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
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
    </body>
</html>