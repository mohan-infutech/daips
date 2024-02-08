<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Achievements extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Achievements_model', 'mod');
	}

	public function index()
	{
		if($this->session->has_userdata('name')){
			$data['page'] = 'Achievements';
			$data['achievements'] = $this->mod->all();
			$this->load->view('achievements', $data);
		} else {
			redirect('logout');
		}
	}

	public function new()
	{
		if($this->session->has_userdata('name')){
			$data['achievements'] = TRUE;
			$data['page'] = 'Add Achievements';
			$this->load->view('new-achievements', $data);
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
					'allowed_types' => "jpg|jpeg|png|gif",
					'encrypt_name' => TRUE
				);

				$this->load->library('upload', $config);

				

				if($this->upload->do_upload('file')){
					$dbdata = [
						'title' => $this->input->post('title'), 
						'description' => $this->input->post('desc'),
						'date' => date('Y-m-d', strtotime($this->input->post('date'))), 
						'file' => $this->upload->data('file_name'),
						'created_on' => date('Y-m-d h:i:s') 
					];

					$res = $this->mod->new($dbdata);

					if($res){
						$this->session->set_flashdata('success', 'Achievements added successfully!');
					} else {
						$this->session->set_flashdata('error', 'Achievements not added!');
					}

				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors('<p class="m-0">','</p>'));
				}
				redirect('achievements/new');
			} else {
				redirect('achievements');
			}
		} else {
			redirect('logout');
		}
	}

	public function delete($value='')
	{
		if($this->session->has_userdata('name')){

			$eca = $this->mod->get($value);

			if($eca){

				if(file_exists('./assets/uploads/' . $eca->file)){
					unlink('./assets/uploads/' . $eca->file);
				}
				
				if($this->mod->delete($value)){
					$this->session->set_flashdata('success', 'Achievement deleted successfully!');
				} else {
					$this->session->set_flashdata('error', 'Achievement not deleted!');
				}

			} else {
				$this->session->set_flashdata('error', 'Achievement not found!');
			}

			redirect('achievements');

		} else {
			redirect('logout');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */