<?php $this->load->view('sections/header'); ?>

<?php $this->load->view('sections/loader'); ?>

<?php $this->load->view('sections/topbar'); ?>


<!-- Navbar Start -->

<?php $this->load->view('sections/navbar'); ?>

<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-custom active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-map-marker-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Address</p>
                        <h5 class="mb-0">Jabaghat, Rourkela, Odisha. PIN - 769042</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Call Us Now</p>
                        <h5 class="mb-0">+91 9861718600</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Mail Us Now</p>
                        <h5 class="mb-0">info@daips.org</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Contact Us</p>
                    <h1 class="mb-4">For Any Query Contact Us</h1>
                    <form action="process.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Leave a message here" style="height: 100px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.106342575854!2d84.9254775863741!3d22.273961191536607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a201d11bbdff53f%3A0xf31e7f09782ac1e1!2sDr.%20Ambedkar%20Institute%20of%20Pharmaceutical%20Science!5e0!3m2!1sen!2sin!4v1707910358663!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php $this->load->view('sections/footer'); ?>
