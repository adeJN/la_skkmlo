<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Prodi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->model('jurusan_model');
        $this->load->helper('form');
        $this->load->model('user_model');
        $this->load->library('form_validation');
    } 

    /*
     * Listing of prodi
     */
    function index()
    {
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['prodi'] = $this->Prodi_model->get_all_prodi();
        
        $this->load->view('templates/header',$data);
        $this->load->view('prodi/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new prodi
     */
    function add()
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['jurusan'] = $this->jurusan_model->generate_jurusan_dropdown();
        if(isset($_POST) && count($_POST) > 0)     
        {   
            
            $params = array(
				'fk_id_jurusan' => $this->input->post('fk_id_jurusan'),
				'nama_prodi' => $this->input->post('nama_prodi'),
            );
            
            $prodi_id = $this->Prodi_model->add_prodi($params);
            redirect('prodi');
        }
        else
        {            
            $this->load->view('templates/header',$data);
            $this->load->view('prodi/add', $data);
            $this->load->view('templates/footer');
        }
    }  

    /*
     * Editing a prodi
     */
    function edit($id_prodi)
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'required|min_length[4]',
            array(
                'required'      => 'Isi %s anda.',
                'min_length'    => '%s minimal 4 karakter'
            ));
        // check if the prodi exists before trying to edit it
        $data['prodi'] = $this->Prodi_model->get_prodi($id_prodi);
        if ( empty($id_prodi) || !$data['prodi'] ) redirect('prodi');
        $data['jurusan'] = $this->jurusan_model->generate_jurusan_dropdown();

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('prodi/edit', $data);
            $this->load->view('templates/footer');
        } else {

                $params = array(
                    'fk_id_jurusan' => $this->input->post('fk_id_jurusan'),
                    'nama_prodi' => $this->input->post('nama_prodi'),
                );

                $this->Prodi_model->update_prodi($id_prodi,$params);            
                redirect('prodi');
        }

    } 

    /*
     * Deleting prodi
     */
    function remove($id_prodi)
    {
        $prodi = $this->Prodi_model->get_prodi($id_prodi);

            $this->Prodi_model->delete_prodi($id_prodi);
            redirect('prodi');
    }
    
}
