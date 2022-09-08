<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function Dashboard()
	{
		$data['judul'] = 'Admin - Dashboard';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/index', $data);
	}

	public function Profile()
	{
		$data['judul'] = 'Admin - Profile';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/Profile', $data);
	}

	public function EventAktif()
	{
		$data['judul'] = 'Admin - Event Aktif';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/event_aktif', $data);
	}

	public function TambahEvent()
	{
		$data['judul'] = 'Admin - Tambah Event';
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/tambah_event', $data);
	}

}
