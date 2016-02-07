<?php

/**
 * Created by PhpStorm.
 * User: Zache
 * Date: 2015-11-12
 * Time: 02:49
 */
class Mailer extends MY_Controller
{
    public function compose()
    {
        $this->form_validation->set_rules('receiver', 'Receiver Email', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view("mail/compose");
        }
        else
        {
            $this->maillib->sendmail($this->input->post('receiver'), getUser()->row()->email, $this->input->post('subject'), $this->input->post('message'));
            redirect("/");

        }


    }

    public function inbox()
    {
        $this->load->view("mail/inbox");
    }


}