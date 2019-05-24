<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kategori extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->helper('MY');
        $this->load->model('Kategori_model');
        $this->load->model('kategori_induk_model');
    } 

    /*
     * Listing of kategori
     */
    function index()
    {
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['kategori'] = $this->Kategori_model->get_all_kategori();
        
        $this->load->view('templates/header',$data);
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    /*
     * Adding a new kategori
     */
    function add()
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);
        $data['kategori_induk'] = $this->kategori_induk_model->generate_kategori_induk_dropdown();
        $data['all_kategori_induk_wajib'] = $this->kategori_induk_model->get_all_kategori_induk_wajib();
        $data['all_kategori_induk_tidak_wajib'] = $this->kategori_induk_model->get_all_kategori_induk_tidak_wajib();
        $data['all_kategori_induk'] = $this->kategori_induk_model->get_all_kategori_induk();

        $this->form_validation->set_rules('kode_kategori', 'kode_kategori', 'required|is_unique[kategori.kode_kategori]|min_length[3]',
            array(
                'required'      => 'Isi %s anda.',
                'is_unique'     => 'nama_kategori <strong>' .$this->input->post('kode_kategori'). '</strong> sudah ada.',
                'min_length'    => '%s minimal 4 karakter'
            ));

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('kategori/add');
            $this->load->view('templates/footer');
        } else {
            $params = array(
                'fk_kode_kategori_induk'=> $this->input->post('fk_kode_kategori_induk'),
                'kode_kategori'=> $this->input->post('kode_kategori'),
                'tingkat_kegiatan'=> $this->input->post('tingkat_kegiatan'),
                'jabatan'=> $this->input->post('jabatan'),
                'point' => $this->input->post('point'),
                'dasar_penilaian' => $this->input->post('dasar_penilaian'),
            );
            
            $kategori_id = $this->Kategori_model->add_kategori($params);
            redirect('kategori');
        }
    }  

    /*
     * Editing a kategori
     */
    function edit($id_kategori_point)
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required|min_length[4]',
            array(
                'required'      => 'Isi %s anda.',
                'min_length'    => '%s minimal 4 karakter'
            ));
        // check if the kategori exists before trying to edit it
        $data['kategori'] = $this->Kategori_model->get_kategori($id_kategori_point);
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header',$data);
            $this->load->view('kategori/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $params = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
                'point' => $this->input->post('point'),
            );
                $this->Kategori_model->update_kategori($id_kategori_point,$params);            
                redirect('kategori');
        }
    } 

    /*
     * Deleting kategori
     */
    function remove($id_kategori_point)
    {
        $kategori = $this->Kategori_model->get_kategori($id_kategori_point);

        // check if the kategori exists before trying to delete it
        if(isset($kategori['id_kategori_point']))
        {
            $this->Kategori_model->delete_kategori($id_kategori_point);
            redirect('kategori');
        }
        else
            show_error('The kategori you are trying to delete does not exist.');
    }
    
}
