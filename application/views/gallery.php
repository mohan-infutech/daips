 <?php $this->load->view('sections/header'); ?>


 <body>

     <?php $this->load->view('sections/loader'); ?>



     <!-- Topbar Start -->

     <?php $this->load->view('sections/topbar'); ?>

     <!-- Topbar End -->


     <!-- Navbar Start -->

     <?php $this->load->view('sections/navbar'); ?>

     <!-- Navbar End -->


     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="gallery-item rounded">
                    <img src="https://via.placeholder.com/300" alt="Image 1">
                    <div class="overlay">
                        <h3>Title 1</h3>
                        <p>Description 1</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item rounded">
                    <img src="https://via.placeholder.com/300" alt="Image 2">
                    <div class="overlay">
                        <h3>Title 2</h3>
                        <p>Description 2</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="gallery-item rounded">
                    <img src="https://via.placeholder.com/300" alt="Image 3">
                    <div class="overlay">
                        <h3>Title 3</h3>
                        <p>Description 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 text-center">
                    <div class="section-title">
                        <h2 class="title">Let's have a look at what creativity is!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="filters-group mb-2 mb-lg-5">
                        <button class="btn-filter active" data-group="all">View All</button>
                        <button class="btn-filter" data-group="dental">Dental</button>
                        <button class="btn-filter" data-group="medicine">Medicine</button>
                        <button class="btn-filter" data-group="orthopaedics">Orthopaedics</button>
                        <button class="btn-filter" data-group="neurology">Neurology</button>
                    </div>
                    <div class="my-shuffle-container popup-gallery full-screen">
                        <!-- Gallery items (repeated for each image) -->

                        <div class="col-md-4 grid-item mb-4" data-groups='["dental"]'>
                            <div class="portfolio-item rounded py-3">
                                <img src="<?= ASSETS . 'img/gallery/01.jpg'; ?>" style="object-fit: cover;" alt="">
                                <div class="portfolio-overlay">
                                    <a class="portfolio-description portfolio-img" href="#previewModal1" data-bs-toggle="modal" data-bs-target="#previewModal1">
                                        <div class="portfolio-info">
                                            <span class="portfolio-title">Title 1</span>
                                            <span class="icon-btn"><i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-item mb-4" data-groups='["medicine"]'>
                            <div class="portfolio-item rounded py-3">
                                <img src="https://via.placeholder.com/300" alt="Image 2">
                                <div class="portfolio-overlay">
                                    <a class="portfolio-description portfolio-img" href="#previewModal2" data-bs-toggle="modal" data-bs-target="#previewModal2">
                                        <div class="portfolio-info">
                                            <span class="portfolio-title">Title 2</span>
                                            <span class="icon-btn"><i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-item mb-4" data-groups='["orthopaedics"]'>
                            <div class="portfolio-item rounded py-3">
                                <img src="https://via.placeholder.com/300" alt="Image 3">
                                <div class="portfolio-overlay">
                                    <a class="portfolio-description portfolio-img" href="#previewModal3" data-bs-toggle="modal" data-bs-target="#previewModal3">
                                        <div class="portfolio-info">
                                            <span class="portfolio-title">Title 3</span>
                                            <span class="icon-btn"><i class="fas fa-plus"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Repeat this structure for additional images -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Preview Modals -->
    <div class="modal fade" id="previewModal1" tabindex="-1" aria-labelledby="previewModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-fluid w-100 h-100" src="<?= ASSETS . 'img/gallery/01.jpg'; ?>" style="object-fit: cover;" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModal2" tabindex="-1" aria-labelledby="previewModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="https://via.placeholder.com/300" class="img-fluid" alt="Preview Image 2">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModal3" tabindex="-1" aria-labelledby="previewModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="https://via.placeholder.com/300" class="img-fluid" alt="Preview Image 3">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






    




<?php $this->load->view('sections/footer'); ?>