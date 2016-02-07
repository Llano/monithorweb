<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class AuthLib {

    
    public function isLoggedIn()
    {
        $ci = & get_instance();
        
        if($ci->session->userdata('user_id'))
        {
            return true;
        }
        
        return false;
    }
    
    public function isAdmin()
    {
        $ci = & get_instance();
        $query = $ci->db->get_where('users', array('id' => $ci->session->userdata('user_id'), 'role' => 1));
        if($query->num_rows() < 1)
        {
            return false;
        }
        
        return true;
    }
    
    public function login($id)
    {
        $ci = & get_instance();
        $ci->session->set_userdata('user_id', $id);
        
    }
    
    public function logout()
    {
        $ci = & get_instance();
        $ci->session->unset_userdata('user_id');
    }
}

/* End of file Someclass.php */