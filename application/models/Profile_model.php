<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_admin($value='')
	{
		return $this->db->get_where('users', ['role'=>'admin'])->row();
	}

	public function updateAccount($data='')
	{
		$updArr = [ 'password'=>sha1($data['new_pass']) ];
		$this->db->update('users',$updArr,['role'=>'admin']);
		return $this->db->affected_rows();
	}

	public function updateAccountPic($value='')
	{
		$updArr = [ 'photo'=>$value ];
		$this->db->update('users',$updArr,['role'=>'admin']);
		return $this->db->affected_rows();
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */