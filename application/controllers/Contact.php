<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $this->load->view('contact_form');
    }

    public function submit_form() {
        $this->load->library('form_validation');

        // Validation rules
        $this->form_validation->set_rules('name', 'Your Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Your Phone', 'trim|required');
        $this->form_validation->set_rules('title', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Your Message', 'trim|required');

        if ($this->form_validation->run() === TRUE) {
            $this->load->view('contact');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $this->load->library('email');

            $this->email->from($email, $name);
            $this->email->to('skimtiaz86@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                echo 'Email sent successfully';
            } else {
                echo 'Email not sent. Error: ' . $this->email->print_debugger();
            }
        }
    }
}


