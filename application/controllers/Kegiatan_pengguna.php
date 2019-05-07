<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kegiatan_pengguna extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_pengguna_model');
        $this->load->model('user_model');
    } 

    /*
     * Listing of kegiatan_pengguna
     */
    function index()
    {
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $data['kegiatan_pengguna'] = $this->Kegiatan_pengguna_model->get_all_kegiatan_pengguna();
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->load->view('templates/header', $data);
        $this->load->view('kegiatan_pengguna/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new kegiatan_pengguna
     */
    function add()
    {   
         $data['kegiatan'] = $this->Kegiatan_pengguna_model->generate_kegiatan_dropdown();
         $data['pengguna'] = $this->Kegiatan_pengguna_model->generate_nama_mhs_dropdown();
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fk_id_keg' => $this->input->post('fk_id_keg'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'tggl_daftar' => $this->input->post('tggl_daftar'),
            );
            
            $kegiatan_pengguna_id = $this->Kegiatan_pengguna_model->add_kegiatan_pengguna($params);
            redirect('kegiatan_pengguna/index');
        }
        else
        {            
            $this->load->view('themes/header');
            $this->load->view('kegiatan_pengguna/add', $data);
            $this->load->view('themes/footer');
        }
    }  

    /*
     * Editing a kegiatan_pengguna
     */
    function edit($id_daftar_keg)
    {   
        // check if the kegiatan_pengguna exists before trying to edit it
        $data['kegiatan_pengguna'] = $this->Kegiatan_pengguna_model->get_kegiatan_pengguna($id_daftar_keg);
        
        if(isset($data['kegiatan_pengguna']['id_daftar_keg']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fk_id_keg' => $this->input->post('fk_id_keg'),
					'nama_mhs' => $this->input->post('nama_mhs'),
					'tggl_daftar' => $this->input->post('tggl_daftar'),
                );

                $this->Kegiatan_pengguna_model->update_kegiatan_pengguna($id_daftar_keg,$params);            
                redirect('kegiatan_pengguna/index');
            }
            else
            {
                $this->load->view('themes/header');
            $this->load->view('kegiatan_pengguna/edit', $data);
            $this->load->view('themes/footer');
            }
        }
        else
            show_error('The kegiatan_pengguna you are trying to edit does not exist.');
    } 

    /*
     * Deleting kegiatan_pengguna
     */
    function remove($id_daftar_keg)
    {
        $kegiatan_pengguna = $this->Kegiatan_pengguna_model->get_kegiatan_pengguna($id_daftar_keg);

        // check if the kegiatan_pengguna exists before trying to delete it
        if(isset($kegiatan_pengguna['id_daftar_keg']))
        {
            $this->Kegiatan_pengguna_model->delete_kegiatan_pengguna($id_daftar_keg);
            redirect('kegiatan_pengguna/index');
        }
        else
            show_error('The kegiatan_pengguna you are trying to delete does not exist.');
    }
    
}
