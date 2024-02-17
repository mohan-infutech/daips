<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function index() {
        $data['gallery_images'] = array(
            array('group' => 'dental', 'image' => '01.jpg', 'title' => 'Title 1'),
            array('group' => 'medicine', 'image' => '02.jpg', 'title' => 'Title 2'),
            array('group' => 'orthopaedics', 'image' => '03.jpg', 'title' => 'Title 3'),
        );

        $this->load->view('gallery', $data);
    }
}
