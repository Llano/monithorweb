<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banlist extends MY_Controller {

	public function index($id = null)
	{
        $this->load->view("banlist/index");
	}
}
