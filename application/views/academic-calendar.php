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

    <div class="container-xxl">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Services</p>
                <h1>Health Care Solutions</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container mt-5">
                        <div class="card bg-light border-0">
                            <div class="card-body d-flex justify-content-between align-items-center p-4">
                                <div>
                                    <h5 class="card-title">Card Title</h5>
                                    <p class="card-text">
                                        This is a simple card with a title and description. Customize it to suit your needs!
                                    </p>
                                </div>
                                <a href="#" class="btn btn-primary" download><i class="fas fa-download me-3"></i>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container mt-5">
                        <div class="card bg-light border-0">
                            <div class="card-body d-flex justify-content-between align-items-center p-4">
                                <div>
                                    <h5 class="card-title">Card Title</h5>
                                    <p class="card-text">
                                        This is a simple card with a title and description. Customize it to suit your needs!
                                    </p>
                                </div>
                                <a href="#" class="btn btn-primary" download><i class="fas fa-download me-3"></i>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Service End -->


<?php $this->load->view('sections/testimonial'); ?>



 




<?php $this->load->view('sections/footer'); ?>