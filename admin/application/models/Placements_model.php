<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Placements_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function new($data='')
	{
		$this->db->insert('placements',$data);
		return $this->db->insert_id();
	}

	public function all()
	{
		$this->db->order_by('created_on', "DESC");
		return $this->db->get('placements')->result();
	}

	public function get($value='')
	{
		return $this->db->get_where('placements', ['id'=>$value])->row();
	}

	public function delete($value='')
	{
		$this->db->delete('placements', ['id'=>$value]);
		return $this->db->affected_rows();
	}

}

/* End of file Notifications_model.php */
/* Location: ./application/models/Notifications_model.php */