<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sliders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sliders_model', 'mod');
	}

	public function index()
	{
		if($this->session->has_userdata('name')){
			$data['page'] = 'Sliders';
			$data['sliders'] = $this->mod->all();
			$this->load->view('sliders', $data);
		} else {
			redirect('logout');
		}
	}

	public function new()
	{
		if($this->session->has_userdata('name')){
			$data['sliders'] = TRUE;
			$data['page'] = 'Add New Picture';
			$this->load->view('new-slider', $data);
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
						'title' => $this->input->post('title'), 
						'subtitle' => $this->input->post('subtitle'),
						'file' => $this->upload->data('file_name'),
						'created_on' => date('Y-m-d h:i:s') 
					];
					$res = $this->mod->new($dbdata);
					if($res){
						$this->session->set_flashdata('success', 'Slider uploaded successfully!');
					} else {
						$this->session->set_flashdata('error', 'Slider not uploaded!');
					}
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors('<p class="m-0">','</p>'));
				}
				redirect('sliders/new');
			} else {
				redirect('sliders');
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
					$this->session->set_flashdata('success', 'Slider deleted successfully!');
				} else {
					$this->session->set_flashdata('error', 'Slider not deleted!');
				}
			} else {
				$this->session->set_flashdata('error', 'Slider not found!');
			}
			redirect('sliders');
		} else {
			redirect('logout');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */