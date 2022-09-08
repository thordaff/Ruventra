<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== 'active')
        {
            redirect('Auth/Login');
        }
    }

	public function index()
	{
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

        if($this->session->userdata('email'))
        {
            $this->load->view('template/NavbarA', $data);
            $this->load->view('event');
        }
		else
		{
            $this->load->view('event');
		}
	}

}
