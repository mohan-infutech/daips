<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifications extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Notifications_model', 'nm');
	}

	public function index()
	{
		if($this->session->has_userdata('name')){
			$data['notifications'] = TRUE;
			$data['page'] = 'Notifications';
			$data['notifications'] = $this->nm->all();
			$this->load->view('notifications', $data);
		} else {
			redirect('logout');
		}
	}

	public function new()
	{
		if($this->session->has_userdata('name')){
			$data['notifications'] = TRUE;
			$data['page'] = 'Add Notification';
			$this->load->view('new-notification', $data);
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
					'allowed_types' => "pdf|docx|doc|ppt|txt",
					'encrypt_name' => TRUE
				);

				$this->load->library('upload', $config);

				$dbdata = [
					'title' => $this->input->post('title'), 
					'date' => date('Y-m-d', strtotime($this->input->post('date'))), 
					'description' => $this->input->post('desc'),
					'created_on' => date('Y-m-d h:i:s') 
				];

				if($this->upload->do_upload('file')){
					$dbdata['file'] = $this->upload->data('file_name');
				}

				$res = $this->nm->new($dbdata);

				if($res){
					$this->session->set_flashdata('success', 'Notifications added successfully!');
				} else {
					$this->session->set_flashdata('error', 'Notifications not added!');
				}

				redirect('notifications/new');
			} else {
				redirect('notifications');
			}
		} else {
			redirect('logout');
		}
	}

	public function delete($value='')
	{
		if($this->session->has_userdata('name')){

			$notification = $this->nm->get($value);

			if($notification){

				if(file_exists('./assets/uploads/' . $notification->file)){
					unlink('./assets/uploads/' . $notification->file);
				}
				
				if($this->nm->delete($value)){
					$this->session->set_flashdata('success', 'Notification deleted successfully!');
				} else {
					$this->session->set_flashdata('error', 'Notification not deleted!');
				}

			} else {
				$this->session->set_flashdata('error', 'Notification not found!');
			}

			redirect('notifications');

		} else {
			redirect('logout');
		}
	}

}

/* End of file  */
/* Location: ./application/controllers/ */