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


<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Programs</p>
                    <h1>Discover Our Dynamic Courses</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-heartbeat text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Courses & Affiliation</h4>
                            <p class="mb-4">We offer D. Pharmacy and B.Pharmacy courses, each with 60 seats. Both programs are approved by the Pharmacy Council of India, New Delhi, and recognized by the Department of Health & Family Welfare, Government of Odisha. We are ISO 9001:2015 certified.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-x-ray text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Faculty</h4>
                            <p class="mb-4">Our skilled faculty brings real-world experience from the pharmaceutical industry. They balance theory with hands-on learning, using small batches for interactive doubt clarification sessions, ensuring students understand and learn concepts effectively.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-brain text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Practical Exposure</h4>
                            <p class="mb-4">Our students gain valuable hands-on experience through our partnerships. With support from professors and practitioners in our network of hospitals, they apply theoretical knowledge to real-world scenarios in their Pharmaceutical studies.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-wheelchair text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Examinations</h4>
                            <p class="mb-4">We regularly assess our students to keep them focused and engaged in their studies. These assessments promote healthy competition among peers, encouraging continuous improvement over time.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-tooth text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Results</h4>
                            <p class="mb-4">We believe strongly in our students success. This confidence comes from the support and values we've given them during their time here. It sets the groundwork for them to achieve outstanding results.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-vials text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Extra curricular activities</h4>
                            <p class="mb-4">Our students participate in various enjoyable activities, giving them a chance to pursue their interests, build confidence, and relax. Engaging in these activities also helps them develop valuable skills that are important for success in life.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Course</p>
            <h1>Our Courses</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <ul class="nav flex-column nav-pills h-100 bg-light rounded d-flex align-items-center p-5" id="tabs">
                    <li class="nav-item w-100">
                        <a class="nav-link active" id="course1-tab" data-toggle="pill" href="#course1">Bachelor in Pharmacy</a>
                    </li>
                    <li class="nav-item w-100">
                        <a class="nav-link" id="course2-tab" data-toggle="pill" href="#course2">Master in Pharmacy</a>
                    </li>
                </ul>
            </div>

            <!-- Right-side content -->
            <div class="col-lg-4 col-md-6">
                <div class="tab-content">
                    <!-- Course 1 Details -->
                    <div class="tab-pane fade show active" id="course1">
                        <h2>Bachelor in Pharmacy</h2>
                        <p>Description for Course 1 goes here.</p>
                        <ul>
                            <li><p><i class="far fa-check-circle text-primary me-3"></i>Expert Faculty</p></li>
                            <li><p><i class="far fa-check-circle text-primary me-3"></i>Expert Faculty</p></li>
                            <li><p><i class="far fa-check-circle text-primary me-3"></i>Expert Faculty</p></li>
                            <!-- Add more course details as needed -->
                        </ul>
                    </div>

                    <!-- Course 2 Details -->
                    <div class="tab-pane fade" id="course2">
                        <h2>Master in Pharmacy</h2>
                        <p>Description for Course 2 goes here.</p>
                        <ul>
                            <li><p><i class="far fa-check-circle text-primary me-3"></i>Expert Faculty</p></li>
                            <li><p><i class="far fa-check-circle text-primary me-3"></i>Expert Faculty</p></li>
                            <li><p><i class="far fa-check-circle text-primary me-3"></i>Expert Faculty</p></li>
                            <!-- Add more course details as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        <?php $this->load->view('sections/footer'); ?>