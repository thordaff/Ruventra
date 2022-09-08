<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $data['user'] = $this->db->get_where('user');
    }
}