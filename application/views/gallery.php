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
                  <button class="btn-filter" data-group="dental">Dental</button>
                  <button class="btn-filter" data-group="medicine">Medicine</button>
                  <button class="btn-filter" data-group="orthopaedics">Orthopaedics</button>
                  <button class="btn-filter" data-group="neurology">Neurology</button>
               </div>
               <div class="my-shuffle-container popup-gallery full-screen">
                  <!-- Gallery items (repeated for each image) -->
                  <?php foreach ($pictures as $picture) : ?>
                  <div class="col-md-4 grid-item mb-4 px-4 py-3" data-groups='["<?= $picture->category ?>"]'>
                     <div class="portfolio-item rounded">
                        <img src="<?= base_url('assets/uploads/' . $picture->file); ?>" style="object-fit: cover;" alt="<?= $picture->name; ?>">
                        <div class="portfolio-overlay">
                           <a class="portfolio-description portfolio-img" href="#previewModal<?= $picture->id; ?>" data-bs-toggle="modal" data-bs-target="#previewModal<?= $picture->id; ?>">
                              <div class="portfolio-info d-flex flex-column align-items-center">
                                 <span class="portfolio-title"><?= $picture->name; ?></span>
                                 <span class="icon-btn"><i class="fas fa-search"></i></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <!-- Add a modal for each image -->
                  <div class="modal fade" id="previewModal<?= $picture->id; ?>" tabindex="-1" aria-labelledby="previewModal<?= $picture->id; ?>Label" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                           <div class="modal-body">
                              <img class="img-fluid w-100 h-100" src="<?= base_url('assets/uploads/' . $picture->file); ?>" style="object-fit: cover;" alt="<?= $picture->name; ?>">
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php $this->load->view('sections/footer'); ?>