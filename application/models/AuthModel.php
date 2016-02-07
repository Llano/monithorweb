<?php
class AuthModel extends CI_Model {

   function __construct()
   {
      // Call the Model constructor
      parent::__construct();
   }


   function checkUser($email)
   {
      $query = $this->db->get_where('users', array('email' => $email));
      if($query->num_rows() == 0)
      {
         return false;
      }

      return true;
   }

   function createUser($email, $password)
   {
      if(!$this->checkUser($email))
      {
         $options = [
            'salt' => "KVg^h2XyGK|Fj|3fO2KtdhH2MYNZU_Kw%519ahHp+QeYbtWL8ZDe1w0NIzNa", //write your own code to generate a suitable salt
            'cost' => 12 // the default cost is 10
         ];
         $newPassword = password_hash($password, PASSWORD_DEFAULT, $options);
         $data = array(
            'email' => $email,
            'password' => $newPassword,
            'activated' => 0,
            'role' => 2
         );
         $this->db->insert('users', $data);
      }
   }

   function isActivated($email)
   {
      $result = $this->db->get_where('users', array('email' => $email));
      if ($result->row()->activated == 1) {
         return true;
      }
      else {
         return false;
      }
   }

   function login($email, $password)
   {
      if($this->checkUser($email) && $this->isActivated($email))
      {
         $options = [
            'salt' => "KVg^h2XyGK|Fj|3fO2KtdhH2MYNZU_Kw%519ahHp+QeYbtWL8ZDe1w0NIzNa", //write your own code to generate a suitable salt
            'cost' => 12 // the default cost is 10
         ];
         $query = $this->db->get_where('users', array('password' => password_hash($password, PASSWORD_DEFAULT, $options)));
         if($query->num_rows() == 1)
         {
            $this->authlib->login($query->row()->id);
            return true;
         }

         return false;
      }

      return false;
   }

   function requestInvite($email, $desc)
   {
      if($this->checkUser($email))
      {
         return false;
      }
      else
      {
         $data = array(
            'email' => $email,
            'activated' => 0,
            'description' => $desc
         );
         $this->db->insert('users', $data);
         return true;
      }
   }
}

?>
