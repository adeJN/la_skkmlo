<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kegiatan_pengguna_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kegiatan_pengguna by id_daftar_keg
     */
    function get_kegiatan_pengguna($id_daftar_keg)
    {
        return $this->db->get_where('kegiatan_pengguna',array('id_daftar_keg'=>$id_daftar_keg))->row_array();
    }
        
    /*
     * Get all kegiatan_pengguna
     */
    function get_all_kegiatan_pengguna()
    {
        $this->db->order_by('id_daftar_keg', 'desc');
        return $this->db->get('kegiatan_pengguna')->result_array();
    }
        
    /*
     * function to add new kegiatan_pengguna
     */
    function add_kegiatan_pengguna($params)
    {
        $this->db->insert('kegiatan_pengguna',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kegiatan_pengguna
     */
    function update_kegiatan_pengguna($id_daftar_keg,$params)
    {
        $this->db->where('id_daftar_keg',$id_daftar_keg);
        return $this->db->update('kegiatan_pengguna',$params);
    }
    
    /*
     * function to delete kegiatan_pengguna
     */
    function delete_kegiatan_pengguna($id_daftar_keg)
    {
        return $this->db->delete('kegiatan_pengguna',array('id_daftar_keg'=>$id_daftar_keg));
    }
    public function generate_kegiatan_dropdown() {
            // Mendapatkan data ID dan nama kategori saja
            $this->db->select ('
                kegiatan.id_kegiatan,
                kegiatan.nama_kegiatan
            ');
            // Urut abjad
            $this->db->order_by('nama_kegiatan');
            $result = $this->db->get('kegiatan');
            
            // bikin array
            // please select berikut ini merupakan tambahan saja agar saat pertama
            // diload akan ditampilkan text please select.
            $dropdown[''] = 'Please Select';
            if ($result->num_rows() > 0) {
                
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['id_kegiatan']] = $row['nama_kegiatan'];
                }
            }
            return $dropdown;
        }
        public function generate_nama_mhs_dropdown() {
            // Mendapatkan data ID dan nama kategori saja
            $this->db->select ('
                pengguna.id_user,
                pengguna.nama_lengkap
            ');
            // Urut abjad
            $this->db->order_by('nama_lengkap');
            $result = $this->db->get('pengguna');
            
            // bikin array
            // please select berikut ini merupakan tambahan saja agar saat pertama
            // diload akan ditampilkan text please select.
            $dropdown[''] = 'Please Select';
            if ($result->num_rows() > 0) {
                
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['id_user']] = $row['nama_lengkap'];
                }
            }
            return $dropdown;
        }
}
