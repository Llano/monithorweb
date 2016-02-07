<?php
class ServerModel extends CI_Model {

    
   function __construct()
   {
      // Call the Model constructor
      parent::__construct();
   }
    
    
    function generateKey($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    function addServer($name) {
        $data = array(
        'name' => $name,
        'key' => $this->generateKey()
        );
        
        $this->db->insert('servers', $data); 
        $last_id = $this->db->insert_id();
        
        $data = array(
        'server_id' => $last_id,
        'user_id' => $this->session->userdata('user_id')
        );
        
        $this->db->insert('server_owners', $data); 
        
        
    }


}
?>