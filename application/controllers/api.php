<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

    public function incomingmail()
    {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $data = array(
                'recipient' => $this->input->post('recipient'),
                'body-plain' => $this->input->post('body-plain'),
                'sender' => $this->input->post('sender'),
                'from' => $this->input->post('from'),
                'subject' => $this->input->post('subject'),
                'body-html' => $this->input->post('body-html'),
                'attachment-count' => $this->input->post('attachment-count'),
                'attachment-x' => $this->input->post('attachment-x'),
                'timestamp' => $this->input->post('timestamp')

            );

            $this->db->insert('mail', $data);   
        }
        else
        {
            show_error('Unauthorized request' , 500);
        }
        
        
        
    }
}
