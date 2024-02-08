<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model', 'lm');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->input->method() == "post"){
			$data = $this->input->post();
			if(isset($data['remember'])){
				$cookie = array(
                    'name'   => 'username',
                    'value'  => $data['username'],                            
                    'expire' => 86400 * 30,                                                                         
                    'secure' => TRUE
                );
	            set_cookie($cookie); 
			}
			$record = $this->lm->authenticate($data);
			if($record){
				$this->session->set_userdata($record);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('error', 'Incorrect username or password!');
			}
		} else {
			if( $this->session->has_userdata('name') && $this->session->userdata('role') == 'admin'){
				redirect('dashboard');
			}else {
				$this->load->view('login');
			}
		}
	}

	public function forgotPassword(){
		$this->load->view('forgotPassword');
	}

	public function requestResetLink()
	{
		if($this->input->method()=="post")
		{
			$config = [
		        [
	                'field' => 'email',
	                'label' => 'Email',
	                'rules' => 'required|valid_email',
	                'errors' => [
	                    'valid_email' => 'You must provide a valid email.',
	                ]
		        ]
			];

			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('forgotPassword');
            } else {
            	$post = $this->input->post();
            	$post['token'] = md5(uniqid());
				$user = $this->lm->setToken($post);
				if($user){
					$data['link'] = base_url('reset-password') . '?authtoken=' . $post['token'];

					$mesg = $this->load->view('email-password-request',$data,true);
					
					$config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.hostinger.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'info@damits.ac.in',
                        'smtp_pass' => 'Info@123',
                        'mailtype'  => 'html', 
                        'charset'   => 'iso-8859-1'
                    );
                    $this->load->library('email', $config);
                    $this->email->initialize($config);
                    $this->email->set_newline("\r\n");
					$this->email->from('info@damits.ac.in', 'Damits CMS');
					$this->email->to($post['email']);
					$this->email->subject('Reset your Damits CMS account password!');
					$this->email->message($mesg);
					if(!$this->email->send()){
                        print_r($this->email->print_debugger(), true);
                    }

					$this->session->set_flashdata("success", "Please check you email inbox or spam for password reset link! It will take some time reach to your email.");
					redirect('login');
				}else{
					$this->session->set_flashdata("error", "Email doesn't exists in our database!");
					redirect('forgot-password');
				}
            }
		} else {
			redirect('logout');
		}
	}

	public function resetPassword()
	{
		if(isset($_GET['authtoken']) && strlen($_GET['authtoken'])==32){
			$data = $this->input->get();
			$this->load->view('resetPassword', $data);
		} else {
			$arrmsg = [
				'type' => 'ERROR',
				'title' => 'Something Went Wrong!',
				'message' => 'Some technical error occured in our server. Please try again later after few minutes!'
			];
			$this->session->set_flashdata($arrmsg);
			redirect('show-status');
		}
	}

	public function updatePassword()
	{
		if($this->input->method()=="post"){
			$post = $this->input->post();

			if($post['authtoken']){
				$user = $this->lm->getTokenUser($post['authtoken']);
				if ($user) {

					$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[16]');
					$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

					if ($this->form_validation->run() == FALSE){
		                $this->load->view('resetPassword');
		            } else {
		            	if($this->lm->updatePassword($post)){
		            		$this->session->set_flashdata("success", "Password was updated!");
		            	} else {
							$this->session->set_flashdata("error", "Password not updated!");
		            	}
		            	$this->load->view('login');
		            }

				} else {
					$this->session->set_flashdata("error", "Please re-try by entering your email!");
					redirect('forgot-password');
				}
			} else {
				$this->session->set_flashdata("error", "Something went wrong!");
				redirect('forgot-password');
			}
		} else {
			$this->session->set_flashdata("error", "Direct access prohibited!");
			redirect('forgot-password');
		}
	}
	public function logout()
	{
		unset($_SESSION['name']);
		redirect(base_url());
	}

}
