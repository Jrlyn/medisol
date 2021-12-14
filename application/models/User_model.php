<?php

class User_model extends CI_Model
{

    // QUERY MENAMPILKAN DAFTAR USER
    function daftar_user()
    {
        $result = $this->db->query('select * from users');
        return $result;
    }

    function daftar_user_apotek()
    {
        $result = $this->db->query('SELECT users.*, apotek.nama as apotek, apotek.id as id_apotek FROM users LEFT JOIN apotek ON apotek.id <=> users.id_apotek');
        return $result;
    }

    // QUERY MENAMPILKAN DAFTAR USER BERDASARKAN ROLE
    function daftar_user_by_role($role)
    {
        $result = $this->db->query('select id, username, nama_lengkap, role, jenis from user where role="' . $role . '"');
        return $result;
    }

    // QUERY MENGECEK USERNAME
    function checkUser($where)
    {
        $this->db->where($where);
        $query = $this->db->get("users");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //QUERY MENGHAPUS USER
    function hapusUser($where)
    {
        $this->db->where($where);
        $this->db->delete('users');
    }

    //QUERY MENGEDIT USER
    function edit_user($id, $data)
    {
        $this->db->where('id', $id);
        // $this->db->set('update_time', 'NOW()', FALSE);
        $this->db->update('users', $data);
    }

    //QUERY MENAMBAH USER
    function input_user($where)
    {
        $this->db->set('id', 'UUID()', FALSE);
        // $this->db->set('create_time', 'NOW()', FALSE);
        $this->db->insert('users', $where);
    }

    function cek_login($where)
    {
        return $this->db->get_where('users', $where);
    }

    function cek_users($where)
    {
        return $this->db->get_where('users', $where);
    }
}
