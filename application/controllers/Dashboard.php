<?php
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('pengumuman_model');
        $this->load->model('pengguna_model');
        $this->load->model('point_model');
        $this->load->model('kegiatan_model');
    } 

    function index()
    {        
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['total'] = $this->pengguna_model->get_total();
        $data['total_keg'] = $this->kegiatan_model->get_total();
        $data['total_regis'] = $this->pengguna_model->get_total_regis();
        $data['total_point'] = $this->point_model->get_total_point($user_id);
        $data['total_point_him'] = $this->point_model->get_total_point_him($user_id);
        $data['total_point_bem'] = $this->point_model->get_total_point_bem($user_id);
        $data['total_point_dpk'] = $this->point_model->get_total_point_dpk($user_id);
        $data['total_mah_him'] = $this->pengguna_model->get_total_mah_him();
        $data['total_mah_bem'] = $this->pengguna_model->get_total_mah_bem();
        $data['total_mah_dpk'] = $this->pengguna_model->get_total_mah_dpk();
        $data['total_mah_belum_verif_him'] = $this->pengguna_model->get_total_mah_belum_verif_him();
        $data['total_mah_belum_verif_bem'] = $this->pengguna_model->get_total_mah_belum_verif_bem();
        $data['total_mah_belum_verif_dpk'] = $this->pengguna_model->get_total_mah_belum_verif_dpk();

        $userData = $this->get_userdata();
        $data['pengumuman'] = $this->pengumuman_model->get_all_pengumuman();
        $data['timeline'] = $this->pengumuman_model->get_all_timeline();

        $this->load->view('templates/header',$data);
        $this->load->view('indexx/dashboard_view',$data);
        $this->load->view('templates/footer');
    }

    public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
       }
    
}
