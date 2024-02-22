<?php $this->load->view("sections/header"); ?>
<body>
   <?php $this->load->view("sections/loader"); ?>
   <!-- Topbar Start -->
   <?php $this->load->view("sections/topbar"); ?>
   <!-- Topbar End -->
   <!-- Navbar Start -->
   <?php $this->load->view("sections/navbar"); ?>
   <!-- Navbar End -->
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
         <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
               <li class="breadcrumb-item"><a class="text-white" href="<?= base_url() ?>">Home</a></li>
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
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="filters-group mb-5 mb-lg-5">
                  <button class="btn-filter active" data-group="all">View All</button>
                  <button class="btn-filter" data-group="Infrastructure">Infrastructure</button>
                  <button class="btn-filter" data-group="Events">Events</button>
                  <button class="btn-filter" data-group="Faculties">Faculties</button>
                  <button class="btn-filter" data-group="Others">Others</button>
               </div>
               <div class="my-shuffle-container popup-gallery full-screen">
                  <!-- Gallery items (repeated for each image) -->
                  <?php foreach ($pictures as $key => $obj): ?>
                  <div class="col-md-4 grid-item mb-4 px-4 py-3" data-groups='["<?=  $obj->type; ?>"]'>
                     <div class="portfolio-item rounded">
                        <img src="<?= base_url('admin/assets/uploads/') . $obj->file; ?>" style="object-fit: cover;" alt="">
                        <div class="portfolio-overlay">
                           <a class="portfolio-description portfolio-img" href="#previewModal1" data-bs-toggle="modal" data-bs-target="#previewModal1" data-bs-src="<?= base_url('admin/assets/uploads/') . $obj->file; ?>">
                              <div class="portfolio-info d-flex flex-column align-items-center">
                                 <span class="portfolio-title"><?=  $obj->name; ?></span>
                                 <span class="icon-btn"><i class="fas fa-search"></i></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <?php endforeach ?>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 ">
               <?= $pages ?>
            </div>
         </div>
      </div>
   </section>
            
    <!-- Preview Modals -->
    <div class="modal fade" id="previewModal1" tabindex="-1" aria-labelledby="previewModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img class="img-fluid" id="modal-img" src="" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
   <?php $this->load->view("sections/footer"); ?>

   <script>
   var exampleModal = document.getElementById('previewModal1')
   exampleModal.addEventListener('show.bs.modal', function (event) {
     var button = event.relatedTarget
     var src = button.getAttribute('data-bs-src')
     $("#modal-img").attr('src', src);
   })
   </script>