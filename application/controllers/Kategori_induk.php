<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class kategori_induk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->helper('MY');
        $this->load->model('kategori_induk_model');
    } 

    /*
     * Listing of kategori_induk
     */
    function index()
    {
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['kategori_induk'] = $this->kategori_induk_model->get_all_kategori_induk();
        
        $this->load->view('templates/header',$data);
        $this->load->view('kategori_induk/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new kategori_induk
     */
    function add()
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->form_validation->set_rules('kode_kategori_induk', 'kode_kategori_induk', 'required|is_unique[kategori_induk.kode_kategori_induk]',
            array(
                'required'      => 'Isi %s anda.',
                'is_unique'     => 'Kode kategori <strong>' .$this->input->post('kode_kategori_induk'). '</strong> sudah ada.',
            ));

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('kategori_induk/add');
            $this->load->view('templates/footer');
        } else {
            $params = array(
                'kode_kategori_induk' => $this->input->post('kode_kategori_induk'),
                'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
                'wajib' => $this->input->post('wajib'),
            );
            
            $kategori_induk_id = $this->kategori_induk_model->add_kategori_induk($params);
            redirect('kategori_induk');
        }
    }  

    /*
     * Editing a kategori_induk
     */
    function edit($kode)
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->form_validation->set_rules('kode_kategori_induk', 'kode_kategori_induk', 'required',
            array(
                'required'      => 'Isi %s anda.'
            ));
        // check if the kategori_induk exists before trying to edit it
        $data['kategori_induk'] = $this->kategori_induk_model->get_kategori_induk($kode);
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('kategori_induk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $params = array(
                'kode_kategori_induk' => $this->input->post('kode_kategori_induk'),
                'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
                'wajib' => $this->input->post('wajib'),
            );
                $this->kategori_induk_model->update_kategori_induk($kode,$params);            
                redirect('kategori_induk');
        }
    } 

    /*
     * Deleting kategori_induk
     */
    function remove($kode_kategori_induk)
    {
        $kategori_induk = $this->kategori_induk_model->get_kategori_induk($kode_kategori_induk);

        // check if the kategori_induk exists before trying to delete it
        if(isset($kategori_induk['kode_kategori_induk']))
        {
            $this->kategori_induk_model->delete_kategori_induk($kode_kategori_induk);
            redirect('kategori_induk');
        }
        else
            show_error('The kategori_induk you are trying to delete does not exist.');
    }
    
}