<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jurusan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jurusan by id_jurusan
     */
    function get_jurusan($id_jurusan)
    {
        return $this->db->get_where('jurusan',array('id_jurusan'=>$id_jurusan))->row_array();
    }
        
    /*
     * Get all jurusan
     */
    function get_all_jurusan()
    {
        $this->db->order_by('id_jurusan', 'desc');
        return $this->db->get('jurusan')->result_array();
    }
        
    /*
     * function to add new jurusan
     */
    function add_jurusan($params)
    {
        $this->db->insert('jurusan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jurusan
     */
    function update_jurusan($id_jurusan,$params)
    {
        $this->db->where('id_jurusan',$id_jurusan);
        return $this->db->update('jurusan',$params);
    }
    
    /*
     * function to delete jurusan
     */
    function delete_jurusan($id_jurusan)
    {
        return $this->db->delete('jurusan',array('id_jurusan'=>$id_jurusan));
    }

    public function generate_jurusan_dropdown()
    {

        // Mendapatkan data ID dan nama kategori saja
        $this->db->select ('
            jurusan.id_jurusan,
            jurusan.nama_jurusan
        ');

        // Urut abjad
        $this->db->order_by('nama_jurusan');

        $result = $this->db->get('jurusan');
        
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dropdown[''] = 'Pilih Jurusan';

        if ($result->num_rows() > 0) {
            
            foreach ($result->result_array() as $row) {
                $dropdown[$row['id_jurusan']] = $row['nama_jurusan'];
            }
        }

        return $dropdown;
    }
}