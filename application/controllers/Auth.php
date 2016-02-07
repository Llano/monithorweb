<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login($id = null)
	{

		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			if(!$this->authlib->isLoggedIn())
			{
				$this->load->view("auth/login");
			}
			else
			{
				redirect("/");
			}

		}
		else
		{
			if($this->authmodel->login($this->input->post('email'), $this->input->post('password')))
			{
				redirect("/");
			}
			else
			{
				redirect("/auth/login");
			}
		}


	}

	public function addUser()
	{
		if($this->authlib->isAdmin())
		{
			echo "yes";
		}
		else
		{
			echo "no";
		}

	}

	public function logout()
	{
		$this->authlib->logout();
		redirect("/");
	}

	public function invitation()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
		$this->form_validation->set_rules('desc', 'Description', 'xss_clean');
		if ($this->form_validation->run() == FALSE)
		{
			if($this->authlib->isLoggedIn())
			{
				redirect("/");
			}
			else
			{
				$this->load->view("/auth/invitation");
			}

		}
		else
		{
			if($this->authmodel->requestInvite($this->input->post('email'), $this->input->post('desc')))
			{
				$this->maillib->sendmail("webmaster@monithor.net", "New invitation requested", "A new user has requested a invitation: ".$this->input->post('email'));
				$this->load->view('auth/invitation_sent');
			}
			else
			{
				redirect('/auth/login');
			}
		}

	}

	public function signup()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('agree', 'Terms & Condition', 'required');

		if($this->authlib->isLoggedIn())
		{
			redirect("/");
		}

		if ($this->form_validation->run() == FALSE)
		{

			
		}
		else
		{
			$this->authmodel->createUser($this->input->post('email'), $this->input->post('password'));
			redirect("/");
		}
	}

	public function mail()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			redirec("/");
			
		}
		else
		{
			$this->maillib->sendmail("webmaster@monithor.net", $this->input->post('email'), 'Email from Monithor.net contact form', $this->input->post('message'));
			redirect("/");
		}
	}
}
