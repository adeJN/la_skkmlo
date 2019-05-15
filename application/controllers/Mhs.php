<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mhs extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('Prodi_model');
        $this->load->model('jurusan_model');
        $this->load->helper('form');
        $this->load->model('user_model');
        $this->load->model('point_model');
        $this->load->model('kategori_model');
        $this->load->model('pengguna_model');
    } 

    function index()
    {
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['pengguna'] = $this->pengguna_model->get_pengguna_by_id($user_id);
        $data['point'] = $this->point_model->get_all_point_by_id($user_id);
        
        $this->load->view('templates/header',$data);
        $this->load->view('point/index', $data);
        $this->load->view('templates/footer');
    }

    function tp()
    {   
        if(!$this->session->userdata('logged_in')) 
            redirect('home/indexx');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);

        $data['kategori'] = $this->kategori_model->generate_kategori_dropdown();

        $this->load->helper('form');
        // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
        $this->form_validation->set_rules('no_sertifikat', 'no_sertifikat', 'required|is_unique[point.no_sertifikat]',
            array(
                'required'      => 'Isi %s terlebih dahulu.',
                'is_unique'     => 'nama <strong>' .$this->input->post('no_sertifikat'). '</strong> sudah ada bosque.'
            ));
        // Cek apakah input valid atau tidak
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('point/add', $data);
            $this->load->view('templates/footer');
        } else {
            // Apakah user upload gambar?
            if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
            {
                // Konfigurasi folder upload & file yang diijinkan
                // Jangan lupa buat folder uploads di dalam ci3-course
                $config['upload_path']          = './assets/img/point/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                // Load library upload
                $this->load->library('upload', $config);
                // Apakah file berhasil diupload?
                if ( ! $this->upload->do_upload('thumbnail'))
                {
                    $data['upload_error'] = $this->upload->display_errors();
                    $post_image = '';
                    // Kita passing pesan error upload ke view supaya user mencoba upload ulang
                    $this->load->view('templates/header', $data);
                    $this->load->view('point/add', $data);
                    $this->load->view('templates/footer');
                } else {
                    // Simpan nama file-nya jika berhasil diupload
                    $img_data = $this->upload->data();
                    $post_image = $img_data['file_name'];
                    
                }
            } else {
                // User tidak upload gambar, jadi kita kosongkan field ini
                $post_image = '';
            }
            // Memformat slug sebagai alamat URL, 
            // Misal judul: "Hello World", kita format menjadi "hello-world"
            // Nantinya, URL blog kita menjadi mudah dibaca     
            // http://localhost/ci3-course/blog/hello-world
            $post_data = array(
                'fk_id_user' => $this->input->post('id_user'),
                'no_sertifikat' => $this->input->post('no_sertifikat'),
                'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                'fk_id_kategori' => $this->input->post('fk_kategori_kegiatan'),
                'foto_sertifikat' => $post_image,
            );
            // Jika tidak ada error upload gambar, maka kita insert ke database via model Blog 
            if( empty($data['upload_error']) ) {
                $this->point_model->add_point($post_data);
                    redirect('mhs');
            }
        }
    } 
}
