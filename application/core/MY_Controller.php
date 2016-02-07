<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    

    function __construct()
    {
        parent::__construct();

    }

    function _output($content)
    {
        // Load the base template with output content available as $content
        
        if(!$this->authlib->isLoggedIn())
        {
            redirect("/auth/login");
        }
        $data['content'] = &$content;
        $data['profile'] = $this->db->get_where('users', array('id' => $this->session->userdata('user_id')));


        $this->db->select("name, servers.id, maxRam")->from('servers')->join('server_owners', 'server_owners.server_id = servers.id')->where('server_owners.user_id', $this->session->userdata('user_id'));;
        $server = $this->db->get();

        $data['servers'] = $server;
        echo($this->load->view('base', $data, true));
        
    }

}