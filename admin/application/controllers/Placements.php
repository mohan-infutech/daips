<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Placements extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Placements_model', 'mod');
	}

	public function index()
	{
		if($this->session->has_userdata('name')){
			$data['placements'] = TRUE;
			$data['page'] = 'Placements';
			$data['reviews'] = $this->mod->all();
			$this->load->view('placements', $data);
		} else {
			redirect('logout');
		}
	}

	public function new()
	{
		if($this->session->has_userdata('name')){
			$data['placements'] = TRUE;
			$data['page'] = 'New Placement';
			$this->load->view('new-placement', $data);
		} else {
			redirect('logout');
		}
	}

	public function upload()
	{
		if($this->session->has_userdata('name')){
			if($this->input->method() == 'post'){
				$config = array(
					'upload_path' => "./assets/uploads/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'encrypt_name' => TRUE
				);
				$this->load->library('upload', $config);
				if($this->upload->do_upload('file')){
					$dbdata = [
						'name' => $this->input->post('name'), 
						'comment' => $this->input->post('comment'),
						'company' => $this->input->post('company'),
						'batch' => $this->input->post('batch'),
						'program' => $this->input->post('program'),
						'file' => $this->upload->data('file_name'),
						'created_on' => date('Y-m-d h:i:s') 
					];
					$res = $this->mod->new($dbdata);
					if($res){
						$this->session->set_flashdata('success', 'Placement added successfully!');
					} else {
						$this->session->set_flashdata('error', 'Placement not added!');
					}
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors('<p class="m-0">','</p>'));
				}
				redirect('placements/new');
			} else {
				redirect('placements');
			}
		} else {
			redirect('logout');
		}
	}

	public function delete($value='')
	{
		if($this->session->has_userdata('name')){
			$obj = $this->mod->get($value);
			if($obj){
				unlink('./assets/uploads/' . $obj->file);
				if($this->mod->delete($value)){
					$this->session->set_flashdata('success', 'Placement deleted successfully!');
				} else {
					$this->session->set_flashdata('error', 'Placement not deleted!');
				}
			} else {
				$this->session->set_flashdata('error', 'Placement not found!');
			}
			redirect('placements');
		} else {
			redirect('logout');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */