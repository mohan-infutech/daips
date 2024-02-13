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


<!-- Feature Start -->
<div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <p class="d-inline-block border rounded-pill text-light py-1 px-4">About Us</p>
                    <h1 class="text-white mb-4">Why Choose Us</h1>
                        <p class="text-white mb-4 pb-2">At Dr. Ambedkar Institute of Pharmaceutical Sciences, we offer a transformative educational experience with expert faculty, cutting-edge infrastructure, and a focus on practical skills. </p>
                        <p class="text-white mb-4 pb-2">Your well-being is our priority, reflected in safe hostels and a well-maintained canteen. With strong industry connections and an active placement cell, we ensure seamless transitions into successful careers. Our track record of alumni success underscores the effectiveness of our programs. Choose us for a holistic education that prepares you for a flourishing career in the pharmaceutical field.</p>
                    </p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-user-md text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Expert </p>
                                    <h5 class="text-white mb-0">Faculty</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-check text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">State-of-the-Art</p>
                                    <h5 class="text-white mb-0">Infrastructure</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-comment-medical text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Holistic</p>
                                    <h5 class="text-white mb-0">Learning Environment</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                    <i class="fa fa-headphones text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="text-white mb-2">Active </p>
                                    <h5 class="text-white mb-0">Placement Cell</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= ASSETS . 'img/feature.jpg'; ?>" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->



<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
            <h1>Shaping Dreams, Inspiring Futures </h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fas fa-bullseye text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Mission</h4>
                    <p class="mb-4">Be the most sought after educational institution in the world for Pharmaceutical Science by 2040.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-brain text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our vision</h4>
                    <p class="mb-4">Striving our best to build Pharmaceutical leaders of the future, who would consistently raise the bar with their exemplary performance. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fas fa-hand-holding-heart text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Values</h4>
                    <p class="mb-4">Relentless pursuit of excellence, Highest standards of integrity, Mindset to serve, Driving scalable impact for the world.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fas fa-university text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Infrastructure</h4>
                    <p class="mb-4">We have our own land and building, state of the art library and laboratories, round the clock power back up and water supply, well ventilated & spacious classrooms etc. to aid students in accessing high quality education. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fas fa-users-cog text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Facilities</h4>
                    <p class="mb-4">We offer hygienic and spacious separate hostels for boys and girls, canteen facility, adequate room for indoor and outdoor sports, open air stage for various functions and extra curricular activities. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fas fa-users text-primary fs-4"></i>
                    </div>
                    <h4 class="mb-3">Our Advisory Council</h4>
                    <p class="mb-4">We have an extremely valuable Advisory council comprising stellar academicians like ex-Vice chancellors from Berhampur University, BPUT, FM University, ex- Additional Director - IIT Bhubaneswar and other prominent dignitaries consistently guiding us on our pedagogy for Pharmaceutical Science.</p>
                </div>
            </div>
        </div>
    </div>
</div>


 <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card bg-light border-0">
                    <div class="card-body d-flex justify-content-between align-items-center">
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




<?php $this->load->view('sections/footer'); ?>