<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model', 'pm');
	}

	public function index()
	{
		$data['admin'] = $this->pm->get_admin();
		$this->load->view('profile', $data);
	}

	public function updateProfilePic($value='')
	{
	    if($this->session->has_userdata('name')){
	      if(empty($_FILES)){
	        $this->session->set_flashdata('error','Please select an image!');
	      }else{
	        if($_FILES['file']['name'] != ""){
	          $file_name = basename($_FILES['file']['name']);
	          $config['upload_path'] = './assets/uploads/';
	          $config['allowed_types'] = 'gif|jpg|png|jpeg|gif|webp';
	          $config['file_name'] = $file_name;
	          $this->load->library('upload', $config);
	          $this->upload->initialize($config);
	          if ($this->upload->do_upload('file')){
	            $affRows = $this->pm->updateAccountPic($file_name);
	            if($affRows){
	              $this->session->set_flashdata('success','Information updated!');
	            } else {
	              $this->session->set_flashdata('error','Information not updated!');
	            }
	          }else{
	            $this->session->set_flashdata('error','Please select image only!');
	          }
	        } else {
	          $this->session->set_flashdata('error','Please send one image!');
	        }
	      }
	      redirect('profile');
	    } else {
	      redirect('logout');
	    }
  	}

  	public function updatePassword()
	{
	    if($this->session->has_userdata('name')){
	      $data = $this->input->post();
	      if($data['new_pass'] == $data['con_pass']){
	          $admin = $this->pm->get_admin();
	          if(sha1($data['cur_pass']) == $admin->password){
	            $affrows = $this->pm->updateAccount($data);
	            if($affrows){
	              $this->session->set_flashdata('success','Account Password updated!');
	            } else {
	              $this->session->set_flashdata('error','Account Password not updated!');
	            }
	          }else{
	            $this->session->set_flashdata('error',"Password is incorrect!");
	          }
	      } else {
	        $this->session->set_flashdata('error','Passwords do not match!');
	      }
	      redirect('profile');
	    } else {
	      redirect('admin/logout');
	    } 
	}

}

/* End of file  */
/* Location: ./application/controllers/ */