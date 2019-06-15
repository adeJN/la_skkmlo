<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Android_r extends REST_Controller {
	function __construct($config='rest'){
    	parent::__construct($config);
    }
	//======AKU GAE DIBAWAH INI=====

    public function userById_get(){
      $id_user = @$_REQUEST['id_user'];
      
      if($id_user !=''){
        $this->db->where('id_user', $id_user);
        $data = $this->db->get('pengguna')->row();

        if (!empty($data)) {
          echo json_encode($data);
        }
        else{
          echo json_encode(array('status' => 'Data Tidak Ditemukan'));
        }
      }
      else{
        echo json_encode(array('status' => 'Silahkan Periksa Koneksi Internet Anda'));
      }
    }

    public function login_get(){
      $username = @$_REQUEST['username'];
      $password = @$_REQUEST['password'];

      if($username !='' && $password !=''){
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $data = $this->db->get_where('pengguna', array('status' => 0,'fk_level_id' => 5))->row();

        if (!empty($data)) {
          echo json_encode(array('status' => 'sukses', 'data' => $data));
        }
        else{
          echo json_encode(array('status' => 'gagal', 'msg' => 'Username atau password yang anda masukkan salah'));
        }
      }
      else{
        $data = array('status' => 'gagal', 'msg' => 'Username dan password harus diisi terlebih dahulu');
        echo json_encode($data);
      }
    }

    public function register_post(){
        $nim              = @$_REQUEST['nim'];
        $nama_lengkap     = @$_REQUEST['nama_lengkap'];
        $username         = @$_REQUEST['username'];
        $password         = @$_REQUEST['password'];
        $tahun_masuk      = @$_REQUEST['tahun_masuk'];

        if($username !=''){
          $this->db->where('username', $username);
          $data = $this->db->get('pengguna')->row();

          if ($data == null) {
            $data_user = array(
              'nim' => $nim, 
              'nama_lengkap' => $nama_lengkap, 
              'fk_level_id' => 5, 
              'fk_id_jurusan' => 1, 
              'fk_id_prodi' => 1, 
              'tahun_masuk' => $tahun_masuk, 
              'username' => $username, 
              'password' => md5($password),
              'status' => 1, 
              'admin' => 1,
              'foto' => ('default.png'), 
            );
        $insert = $this->db->insert('pengguna', $data_user);          
        
        if($insert){
            echo json_encode(array('status' => 'sukses', 'msg' => 'Data User Berhasil Ditambahkan'));
          }
        else{
            echo json_encode(array('status' => 'gagal', 'msg' => 'Silahkan Periksa Koneksi Internet Anda'));
          }
          }
          else{
            echo json_encode(array('status' => 'gagal', 'msg' => 'Username Sudah Dipakai'));
          }
      }
    }

    public function notifikasiById_get(){
        $id_user = @$_REQUEST['id_user'];

        // $this->db->where('fk_id_user', $id_user);
        $data = $this->db->get('notifikasi')->result();

        if (!empty($data)) {
          echo json_encode($data);
        }
        else{
          echo json_encode(array('status' => 'Data Tidak Ditemukan'));
        }
    }

    public function kegiatan_get(){
        $data = $this->db->get('kegiatan')->result();

        if (!empty($data)) {
          echo json_encode($data);
        }
        else{
          echo json_encode(array('status' => 'Data Tidak Ditemukan'));
        }
    }

}
