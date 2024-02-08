<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function authenticate($obj='')
	{
		$this->db->select('name, role, email, photo');
		$this->db->where(['username'=>$obj['username'],'password'=>sha1($obj['password'])]);
		$this->db->from('users');
		return $this->db->get()->row_array();
	}
	public function setToken($data)
	{
		$this->db->update('users', ['authtoken'=> $data['token']],['email'=>$data['email']]);
		if($this->db->affected_rows()){
			return $this->db->get_where('users', ['email'=>$data['email']]);
		}else {
			return false;
		}
	}

	public function updatePassword($data)
	{
		$this->db->update('users', 
			[ 'password' => sha1($data['password']), 'authtoken' => '' ], 
			[ 'authtoken' => $data['authtoken'] ]
		);
		return $this->db->affected_rows();
	}

	public function getTokenUser($value='')
	{
		return $this->db->get_where('users', ['authtoken'=> $value])->row_array();
	}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */