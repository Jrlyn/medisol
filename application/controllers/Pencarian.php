<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencarian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->model('Apotek_model');
    }    

    public function cari()
    {
        $cari = $this->input->post('cari');
        $data['daftar_lowongan'] = $this->Apotek_model->cari_lowongan($cari)->result();
        $data['daftar_apotek'] = $this->Apotek_model->cari_apotek($cari)->result();
        $data['daftar_obat'] = $this->Obat_model->cari_obat($cari)->result();
        $data['cari'] = $cari;
        $this->load->template_user('user/pencarian', $data);
    }
}
