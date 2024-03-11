<?php $this->load->view('sections/header'); ?>

<?php $this->load->view('sections/loader'); ?>

<?php $this->load->view('sections/topbar'); ?>


<!-- Navbar Start -->

<?php $this->load->view('sections/navbar'); ?>

<!-- Navbar End -->


<h3>Your form was successfully submitted!</h3>

<p><?php echo anchor('contact', 'Try it again!'); ?></p>




<?php $this->load->view('sections/footer'); ?>
