<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Dashboard</title>
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
                <div class="content">
                    <div class="container-fluid">
                        
                    </div>
                </div>
            </div>

            <?php $this->load->view('includes/footer'); ?>
        </div>

        <!-- jQuery -->
        <script src="<?= PLUGINS; ?>jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= PLUGINS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= DIST; ?>js/adminlte.min.js"></script>
    </body>
</html>