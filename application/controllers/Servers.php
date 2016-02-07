<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servers extends MY_Controller {

	public function index($id = null)
	{
        
        if($id != null)
        {
            $query = $this->db->get_where('server_owners', array('server_id' => $id, 'user_id' => $this->session->userdata('user_id')));
            
            if($query->num_rows() < 1)
            {
                show_404();  
            }
            else
            {
                $this->db->select("*, servers.id")->from("servers")->join('missions', 'missions.server_id = servers.id', 'left')->where('servers.id', $id)->limit(1);
                $server = $this->db->get();
                //$server = $this->db->get_where('servers', array('id' => $id));


                if($server->num_rows() == 0)
                {
                    show_404();   
                }
                else
                {
                    $data['server'] = $server;
                    $data['page_title'] = $server->row()->name;
                    $this->load->view('servers/view', $data);   
                }
            }
            
            
            
        }
        else
        {
            
            $this->db->select("name, servers.id, maxRam")->from('servers')->join('server_owners', 'server_owners.server_id = servers.id')->where('server_owners.user_id', $this->session->userdata('user_id'));;
            $data['servers'] = $this->db->get();
            $data['page_title'] = "Servers list";
            $this->load->view('servers/index', $data);
        }
        
	}

    public function add()
    {
        
        $this->form_validation->set_rules('servername', 'Servername', 'required');
        if ($this->form_validation->run() == FALSE)
		{
			$data['page_title'] = "Add server";
            $this->load->view("servers/add", $data);
                
		}
		else
		{
			$this->servermodel->addServer($this->input->post('servername'));
            redirect("/servers");
		}
        
    }

    public function delete($id)
    {

    }

    public function edit($id)
    {
        
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */