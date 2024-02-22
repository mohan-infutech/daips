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
         <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
               <li class="breadcrumb-item"><a class="text-white" href="<?= base_url(); ?>">Home</a></li>
               <li class="breadcrumb-item text-primary active" aria-current="page">Gallery</li>
            </ol>
         </nav>
      </div>
   </div>
   
   <section class="space-ptb">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10 text-center">
               <div class="section-title">
                  <p class="d-inline-block border rounded-pill py-1 px-4">Gallery</p>
                  <h2 class="title">Let's have a look at our gallery</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="filters-group mb-5 mb-lg-5">
                  <button class="btn-filter active" data-group="all">View All</button>
                  <button class="btn-filter" data-group="infrastructure">Infrastructure</button>
                  <button class="btn-filter" data-group="events">Events</button>
                  <button class="btn-filter" data-group="faculties">Faculties</button>
                  <button class="btn-filter" data-group="others">Others</button>
               </div>
               <div class="my-shuffle-container popup-gallery full-screen">
                  
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <?= $pages; ?>
            </div>
         </div>
      </div>
   </section>
   <?php $this->load->view('sections/footer'); ?>