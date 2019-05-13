<?php
 
class Tatacarainfo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('Info_poin_model');
        $this->load->helper('download');
    } 

    function index()
    {        
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);
        $data['infopoin'] = $this->Info_poin_model->get_all_info_poin();

        $this->load->view('templates/header',$data);
        $this->load->view('indexx/tatacarainfo_view',$data);
        $this->load->view('templates/footer');
    }


    public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
       }

    public function download_img(){
        force_download('img/avenger.jpg', NULL);
    }

    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'kode_poin' => $this->input->post('kode_poin'),
                'tingkat_kegiatan' => $this->input->post('tingkat_kegiatan'),
                'prestasi' => $this->input->post('prestasi'),
                'angka_kredit' => $this->input->post('angka_kredit'),
                'dasar_penilaian' => $this->input->post('dasar_penilaian')
            );
            
            $info_poin_id = $this->Info_poin_model->add_info_poin($params);
            redirect('Tatacarainfo/index');
        }
        else
        {   
            $user_id = $this->session->userdata('id_user');
            // Dapatkan detail user
            $data['user'] = $this->user_model->get_user_details($user_id);         
            $this->load->view('templates/header',$data);
            $this->load->view('indexx/tatacarainfo_view',$data);
            $this->load->view('templates/footer');
        }
    } 

    function edit($kode_poin)
    {   
        // check if the kegiatan_pengguna exists before trying to edit it
        $data['info_poin'] = $this->Info_poin_model->get_all_info_poin($kode_poin);
        
        $this->load->view('templates/header');
        $this->load->view('indexx/edit_infopoin_view', $data);
        $this->load->view('templates/footer');

        if(isset($data['info_poin']['kode_poin']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                'kode_poin' => $this->input->post('kode_poin'),
                'tingkat_kegiatan' => $this->input->post('tingkat_kegiatan'),
                'prestasi' => $this->input->post('prestasi'),
                'angka_kredit' => $this->input->post('angka_kredit'),
                'dasar_penilaian' => $this->input->post('dasar_penilaian')
                );

                $this->Info_poin_model->update_info_poin($kode_poin,$params);            
                redirect('Tatacarainfo/index');
            }
            else
            {
            $this->load->view('themes/header');
            $this->load->view('info_poin/edit', $data);
            $this->load->view('themes/footer');
            }
        }
        else
            show_error('The kegiatan_pengguna you are trying to edit does not exist.');
    } 

    /*
     * Deleting kegiatan_pengguna
     */
    function remove($kode_poin)
    {
        $info_poin_id = $this->Info_poin_model->get_info_poin($kode_poin);

        // check if the kegiatan_pengguna exists before trying to delete it
        if(isset($info_poin_id['kode_poin']))
        {
            $this->Info_poin_model->delete_info_poin($kode_poin);
            redirect('Tatacarainfo/index');
        }
        else
            show_error('The kegiatan_pengguna you are trying to delete does not exist.');
    }
    
}
