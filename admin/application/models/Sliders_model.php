<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sliders_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function new($data='')
	{
		$this->db->insert('sliders',$data);
		return $this->db->insert_id();
	}

	public function all()
	{
		$this->db->order_by('created_on', "DESC");
		return $this->db->get('sliders')->result();
	}

	public function get($value='')
	{
		return $this->db->get_where('sliders', ['id'=>$value])->row();
	}

	public function delete($value='')
	{
		$this->db->delete('sliders', ['id'=>$value]);
		return $this->db->affected_rows();
	}

}

/* End of file  */
/* Location: ./application/models/ */