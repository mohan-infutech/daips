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
		// code...
	}

	public function faculties($value='')
	{
		// code...
	}

	public function industryExposure($value='')
	{
		// code...
	}

	public function gallery($value='')
	{
		// code...
	}

	public function contact($value='')
	{
		// code...
	}

}
