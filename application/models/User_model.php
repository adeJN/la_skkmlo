<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    // Dapatkan kategori berdasar ID
    public function get_user_by_id($id)
    {
        $query = $this->db->get_where('users', array('user_id' => $id));
        return $query->row();
    }

    public function get_user_by_nama($nama)
        {
            $query = $this->db->get_where('users', array('nama' => $nama));

            // Karena datanya cuma 1, kita return cukup via row() saja
            return $query->row();
        }

    //---------------------------------------------------------------------------------------------------
    //---------------------------------------------------------------------------------------------------

    public function register($enc_password){
        // Array data user 
        $data = array(
            'fk_level_id' => ('5'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'nim' => $this->input->post('nim'),
            'nama_lengkap' => $this->input->post('nama'),
            'fk_id_jurusan' => $this->input->post('id_jurusan'),
            'fk_id_prodi' => $this->input->post('id_prodi'),
            'foto' => '',
            'status' => 1,
            'admin' => 1,
        );

        // Insert user
        return $this->db->insert('pengguna', $data);
    }


    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 0);

        $result = $this->db->get('pengguna');


        if($result->num_rows() == 1){
            return $result->row(0)->id_user;
        } else {
            return false;
        }
    }

    // Mendapatkan level user
    function get_user_level($user_id)
    {
        // Dapatkan data user berdasar $user_id
        $this->db->select('fk_level_id');
        $this->db->where('id_user', $user_id);

        $result = $this->db->get('pengguna');

        if($result->num_rows() == 1){
            return $result->row(0)->fk_level_id;
        } else {
            return false;
        }
    }


    function get_user_details($user_id)
    {
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id', 'left');
        $this->db->where('id_user', $user_id);

        $result = $this->db->get('pengguna');

        if($result->num_rows() == 1){
            return $result->row();
        } else {
            return false;
        }
    }


}
