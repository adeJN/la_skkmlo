<?php
 
class Notifikasi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('pengumuman_model');
        $this->load->model('pengguna_model');
        $this->load->model('point_model');
        $this->load->model('notifikasi_model');
        $this->load->model('kegiatan_model');
    } 

    function index()
    {   
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->load->view('templates/header',$data);
        $this->load->view('notifikasi/index', $data);
        $this->load->view('templates/footer');
    }

    function buka_notifikasi($id){
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');

        $post_data = array('dibaca' => 1
            );
            // Update kategori sesuai post_data dan id-nya
            $this->notifikasi_model->update_notifikasi($post_data, $id);
                redirect('notifikasi');
    }   
    
}
