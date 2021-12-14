<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Apotek_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['daftar_lowongan'] = $this->Apotek_model->lowongan()->result();
        $this->load->template_user('user/lowongan', $data);
    }
}
