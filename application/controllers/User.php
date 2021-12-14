<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Apotek_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->isLoggedIn();
        $data['daftar_user'] = $this->User_model->daftar_user()->result();
        $this->load->template('daftar_user', $data);
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function admin()
    {
        $this->isLoggedIn();
        $data['daftar_admin'] = $this->User_model->daftar_user_apotek()->result();
        $data['daftar_apotek'] = $this->Apotek_model->daftar_apotek()->result();
        $this->load->template('admin/admin', $data);
    }

    // CONTROLLER TAMBAH USER BARU
    public function tambah_user()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        $id_apotek = $this->input->post('id_apotek');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'role' => $role,
            'id_apotek' => $id_apotek
        );

        $where = array(
            'username' => $username
        );

        $result = $this->User_model->checkUser($where);

        if ($result) {
            echo $this->session->set_flashdata('error', 'Username telah terpakai');
            redirect(base_url('users'));
        } else {
            $result2 = $this->User_model->input_user($data);
            if ($result2) {
                $this->session->set_flashdata('error', 'Data gagal disimpan');
                redirect(base_url('users'));
            } else {
                $this->session->set_flashdata('success', 'Admin Berhasil Ditambahkan');
                redirect(base_url('users'));
            }
        }
    }

    public function edit_user()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('edit_nama');
        $username = $this->input->post('edit_username');
        $password = $this->input->post('edit_password');
        $role = $this->input->post('edit_role');
        $id_apotek = $this->input->post('edit_id_apotek');

        if ($password == null) {
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'role' => $role,
                'id_apotek' => $id_apotek,
            );
        } else {
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'role' => $role,
                'id_apotek' => $id_apotek,
                'password' => md5($password),
            );
        }
        $result2 = $this->User_model->edit_user($id, $data);

        if ($result2) {
            $this->session->set_flashdata('error', 'Data gagal diupdate');
            redirect(base_url('users'));
        } else {
            $this->session->set_flashdata('success', 'Admin Berhasil Diupdate');
            redirect(base_url('users'));
        }
    }

    // CONTROLLER MENGHAPUS USER
    public function hapus_user()
    {
        $id = $this->input->get('id');
        if ($this->session->userdata('id') === $id) {
            $this->session->set_flashdata('error', 'User ini tidak boleh dihapus karena sedang aktif');
            redirect(base_url('users'));
        } else {
            $data = array(
                'id' => $id,
            );

            $result2 = $this->User_model->hapusUser($data);


            if ($result2) {
                $this->session->set_flashdata('error', 'Data gagal dihapus');
                redirect(base_url('users'));
            } else {
                $this->session->set_flashdata('success', 'User Berhasil Dihapus');
                redirect(base_url('users'));
            }
        }
    }

    public function autentikasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Username / Password belum diisi');
            redirect('login');
        } else {
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );
            $cek = $this->User_model->cek_login($where)->num_rows();
            if ($cek > 0) {
                $result = $this->User_model->cek_login($where)->result();

                $data_session = array(
                    'id' => $result[0]->id,
                    'id_apotek' => $result[0]->id_apotek,
                    'nama_admin' => $result[0]->nama,
                    'username' => $result[0]->username,
                    'role' => $result[0]->role,
                );

                $this->session->set_userdata($data_session);

                redirect(base_url('dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah !');
                redirect(base_url('login'));
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function access_denied()
    {
        $this->load->template('access_denied');
    }
}
