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


    <div class="container mt-5">
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
            <!-- Add more gallery items as needed -->
        </div>
    </div>

    




<?php $this->load->view('sections/footer'); ?>