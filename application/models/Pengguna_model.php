<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pengguna_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pengguna by id_user
     */
    function get_pengguna_by_id($id)
    {
        // return $this->db->get_where('pengguna',array('id_user'=>$id_user))->row_array();

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');

        $query = $this->db->get_where('pengguna', array('pengguna.id_user' => $id));
                        
        return $query->row();
    }

    public function get_total(){
             // Dapatkan jumlah total artikel
            // $query = $this->db->query('SELECT status, COUNT(status) AS jumlah FROM pengguna GROUP BY status HAVING status = 0');


            // $hasil = $query->result_array();
            // $jumlah = $hasil[0]['jumlah'];

            // return  $jumlah;
            // return $this->db->count_all("pengguna");

            $query = $this->db->get_where('pengguna', array('status' => 0));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_regis(){
            // $query = $this->db->query('SELECT status, COUNT(status) AS jumlah FROM pengguna GROUP BY status HAVING status = 1');

            // $hasil = $query->result_array();
            // $jumlah = $hasil[0]['jumlah'];

            // return  $jumlah;

            $query = $this->db->get_where('pengguna', array('status' => 1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }
        
    /*
     * Get all pengguna
     */
    function get_all_pengguna()
    {
        // $this->db->order_by('id_user', 'desc');
        // return $this->db->get('pengguna')->result_array();
        // $this->db->order_by('id_user', 'desc');

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');
            
        $query = $this->db->get_where('pengguna',array('status'=>0));

            // Return dalam bentuk object
        return $query->result();
    }

    function get_all_pengguna_admin()
    {
        // $this->db->order_by('id_user', 'desc');
        // return $this->db->get('pengguna')->result_array();
        // $this->db->order_by('id_user', 'desc');

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');
            
        $query = $this->db->get_where('pengguna',array('status'=>0, 'admin' => 0));

            // Return dalam bentuk object
        return $query->result();
    }

    function get_all_pengguna_mahasiswa()
    {
        // $this->db->order_by('id_user', 'desc');
        // return $this->db->get('pengguna')->result_array();
        // $this->db->order_by('id_user', 'desc');

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');
        
        //admin 1(salah)
        //verif_bem 1(benar)  
        $query = $this->db->get_where('pengguna',array('status'=>0, 'admin' => 1));

            // Return dalam bentuk object
        return $query->result();
    }

    function get_all_verif_him()
    {
        // $this->db->order_by('id_user', 'desc');
        // return $this->db->get('pengguna')->result_array();
        // $this->db->order_by('id_user', 'desc');

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');
        
        //admin 1(salah)
        //verif_bem 1(benar)
        $query = $this->db->get_where('pengguna',array('status'=>0, 'admin' => 1,'verif_him'=>1));

            // Return dalam bentuk object
        return $query->result();
    }

    function get_all_verif_bem()
    {
        // $this->db->order_by('id_user', 'desc');
        // return $this->db->get('pengguna')->result_array();
        // $this->db->order_by('id_user', 'desc');

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');
        
        //admin 1(salah)
        //verif_bem 1(benar)
        $query = $this->db->get_where('pengguna',array('status'=>0, 'admin' => 1,'verif_bem'=>1));

            // Return dalam bentuk object
        return $query->result();
    }

    function get_all_verif_dpk()
    {
        // $this->db->order_by('id_user', 'desc');
        // return $this->db->get('pengguna')->result_array();
        // $this->db->order_by('id_user', 'desc');

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');
            
        $query = $this->db->get_where('pengguna',array('status'=>0, 'admin' => 1,'verif_dpk'=>1));

            // Return dalam bentuk object
        return $query->result();
    }

    public function get_total_mah_dpk(){
            $query = $this->db->get_where('pengguna', array('status'=>0, 'admin' => 1,'verif_dpk'=>1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_mah_bem(){
            $query = $this->db->get_where('pengguna', array('status'=>0, 'admin' => 1,'verif_bem'=>1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_mah_him(){
            $query = $this->db->get_where('pengguna', array('status'=>0, 'admin' => 1,'verif_him'=>1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_mah_belum_verif_him(){
            $query = $this->db->get_where('pengguna', array('status'=>0, 'admin' => 1, 'verif_him'=>1, 'verif_him_sdh'=>0));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_mah_belum_verif_bem(){
            $query = $this->db->get_where('pengguna', array('status'=>0, 'admin' => 1, 'verif_bem'=>1,'verif_bem_sdh'=>0));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

        public function get_total_mah_belum_verif_dpk(){
            $query = $this->db->get_where('pengguna', array('status'=>0, 'admin' => 1,'verif_dpk'=>1,'verif_all'=>0));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    function get_pengguna_regis()
    {

        $this->db->join('jurusan', 'jurusan.id_jurusan = pengguna.fk_id_jurusan');
        $this->db->join('prodi', 'prodi.id_prodi = pengguna.fk_id_prodi');
        $this->db->join('level', 'level.id_level = pengguna.fk_level_id');

        $this->db->order_by('id_user', 'desc');
        return $this->db->get_where('pengguna',array('status'=>1))->result_array();
    }
        
    /*
     * function to add new pengguna
     */
    function add_pengguna($data)
    {
        return $this->db->insert('pengguna', $data);
    }
    
    /*
     * function to update pengguna
     */
    function update_pengguna($data,$id)
    {
        // $this->db->where('id_user',$id_user);
        // return $this->db->update('pengguna',$params);
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'pengguna', $data, array('id_user'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }
    
    /*
     * function to delete pengguna
     */
    function delete_pengguna($id_user)
    {
        return $this->db->delete('pengguna',array('id_user'=>$id_user));
    }
}
