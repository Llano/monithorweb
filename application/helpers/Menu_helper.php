<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');





function getUser()
{
    $ci=& get_instance();
    $user = $ci->db->get_where('users', array('id' => $ci->session->userdata('user_id')));
    return $user;
}



?>
