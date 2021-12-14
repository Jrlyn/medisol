<?php

class Apotek_model extends CI_Model
{

    // QUERY MENAMPILKAN DAFTAR apotek
    function daftar_apotek()
    {
        $result = $this->db->query('select * from apotek');
        return $result;
    }

    function cari_apotek($cari)
    {
        $result = $this->db->query('select * from apotek where nama like "%' . $cari . '%"');
        return $result;
    }

    function apotekby($id)
    {
        $result = $this->db->query('select * from apotek where id = "' . $id . '"');
        return $result;
    }

    function lowongan()
    {
        $result = $this->db->query('select lowongan.*, apotek.nama from lowongan, apotek where lowongan.id_apotek=apotek.id');
        return $result;
    }

    function cari_lowongan($cari)
    {
        $result = $this->db->query('select a.*, b.nama from lowongan a inner join apotek b on a.id_apotek = b.id where a.judul_lowongan like "%' . $cari . '%"');
        return $result;
    }

    function lowonganby($id)
    {
        $result = $this->db->query('select * from lowongan where id_apotek = "' . $id . '"');
        return $result;
    }

    function daftar_obat_apotek($id)
    {
        $result = $this->db->query('SELECT obat.*, obat_apotek.id as id_obat_apotek FROM obat, obat_apotek, apotek WHERE apotek.id = obat_apotek.id_apotek AND obat_apotek.id_obat = obat.id AND apotek.id = "' . $id . '"');
        return $result;
    }

    function daftar_obat_apotek_all()
    {
        $result = $this->db->query('SELECT obat.*, obat_apotek.id as id_obat_apotek, obat_apotek.id_apotek as id_apotek FROM obat, obat_apotek, apotek WHERE apotek.id = obat_apotek.id_apotek AND obat_apotek.id_obat = obat.id');
        return $result;
    }

    function daftar_obat($id)
    {
        $result = $this->db->query('SELECT obat.* FROM obat');
        return $result;
    }

    // QUERY MENAMPILKAN DAFTAR apotek BERDASARKAN ROLE
    function daftar_apotek_by_role($role)
    {
        $result = $this->db->query('select id, apotekname, nama_lengkap, role, jenis from apotek where role="' . $role . '"');
        return $result;
    }

    // QUERY MENGECEK apotekNAME
    function checkapotek($where)
    {
        $this->db->where($where);
        $query = $this->db->get("admin");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //QUERY MENGHAPUS apotek
    function hapusapotek($where)
    {
        $this->db->where($where);
        $this->db->delete('apotek');
    }

    function hapus_obat($where)
    {
        $this->db->where($where);
        $this->db->delete('obat_apotek');
    }

    function hapus_lowongan($where)
    {
        $this->db->where($where);
        $this->db->delete('lowongan');
    }

    //QUERY MENGEDIT apotek
    function edit_apotek($id, $data)
    {
        $this->db->where('id', $id);
        // $this->db->set('update_time', 'NOW()', FALSE);
        $this->db->update('apotek', $data);
    }

    //QUERY MENAMBAH apotek
    function input_apotek($where)
    {
        $this->db->set('id', 'UUID()', FALSE);
        // $this->db->set('create_time', 'NOW()', FALSE);
        $this->db->insert('apotek', $where);
    }

    function input_obat_apotek($where)
    {
        $this->db->set('id', 'UUID()', FALSE);
        // $this->db->set('create_time', 'NOW()', FALSE);
        $this->db->insert('obat_apotek', $where);
    }

    function edit_lowongan($id, $data)
    {
        $this->db->where('id', $id);
        // $this->db->set('update_time', 'NOW()', FALSE);
        $this->db->update('lowongan', $data);
    }

    //QUERY MENAMBAH apotek
    function input_lowongan($data)
    {
        $this->db->set('id', 'UUID()', FALSE);
        // $this->db->set('create_time', 'NOW()', FALSE);
        $this->db->insert('lowongan', $data);
    }
}
