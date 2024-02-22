<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Gallery_model', 'gm');
   }

   public function index()
   {
      if ($this->session->has_userdata('name')) {

         //pagination code

         $pgc['base_url'] = base_url('gallery');
         $pgc['total_rows'] = $this->gm->count();
         $pgc['per_page'] = 1;

         $this->pagination->initialize($pgc);


         $data['gallery'] = TRUE;
         $data['page'] = 'Gallery';
         $data['pictures'] = $this->gm->all();
         $data['pages'] = $this->pagination->create_links();
         $this->load->view('gallery', $data);
      } else {
         redirect('logout');
      }
   }

   public function new()
   {
      if ($this->session->has_userdata('name')) {
         $data['gallery'] = TRUE;
         $data['page'] = 'Add New Picture';
         $this->load->view('new-gallery', $data);
      } else {
         redirect('logout');
      }
   }

   public function upload()
   {
      if ($this->session->has_userdata('name')) {
         if ($this->input->method() == 'post') {
            $config = array(
               'upload_path' => FCPATH . "assets/img/gallery/",
               'allowed_types' => "gif|jpg|png|jpeg",
               'encrypt_name' => TRUE
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('file')) {
               $dbdata = [
                  'name' => $this->input->post('name'),
                  'date' => date('Y-m-d', strtotime($this->input->post('date'))),
                  'file' => $this->upload->data('file_name'),
                  'created_on' => date('Y-m-d h:i:s')
               ];
               $res = $this->gm->new($dbdata);
               if ($res) {
                  $this->session->set_flashdata('success', 'Picture uploaded successfully!');
               } else {
                  $this->session->set_flashdata('error', 'Picture not uploaded!');
               }
            } else {
               $this->session->set_flashdata('error', $this->upload->display_errors('<p class="m-0">', '</p>'));
            }
            redirect('gallery/new');
         } else {
            redirect('gallery');
         }
      } else {
         redirect('logout');
      }
   }

   public function delete($id = '')
   {
      if ($this->session->has_userdata('name')) {
         $img = $this->gm->get($id);
         if ($img) {
            unlink('./assets/uploads/' . $img->file);
            if ($this->gm->delete($id)) {
               $this->session->set_flashdata('success', 'Picture deleted successfully!');
            } else {
               $this->session->set_flashdata('error', 'Picture not deleted!');
            }
         } else {
            $this->session->set_flashdata('error', 'Picture not found!');
         }
         redirect('gallery');
      } else {
         redirect('logout');
      }
   }
}
