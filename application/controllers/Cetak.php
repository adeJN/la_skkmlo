<?php
 
class Cetak extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('pengumuman_model');
        $this->load->model('pengguna_model');
        $this->load->model('point_model');
        $this->load->model('kegiatan_model');
        $this->load->model('notifikasi_model');
    } 

    function form_poin()
    {        
        $user_id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->get_user_details($user_id);
        $data['point'] = $this->point_model->get_all_point_by_id($user_id);
        $data['total_point'] = $this->point_model->jumlahpoin($user_id);
        // print_r($user_id);
        // $this->load->library('pdf');

        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "Form_poin.pdf";
        // $this->pdf->load_view('cetak/form_poin', $data);
        $this->load->view('cetak/form_poin',$data);
        // $this->load->view('cetak/form_poin',$data);

       
    }
    
}
