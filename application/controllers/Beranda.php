<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();

		if($this->session->userdata('email'))
        {
            $this->load->view('template/NavbarA',$data);
            $this->load->view('index');
        }
		else
		{
			$this->load->view('template/NavbarB');
			$this->load->view('index');
		}

	}

}
