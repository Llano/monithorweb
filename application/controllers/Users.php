<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {

   public function index($id = null)
   {
      if($id == null)
      {
         if(!$this->authlib->isAdmin())
         {
            redirect("/");
         }
         $this->db->select("*, COUNT(servers.id) as nrOfServers, users.id as user_id")->from('users')->join('server_owners', 'server_owners.user_id = users.id', 'left')->join('servers', 'servers.id = server_owners.server_id', 'left')->join('role', 'role.id = users.role', 'left')->group_by('users.id');
         $data['users'] = $this->db->get();
         $data['page_title'] = "Users";
         $this->load->view('users/index', $data);

      }
      else
      {
         $this->db->select("*, users.id as user_id")->from('users')->join('server_owners', 'server_owners.user_id = users.id', 'left')->join('servers', 'servers.id = server_owners.server_id', 'left')->where('users.id', $id);
         $server = $this->db->get();

         if($this->authlib->isAdmin() || $this->session->userdata('user_id') == $id)
         {
            if($server->num_rows() == 0)
            {
               show_404();
            }
            else
            {
               $data['profile'] = $server;
               $data['email'] = array('name' => 'email', 'value' => $server->row()->email, 'class' => 'form-control');
               $data['page_title'] = "Pofile - " .$server->row()->email;
               $this->load->view('users/view', $data);
            }
         }
         else {
            redirect("/");
         }



      }





   }

   public function update()
   {
      if($this->authlib->isAdmin())
      {
         if ($this->input->post('activate')) {
            $this->activate();
         }
         else if($this->input->post('deactivate'))
         {
            $this->deactivate();
         }
         else if ($this->input->post('delete')) {
            $this->delete();
         }
      }
   }

   public function delete()
   {
      if($this->authlib->isAdmin())
      {

         foreach ($this->input->post('user_checked') as $value) {
            $this->db->delete('users', array('id' => $value));
         }

         redirect("/users");
      }
      else {
         redirect("/");
      }
   }

   public function activate()
   {
      $data = array(
               'activated' => 1
            );


      if($this->authlib->isAdmin())
      {

         foreach ($this->input->post('user_checked') as $value) {
            $this->db->where('id', $value);
            $this->db->update('users', $data);
         }

         redirect("/users");
      }
      else {
         redirect("/");
      }
   }

   public function deactivate()
   {
      $data = array(
               'activated' => 0
            );


      if($this->authlib->isAdmin())
      {

         foreach ($this->input->post('user_checked') as $value) {
            $this->db->where('id', $value);
            $this->db->update('users', $data);
         }

         redirect("/users");
      }
      else {
         redirect("/");
      }
   }





};

?>
