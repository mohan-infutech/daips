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
        <h1 class="display-3 text-white mb-3 animated slideInDown">About</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">About</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Chairman Message</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid rounded w-75" src="<?= ASSETS . 'img/about-1.jpg'; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <p class="d-inline-block border rounded-pill py-1 px-4">Chairman Desk</p>
                <h1 class="mb-4">Message from Chairman</h1>
                <p>India's pharmaceutical sector is positioned at the forefront globally, projected to hit $100Bn by 2025. As a pivotal contributor to global generic drug and vaccine supply, the industry is witnessing unprecedented demand. Our institute, dedicated to excellence, employs an industry-oriented pedagogy, offering students practical exposure and opportunities such as guest lectures, live projects, internships, and industrial visits. With a qualified faculty and a robust placement cell, we aim to equip our students with the skills needed to thrive in the dynamic pharmaceutical landscape. Best of luck to our students as they contribute to shaping the future of India's pharmaceutical prowess.</p>
                <p>Warm regards,</p>
                <p><strong>Prof. L.I.O.N Dr. Jatindra Nayak</strong></p>
                <p>Chairman</p>
        </div>
    </div>
</div>
</div>

<!-- About End -->





<?php $this->load->view('sections/footer'); ?>