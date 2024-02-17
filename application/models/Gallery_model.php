<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    public function get_gallery_images() {
        // You can retrieve images from the database if needed
        return array(
            array('group' => 'dental', 'image' => '01.jpg', 'title' => 'Title 1'),
            array('group' => 'medicine', 'image' => '02.jpg', 'title' => 'Title 2'),
            array('group' => 'orthopaedics', 'image' => '03.jpg', 'title' => 'Title 3'),
        );
    }
}
