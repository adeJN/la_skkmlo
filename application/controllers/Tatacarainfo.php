<?php
 
class Tatacarainfo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    } 

    function index()
    {        
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->load->view('templates/header',$data);
        $this->load->view('indexx/tatacarainfo_view',$data);
        $this->load->view('templates/footer');
    }


    public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
       }
    
}
