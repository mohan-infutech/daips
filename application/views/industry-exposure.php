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


 <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Industry Exposure</p>
                    <h1>Fostering Future Leaders with Industry-Ready Expertise</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card bg-light rounded h-100 border-0">
                            <img class="img-fluid w-100 align-self-centre card-img-top" src="<?= ASSETS . 'img/about-1.jpg'; ?>" alt="">
                            <div class="card-body p-4">
                                <h4 class="card-title mb-3">Hospital Partnerships</h4>
                                <p class="card-text mb-4">Partnering with renowned hospitals in Rourkela such as RGH and CWS, we provide hands-on learning experiences for our students. Our ambitious expansion aims to integrate more hospitals within Odisha and across India.</p>
                                <a class="btn btn-primary" href="#"><i class="fas fa-arrow-right me-3"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card bg-light rounded h-100 border-0" data-wow-delay="0.1s">
                            <img class="img-fluid w-100 align-self-centre card-img-top" src="<?= ASSETS . 'img/about-1.jpg'; ?>" alt="">
                            <div class="card-body p-4">
                                <h4 class="card-title mb-3">Guest Lectures</h4>
                                <p class="card-text mb-4">Introducing industry expert talks to enhance academic-industry connections. These lectures offer students valuable industry insights, enriching their learning experience.</p>
                                <a class="btn btn-primary" href="#"><i class="fas fa-arrow-right me-3"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card bg-light rounded h-100 border-0">
                            <img class="img-fluid w-100 align-self-centre card-img-top" src="<?= ASSETS . 'img/about-1.jpg'; ?>" alt="">
                            <div class="card-body p-4">
                                <h4 class="card-title mb-3">Career Support</h4>
                                <p class="card-text mb-4">We actively pursue partnerships with companies for student placements, live projects, and internships, focusing on practical exposure. Additionally, students receive training to enhance soft skills, boosting their employability in the industry.</p>
                                <a class="btn btn-primary" href="#"><i class="fas fa-arrow-right me-3"></i>Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->



<?php $this->load->view('sections/footer'); ?>