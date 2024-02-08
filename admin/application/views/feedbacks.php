<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?= $page; ?></title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <link rel="stylesheet" href="<?= PLUGINS; ?>fontawesome-free/css/all.min.css" />

        <link rel="stylesheet" href="<?= PLUGINS; ?>datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= PLUGINS; ?>datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= PLUGINS; ?>datatables-buttons/css/buttons.bootstrap4.min.css">

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
                                <div class="row">
                                    <div class="col-8 mx-auto">
                                        <?php if($this->session->flashdata('success') != ""){ ?>
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
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Comments List</h3>
                                        <div class="card-tools">
                                            <a href="<?= base_url('feedbacks/new'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add new</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Sl.</td>
                                                    <td>Image</td>
                                                    <td>Name </td>
                                                    <td>Comment</td>
                                                    <td>Company</td>
                                                    <!-- <td>Uploaded On</td> -->
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; foreach ($reviews as $key => $obj) { ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td>
                                                        <?php if(!empty($obj->file) && file_exists('./assets/uploads/' . $obj->file)){ ?>
                                                            <img src="<?= base_url('assets/uploads/').$obj->file; ?>" width="50px" height="50px">
                                                        <?php } ?>
                                                    </td>
                                                    <td><?= $obj->name; ?></td>
                                                    <td><?= $obj->comment; ?></td>
                                                    <td><?= $obj->company; ?></td>
                                                    <!-- <td><?= date('jS M Y', strtotime($obj->created_on)); ?></td> -->
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a href="<?= base_url('feedbacks/delete/').$obj->id; ?>" type="button" class="btn btn-danger btn-sm">
                                                               <i class="fas fa-trash"></i> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php  $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('includes/footer'); ?>
        </div>

        <div class="modal" id="view-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title"></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= PLUGINS; ?>jquery/jquery.min.js"></script>
        <script src="<?= PLUGINS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="<?= PLUGINS; ?>datatables/jquery.dataTables.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= PLUGINS; ?>jszip/jszip.min.js"></script>
        <script src="<?= PLUGINS; ?>pdfmake/pdfmake.min.js"></script>
        <script src="<?= PLUGINS; ?>pdfmake/vfs_fonts.js"></script>
        <script src="<?= PLUGINS; ?>datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= PLUGINS; ?>datatables-buttons/js/buttons.colVis.min.js"></script>

        <script src="<?= DIST; ?>js/adminlte.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#view-modal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);
                    var name = button.data('name');
                    var src = button.data('url');
                    var modal = $(this);
                    modal.find('.modal-title').text(name);
                    modal.find('.modal-body').find('img').attr('src',src);
                });
            
                $('#datatable').DataTable();
            });
        </script>
    </body>
</html>