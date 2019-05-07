<?php
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('pengumuman_model');
        $this->load->model('pengguna_model');
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
