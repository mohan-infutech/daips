<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Gallery_model', 'gm');

	}

	public function index($value='')
	{
		$this->load->view('index');
	}

	public function about($value='')
	{
		$this->load->view('about');
	}

	public function academics($value='')
	{
		$this->load->view('academics');
	}

	public function faculties($value='')
	{
		$this->load->view('faculties');
	}

	public function industryExposure($value='')
	{
		$this->load->view('industry-exposure');
	}

	public function gallery($value='')
	{
		$page_num = ($this->uri->segment(2) == 0) ? 1 : $this->uri->segment(2);
		$pgc['base_url'] = base_url('gallery');
		$pgc['total_rows'] = $this->gm->count();
		$pgc['per_page'] = 2;
		$pgc['use_page_numbers'] = TRUE;
		$pgc['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$pgc['full_tag_close'] = '</ul>';
		$pgc['first_link'] = '&laquo;';
		$pgc['first_tag_open'] = '<li class="page-item">';
		$pgc['first_tag_close'] = '</li>';
		$pgc['last_link'] = '&raquo;';
		$pgc['last_tag_open'] = '<li class="page-item">';
		$pgc['last_tag_close'] = '</li>';
		$pgc['next_link'] = '&gt;';
		$pgc['next_tag_open'] = '<li class="page-item">';
		$pgc['next_tag_close'] = '</li>';
		$pgc['prev_link'] = '&lt;';
		$pgc['prev_tag_open'] = '<li class="page-item">';
		$pgc['prev_tag_close'] = '</li>';
		$pgc['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$pgc['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$pgc['num_tag_open'] = '<li class="page-item">';
		$pgc['num_tag_close'] = '</li>';
		$pgc['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($pgc);

		$data['gallery'] = TRUE;
		$data['page'] = 'Gallery';
		$data['pictures'] = $this->gm->fetch($pgc['per_page'], $page_num);
		$data['pages'] = $this->pagination->create_links();
		$this->load->view('gallery', $data);
	}

	public function contact($value='')
	{
		$this->load->view('contact');
	}

	public function principal($value='')
	{
		$this->load->view('principal-message');
	}

	public function chairman($value='')
	{
		$this->load->view('chairman-message');
	}

	public function bpharm($value='')
	{
		$this->load->view('bpharm');
	}

	public function dpharm($value='')
	{
		$this->load->view('dpharm');
	}

	public function notice($value='')
	{
		$this->load->view('notice');
	}

	public function syllabus($value='')
	{
		$this->load->view('syllabus');
	}

	public function academicCalendar($value='')
	{
		$this->load->view('academic-Calendar');
	}


}
