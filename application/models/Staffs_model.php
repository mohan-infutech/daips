<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staffs_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function new($data='')
	{
		$this->db->insert('staffs',$data);
		return $this->db->insert_id();
	}

	public function all()
	{
		$this->db->order_by('created_on', "DESC");
		return $this->db->get('staffs')->result();
	}

	public function get($value='')
	{
		return $this->db->get_where('staffs', ['id'=>$value])->row_array();
	}

	public function delete($value='')
	{
		$this->db->delete('staffs', ['id'=>$value]);
		return $this->db->affected_rows();
	}

	public function update($data='',$condition='')
	{
		$this->db->update('staffs', $data, $condition);
		return $this->db->affected_rows();
	}

}

/* End of file Notifications_model.php */
/* Location: ./application/models/Notifications_model.php */