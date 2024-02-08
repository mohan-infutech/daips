<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function new($data='')
	{
		$this->db->insert('gallery',$data);
		return $this->db->insert_id();
	}

	public function all()
	{
		$this->db->order_by('created_on', "DESC");
		return $this->db->get('gallery')->result();
	}

	public function get($value='')
	{
		return $this->db->get_where('gallery', ['id'=>$value])->row();
	}

	public function delete($value='')
	{
		$this->db->delete('gallery', ['id'=>$value]);
		return $this->db->affected_rows();
	}

}

/* End of file  */
/* Location: ./application/models/ */