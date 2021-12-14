<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apotek extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Apotek_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->isLoggedIn();
        $data['daftar_apotek'] = $this->Apotek_model->daftar_apotek()->result();
        $this->load->template('admin/apotek', $data);
    }

    public function list()
    {
        $data['daftar_apotek'] = $this->Apotek_model->daftar_apotek()->result();
        $data['daftar_obat'] = $this->Apotek_model->daftar_obat_apotek_all()->result();
        $this->load->template_user('user/apotek', $data);
    }

    public function detail()
    {
        $id = $this->input->get('id');
        $data['daftar_obat'] = $this->Apotek_model->daftar_obat_apotek($id)->result();
        $data['apotek'] = $this->Apotek_model->apotekby($id)->result();
        $this->load->template_user('user/apotek_detail', $data);
    }

    public function obat()
    {
        $id = $this->input->get('id');
        $data['daftar_obat_apotek'] = $this->Apotek_model->daftar_obat_apotek($id)->result();
        $data['daftar_obat'] = $this->Apotek_model->daftar_obat($id)->result();
        $data['apotek'] = $this->Apotek_model->apotekby($id)->result();
        $data['id_apotek'] = $id;
        $this->load->template('admin/obat_apotek', $data);
    }

    public function lowongan()
    {
        if ($this->session->userdata('role') == "apotek") {
            $id = $this->input->get('id');
            $data['lowongan'] = $this->Apotek_model->lowonganby($id)->result();
            $data['id_apotek'] = $id;
        } else {
            $data['lowongan'] = $this->Apotek_model->lowongan()->result();
            $data['apotek'] = $this->Apotek_model->daftar_apotek()->result();
        }
        $this->load->template('admin/lowongan', $data);
    }

    public function lowongan_tambah()
    {
        if ($this->session->userdata('id_apotek') != null) {
            $id_apotek = $this->session->userdata('id_apotek');
        } else {
            $id_apotek = $this->input->post('id_apotek');
        }

        $judul_lowongan = $this->input->post('judul_lowongan');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'keterangan' => $keterangan,
            'id_apotek' => $id_apotek,
            'judul_lowongan' => $judul_lowongan,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir,
        );
        $result2 = $this->Apotek_model->input_lowongan($data);


        if ($result2) {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('apotek/lowongan?id=' . $id_apotek));
        } else {
            $this->session->set_flashdata('success', 'Lowongan Berhasil Disimpan');
            redirect(base_url('apotek/lowongan?id=' . $id_apotek));
        }
    }

    public function lowongan_edit()
    {
        $id = $this->input->post('id');
        $judul_lowongan = $this->input->post('edit_judul_lowongan');
        $tgl_awal = $this->input->post('edit_tgl_awal');
        $tgl_akhir = $this->input->post('edit_tgl_akhir');
        $keterangan = $this->input->post('edit_keterangan');
        if ($this->session->userdata('id_apotek') != null) {
            $id_apotek = $this->session->userdata('id_apotek');
            $data = array(
                'keterangan' => $keterangan,
                'judul_lowongan' => $judul_lowongan,
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
            );
        } else {
            $id_apotek = $this->input->post('edit_id_apotek');
            $data = array(
                'id_apotek' => $id_apotek,
                'keterangan' => $keterangan,
                'judul_lowongan' => $judul_lowongan,
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
            );
        }





        $result2 = $this->Apotek_model->edit_lowongan($id, $data);
        if ($result2) {
            $this->session->set_flashdata('error', 'Data gagal diupdate');
            redirect(base_url('apotek/lowongan?id=' . $id_apotek));
        } else {
            $this->session->set_flashdata('success', 'Data Berhasil Diupdate');
            redirect(base_url('apotek/lowongan?id=' . $id_apotek));
        }
    }

    public function hapus_lowongan()
    {
        $id = $this->input->get('id');
        $id_apotek = $this->session->userdata('id_apotek');

        $data = array(
            'id' => $id,
        );

        $result2 = $this->Apotek_model->hapus_lowongan($data);


        if ($result2) {
            $this->session->set_flashdata('error', 'Data gagal dihapus');
            redirect(base_url('apotek/lowongan?id=' . $id_apotek));
        } else {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
            redirect(base_url('apotek/lowongan?id=' . $id_apotek));
        }
    }

    public function tambah_obat()
    {
        $id_obat = $this->input->post('id_obat');
        $id_apotek = $this->input->post('id_apotek');



        for ($i = 0; $i < count($id_obat); $i++) {
            // $data[$i]['id_obat'] = $id_obat[$i];
            // $data[$i]['id_apotek'] = $id_apotek;
            $data = array(
                'id_obat' => $id_obat[$i],
                'id_apotek' => $id_apotek,
            );
            $result2 = $this->Apotek_model->input_obat_apotek($data);
        }


        if ($result2) {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect(base_url('apotek/obat?id=' . $id_apotek));
        } else {
            $this->session->set_flashdata('success', 'Obat Apotek Berhasil Ditambahkan');
            redirect(base_url('apotek/obat?id=' . $id_apotek));
        }
    }

    public function tambah_apotek()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $longitude = $this->input->post('longitude');
        $langitude = $this->input->post('langitude');
        $no_wa = $this->input->post('no_wa');

        $config['upload_path'] = './asset/apotek/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data = $this->upload->display_errors();
            $this->session->set_flashdata('error', $data);
            redirect(base_url('apotek'));
        } else {
            $uploaded_data = $this->upload->data();
            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'no_wa' => $no_wa,
                'longitude' => $longitude,
                'langitude' => $langitude,
                'gambar' => $uploaded_data['file_name'],
            );
            $result2 = $this->Apotek_model->input_apotek($data);
            if ($result2) {
                $this->session->set_flashdata('error', 'Data gagal disimpan');
                redirect(base_url('apotek'));
            } else {
                $this->session->set_flashdata('success', 'Apotek Berhasil Ditambahkan');
                redirect(base_url('apotek'));
            }
        }
    }

    public function edit_apotek()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('edit_nama');
        $alamat = $this->input->post('edit_alamat');
        $no_wa = $this->input->post('edit_no_wa');
        $longitude = $this->input->post('edit_longitude');
        $langitude = $this->input->post('edit_langitude');

        $config['upload_path'] = './asset/apotek/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);



        if (!$this->upload->do_upload('edit_gambar')) {
            $data = $this->upload->display_errors();
            // $this->session->set_flashdata('error', $data);
            // redirect(base_url('apotek'));
            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'no_wa' => $no_wa,
                'longitude' => $longitude,
                'langitude' => $langitude,
            );
            $result2 = $this->Apotek_model->edit_apotek($id, $data);
            if ($result2) {
                $this->session->set_flashdata('error', 'Data gagal diupdate');
                redirect(base_url('apotek'));
            } else {
                $this->session->set_flashdata('success', 'Apotek Berhasil Diupdate');
                redirect(base_url('apotek'));
            }
        } else {
            $uploaded_data = $this->upload->data();
            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'no_wa' => $no_wa,
                'longitude' => $longitude,
                'langitude' => $langitude,
                'gambar' => $uploaded_data['file_name'],
            );
            $result2 = $this->Apotek_model->edit_apotek($id, $data);
            if ($result2) {
                $this->session->set_flashdata('error', 'Data gagal diupdate');
                redirect(base_url('apotek'));
            } else {
                $this->session->set_flashdata('success', 'Apotek Berhasil Diupdate');
                redirect(base_url('apotek'));
            }
        }
    }

    public function hapus_apotek()
    {
        $id = $this->input->get('id');

        $data = array(
            'id' => $id,
        );

        $result2 = $this->Apotek_model->hapusapotek($data);


        if ($result2) {
            $this->session->set_flashdata('error', 'Apotek gagal dihapus');
            redirect(base_url('apotek'));
        } else {
            $this->session->set_flashdata('success', 'Apotek Berhasil Dihapus');
            redirect(base_url('apotek'));
        }
    }

    public function hapus_obat()
    {
        $id = $this->input->get('id');
        $id_apotek = $this->input->get('id_apotek');

        $data = array(
            'id' => $id,
        );

        $result2 = $this->Apotek_model->hapus_obat($data);


        if ($result2) {
            $this->session->set_flashdata('error', 'Obat Apotek gagal dihapus');
            redirect(base_url('apotek/obat?id=' . $id_apotek));
        } else {
            $this->session->set_flashdata('success', 'Obat Apotek Berhasil Dihapus');
            redirect(base_url('apotek/obat?id=' . $id_apotek));
        }
    }
}
