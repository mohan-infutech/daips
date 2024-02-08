<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedbacks extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Feedbacks_model', 'mod');
	}

	public function index()
	{
		if($this->session->has_userdata('name')){
			$data['feedbacks'] = TRUE;
			$data['page'] = 'Feedbacks';
			$data['reviews'] = $this->mod->all();
			$this->load->view('feedbacks', $data);
		} else {
			redirect('logout');
		}
	}

	public function new()
	{
		if($this->session->has_userdata('name')){
			$data['feedbacks'] = TRUE;
			$data['page'] = 'New Feedback';
			$this->load->view('new-feedback', $data);
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
				$dbdata = [
					'name' => $this->input->post('name'), 
					'comment' => $this->input->post('comment'),
					'company' => $this->input->post('company'),
					'created_on' => date('Y-m-d h:i:s') 
				];
				if($this->upload->do_upload('file')){
					$dbdata['file'] = $this->upload->data('file_name');
				}
				$res = $this->mod->new($dbdata);
				if($res){
					$this->session->set_flashdata('success', 'Feedback added successfully!');
				} else {
					$this->session->set_flashdata('error', 'Feedback not added!');
				}
				redirect('feedbacks/new');
			} else {
				redirect('feedbacks');
			}
		} else {
			redirect('logout');
		}
	}

	public function delete($value='')
	{
		if($this->session->has_userdata('name')){
			$img = $this->mod->get($value);
			if($img){
				unlink('./assets/uploads/' . $img->file);
				if($this->mod->delete($value)){
					$this->session->set_flashdata('success', 'Picture deleted successfully!');
				} else {
					$this->session->set_flashdata('error', 'Picture not deleted!');
				}
			} else {
				$this->session->set_flashdata('error', 'Picture not found!');
			}
			redirect('feedbacks');
		} else {
			redirect('logout');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */