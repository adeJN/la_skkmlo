<?php
 
class Pengumuman extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('pengumuman_model');
    } 

    function index()
    {        
        redirect('dashboard');
    }


    public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
       }
    
    public function edit($id = NULL)
    {
        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);
        // Get artikel dari model berdasarkan $id
        $data['pengumuman'] = $this->pengumuman_model->get_pengumuman_by_id($id);
        // Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman list pengumuman
        if ( empty($id) || !$data['pengumuman'] ) redirect('blog');

        // Kita butuh helper dan library berikut

        // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
        $this->form_validation->set_rules('isi', 'isi pengumuman', 'required',
            array('required' => 'Isi %s pengumuman dahulu.'));

        // Cek apakah input valid atau tidak
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('indexx/pengumuman_edit', $data);
            $this->load->view('templates/footer');

        } else {

            $post_data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            );

            
            // Update kategori sesuai post_data dan id-nya
            if ($this->pengumuman_model->update_pengumuman($post_data, $id)) {
                redirect('dashboard');
            } else {
                redirect('pengumuman');
            }

        }
    }

    public function ganti_timeline($id=NULL){
        if(!$this->session->userdata('logged_in')) 
            redirect('home');

        $user_id = $this->session->userdata('id_user');
        // Dapatkan detail user
        $data['user'] = $this->user_model->get_user_details($user_id);
        // Get artikel dari model berdasarkan $id
        $data['timeline'] = $this->pengumuman_model->get_timeline_by_id($id);
        // Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
        if ( empty($id) ) redirect('dashboard');
        // Kita simpan dulu nama file yang lama
        $old_image = $data['timeline']->gambar;
        // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
        $this->form_validation->set_rules('judul', 'judul', 'required',
            array(
                'required'      => 'Isi %s anda lagi.'
            ));
        // Cek apakah input valid atau tidak
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header',$data);
            $this->load->view('indexx/timeline_edit', $data);
            $this->load->view('templates/footer');
        } else {
            // Apakah user upload gambar?
            if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
            {
                // Konfigurasi folder upload & file yang diijinkan
                // Jangan lupa buat folder uploads di dalam ci3-course
                $config['upload_path']          = './assets/img/timeline/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 1000;
                $config['max_height']           = 2000;
                // Load library upload
                $this->load->library('upload', $config);
                // Apakah file berhasil diupload?
                if ( ! $this->upload->do_upload('thumbnail'))
                {
                    $data['upload_error'] = $this->upload->display_errors();
                    $post_image = '';
                    // Kita passing pesan error upload ke view supaya user mencoba upload ulang
                     echo "<script>alert('gagal upload!');</script>";
                     redirect('dashboard');
                } else {
                    // Hapus file image yang lama jika ada
                    if( !empty($old_image) ) {
                        if ( file_exists( './assets/img/timeline/'.$old_image ) ){
                            unlink( './assets/img/timeline/'.$old_image );
                        } else {
                            echo 'File tidak ditemukan.';
                        }
                    }
                    // Simpan nama file-nya jika berhasil diupload
                    $img_data = $this->upload->data();
                    $post_image = $img_data['file_name'];
                    
                }
            } else {
                // User tidak upload gambar, jadi kita kosongkan field ini, atau jika sudah ada, gunakan image sebelumnya
                $post_image = ( !empty($old_image) ) ? $old_image : '';
            }
            $post_data = array(
                'judul' => $this->input->post('judul'),
                'gambar' => $post_image,
            );
            // Jika tidak ada error upload gambar, maka kita update datanya 
            if( empty($data['upload_error']) ) {
                // Update artikel sesuai post_data dan id-nya
                $this->pengumuman_model->update_timeline($post_data, $id);
                echo "<script>alert('Gambar berhasil diupload!');</script>";
                redirect('dashboard');
            }
        }
    }
}
