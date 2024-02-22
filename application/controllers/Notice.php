<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function __construct()
    {
       $data['news_content'] = $this->loadNewsContent();
        $this->load->view('news_view', $data);
    }


}
