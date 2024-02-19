    <?php $this->load->view('sections/header'); ?>

    <body>

        <?php $this->load->view('sections/loader'); ?>


        <?php $this->load->view('sections/topbar'); ?>

        <?php $this->load->view('sections/logo'); ?>


        <!-- Navbar Start -->

        <?php $this->load->view('sections/navbar'); ?>

        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-pharma p-0 mb-5">
            <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">

                    <h1 class="display-4 text-white mb-5">Building Pharmaceutical leaders of tomorrow.</h1>
                    <p class="text-white mb-5">Delivering excellence in Pharmaceutical studies since 90's. Proudly contributing to the 30 year legacy of the Ambedkar Group.</p>
                    <div class="row g-4">
                        <div class="col-sm-4">
                            <div class="border-start border-light ps-4">
                                <h2 class="text-white mb-1" data-toggle="counter-up">30</h2>
                                <p class="text-light mb-0">Years of Experience</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="border-start border-light ps-4">
                                <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                                <p class="text-light mb-0">Students Passed</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="border-start border-light ps-4">
                                <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                                <p class="text-light mb-0">Life Saved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="<?= ASSETS . 'img/carousel-1.jpg'; ?>" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Cardiology</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="<?= ASSETS . 'img/carousel-2.jpg'; ?>" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Neurology</h1>
                            </div>
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="<?= ASSETS . 'img/carousel-3.jpg'; ?>" alt="">
                            <div class="owl-carousel-text">
                                <h1 class="display-1 text-white mb-0">Pulmonary</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Welcome Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Welcome</p>
                        <h1 class="mb-4">Who We Are</h1>
                        <p class="mb-4">Welcome to Dr. Ambedkar Institute of Pharmaceutical Sciences, a distinguished institution committed to shaping the future of pharmaceutical education and research. Established with a vision to empower aspiring pharmacists with knowledge, skills, and ethical values, we take pride in our qualified and experienced faculty who are dedicated to nurturing the next generation of pharmaceutical professionals.</p>
                        <div class="col-12">
                            <button class="btn btn-primary rounded py-3 px-5 mt-3" type="submit">Know More</button>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Choose Doctor</option>
                                            <option value="1">Doctor 1</option>
                                            <option value="2">Doctor 2</option>
                                            <option value="3">Doctor 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex flex-column">
                            <img class="img-fluid rounded w-75 align-self-end" src="<?= ASSETS . 'img/about-1.jpg'; ?>" alt="">
                            <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="<?= ASSETS . 'img/about-2.jpg'; ?>" alt="" style="margin-top: -25%;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                        <h1 class="mb-4">Why You Should Choose Us? Get Know About Us!</h1>
                        <p>At Dr. Ambedkar Institute of Pharmaceutical Sciences, we offer a transformative educational experience with expert faculty, cutting-edge infrastructure, and a focus on practical skills. </p>
                        <p class="mb-4">Your well-being is our priority, reflected in safe hostels and a well-maintained canteen. With strong industry connections and an active placement cell, we ensure seamless transitions into successful careers. Our track record of alumni success underscores the effectiveness of our programs. Choose us for a holistic education that prepares you for a flourishing career in the pharmaceutical field.</p>
                        <p><i class="far fa-check-circle text-custom me-3"></i>Expert Faculty</p>
                        <p><i class="far fa-check-circle text-custom me-3"></i>State-of-the-Art Infrastructure</p>
                        <p><i class="far fa-check-circle text-custom me-3"></i>Holistic Learning Environment</p>
                        <a class="btn btn-primary rounded py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


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
                                <i class="fas fa-bullseye text-custom fs-4"></i>
                            </div>
                            <h4 class="mb-3">Courses offered</h4>
                            <p class="mb-4">We have been offering D.Pharma course with 60 seats since our inception in 2019 and B.Pharma course with 60 seats from academic session 2021-22 onwards.</p>
                            <a class="btn" href=""><i class="fas fa-arrow-right text-custom me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fa fa-brain text-custom fs-4"></i>
                            </div>
                            <h4 class="mb-3">Course Recognition</h4>
                            <p class="mb-4">Our B.Pharma & D.Pharma courses are approved by Pharmacy Council of India, New Delhi & recognized by Health & Family Welfare Department, Govt. of Odisha. We are affiliated to BPUT, Rourkela. We are ISO 9001:2015 certified.</p>
                            <a class="btn" href=""><i class="fas fa-arrow-right text-custom me-3"></i>Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <i class="fas fa-hand-holding-heart text-custom fs-4"></i>
                            </div>
                            <h4 class="mb-3">Choose Excellence</h4>
                            <p class="mb-4">We have qualified and experienced faculty, state of the art laboratory & infrastructure, hygienic hostel  and canteen facilities for boys & girls. We are well connected with the industry & have an active placement cell.</p>
                            <a class="btn" href=""><i class="fas fa-arrow-right text-custom me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        


        <?php $this->load->view('sections/testimonial'); ?>  


        <?php $this->load->view('sections/footer'); ?>
