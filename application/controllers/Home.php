<?php

class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('user_model');
        $this->load->model('jurusan_model');
        $this->load->model('prodi_model');
        $this->load->model('pengumuman_model');
    }

    function index()
    {
        if($this->session->userdata('logged_in')) 
            redirect('home/indexx');

        $data['timeline'] = $this->pengumuman_model->get_all_timeline();

        $this->load->view('templates/header_home');
        $this->load->view('indexx/home_view',$data);
        $this->load->view('templates/footer_home');
    }

    function indexx()
    {
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['timeline'] = $this->pengumuman_model->get_all_timeline();

        $this->load->view('templates/header_home');
        $this->load->view('indexx/home_view',$data);
        $this->load->view('templates/footer_home');
    }

    public function login(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required',
            array(
                'required'      => 'Isi %s anda.'               
            ));
        $this->form_validation->set_rules('password', 'password', 'required',
            array(
                'required'      => 'Isi %s anda.'               
            ));

        if($this->form_validation->run() === FALSE){
            redirect('home');
        } else {
            
        // Get username
        $username = $this->input->post('username');
        // Get & encrypt password
        $password = md5($this->input->post('password'));

        // Login user
        $user_id = $this->user_model->login($username, $password);

        if($user_id){
            // Buat session
            $user_data = array(
                'id_user' => $user_id,
                'username' => $username,
                'logged_in' => true,
                'fk_level_id' => $this->user_model->get_user_level($user_id),
            );

            $this->session->set_userdata($user_data);

            // Set message
            $this->session->set_flashdata('user_loggedin', 'Anda telah masuk');

            redirect('home/dashboard');
        } else {
            // Set message
            $this->session->set_flashdata('login_failed', 'Login gagal, anda belum terdaftar/tunggu admin menyetujui pendaftaran anda jika sudah mendaftar');

            redirect('home');
            }       
        }
    }

    public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
       }
    // Fungsi Dashboard
    function dashboard(){
        // Must login
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['timeline'] = $this->pengumuman_model->get_all_timeline();
        
        $userData = $this->get_userdata();
        if ($userData['fk_level_id'] === '1'){
            $this->load->view('templates/header_home');
            $this->load->view('indexx/home_view', $data);
            $this->load->view('templates/footer_home');
        } else if ($userData['fk_level_id'] === '2'){
            $this->load->view('templates/header_home');
            $this->load->view('indexx/home_view', $data);
            $this->load->view('templates/footer_home');
        } else if ($userData['fk_level_id'] === '3') {
            $this->load->view('templates/header_home');
            $this->load->view('indexx/home_view', $data);
            $this->load->view('templates/footer_home');
        }else if ($userData['fk_level_id'] === '4') {
            $this->load->view('templates/header_home');
            $this->load->view('indexx/home_view', $data);
            $this->load->view('templates/footer_home');
        }else if ($userData['fk_level_id'] === '5') {
            $this->load->view('templates/header_home');
            $this->load->view('indexx/home_view', $data);
            $this->load->view('templates/footer_home');
        }
    }

    function register()
    {

        if($this->session->userdata('logged_in')) 
            redirect('home');


        $this->form_validation->set_rules('nim', 'nim', 'required|alpha_numeric',
            array(
                'required'      => 'Isi %s anda.',
                'alpha_numeric'         => '%s harus diisi dengan angka'
            ));
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[pengguna.username]|min_length[6]',
            array(
                'required'      => 'Isi %s anda.',
                'is_unique'     => 'Username <strong>' .$this->input->post('username'). '</strong> sudah ada.',
                'min_length'    => '%s minimal 6 karakter'
            ));
        $this->form_validation->set_rules('nama', 'nama', 'required',
            array(
                'required'      => 'Isi %s anda.'
            ));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
            array(
                'required'      => 'Isi %s anda.',
                'min_length'    => '%s minimal 8 karakter'
            ));
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]',
            array(
                'matches'   => '%s tidak sama'
            ));

        $data['jurusan'] = $this->jurusan_model->generate_jurusan_dropdown();
        $data['prodi'] = $this->prodi_model->generate_prodi_dropdown();

        if($this->form_validation->run() === FALSE){
            $this->load->view('indexx/register',$data);
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            // Set message
            $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi, tunggu admin menyetujui permintaan anda');

            redirect('home');
        }
    }

    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah keluar');

        redirect('home');
    }
}
