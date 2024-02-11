<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$this->load->view('gallery');
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

}
