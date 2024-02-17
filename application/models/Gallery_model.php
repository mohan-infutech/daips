<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model
{

   public function all()
   {
      $query = $this->db->get('gallery'); 
      return $query->result();
   }

   public function new($data)
   {
      return $this->db->insert('gallery', $data); 
   }

   public function get($id)
   {
      $query = $this->db->get_where('gallery', array('id' => $id)); 
      return $query->row();
   }

   public function delete($id)
   {
      return $this->db->delete('gallery', array('id' => $id)); 
   }
}
