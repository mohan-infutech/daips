<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staffs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Staffs_model', 'mod');
	}

	public function index()
	{
		if($this->session->has_userdata('name')){
			$data['page'] = 'Staffs';
			$data['staffs'] = $this->mod->all();
			$this->load->view('staffs', $data);
		} else {
			redirect('logout');
		}
	}

	public function new()
	{
		if($this->session->has_userdata('name')){
			$data['staffs'] = TRUE;
			$data['page'] = 'New Staff';
			$this->load->view('new-staff', $data);
		} else {
			redirect('logout');
		}
	}

	public function edit($userid = null)
	{
		if($this->session->has_userdata('name')){
			$data['staffs'] = TRUE;
			$data['details'] = $this->mod->get($userid);
			$data['page'] = 'Edit Staff';
			$data['userid'] = $userid;
			if(!empty($data['details'])){
				$this->load->view('edit-staff', $data);
			} else {
				redirect('logout');
			}
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
					'designation' => $this->input->post('designation'),
					'type' => $this->input->post('type'),
					'qualification' => $this->input->post('qualification'),
					'about' => $this->input->post('about'),
					'created_on' => date('Y-m-d h:i:s') 
				];
				if($this->upload->do_upload('file')){
					$dbdata['image'] = $this->upload->data('file_name');
				}
				$res = $this->mod->new($dbdata);
				if($res){
					$this->session->set_flashdata('success', 'Staff added successfully!');
				} else {
					$this->session->set_flashdata('error', 'Staff not added!');
				}
				redirect('staffs/new');
			} else {
				redirect('staffs');
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
				unlink('./assets/uploads/' . $obj['image']);
				if($this->mod->delete($value)){
					$this->session->set_flashdata('success', 'Staff deleted successfully!');
				} else {
					$this->session->set_flashdata('error', 'Staff not deleted!');
				}
			} else {
				$this->session->set_flashdata('error', 'Staff not found!');
			}
			redirect('staffs');
		} else {
			redirect('logout');
		}
	}

	public function update($userid='')
	{
		if($this->session->has_userdata('name')){
			if($this->input->method() == 'post'){

				if (empty($_FILES['file']['name'])) {
					$filename = $this->input->post('image');
				} else {
					$config = array(
						'upload_path' => "./assets/uploads/",
						'allowed_types' => "gif|jpg|png|jpeg",
						'encrypt_name' => TRUE
					);
					$this->load->library('upload', $config);
					if($this->upload->do_upload('file')){
						$filename = $this->upload->data('file_name');
					} else {
						$filename = "";
					}
				}

				$dbdata = [
					'name' => $this->input->post('name'),
					'designation' => $this->input->post('designation'),
					'type' => $this->input->post('type'),
					'image' => $filename,
					'qualification' => $this->input->post('qualification'),
					'about' => $this->input->post('about'),
					'created_on' => date('Y-m-d h:i:s') 
				];

				$condition = ['id'=>$userid];

				$res = $this->mod->update($dbdata,$condition);
				if($res){
					$this->session->set_flashdata('success', 'Staff updated successfully!');
				} else {
					$this->session->set_flashdata('error', 'Staff not updated!');
				}

				redirect('staffs/edit/'.$userid);
			} else {
				redirect('staffs');
			}
		} else {
			redirect('logout');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */