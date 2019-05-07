<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kategori_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kategori by id_kategori_point
     */
    function get_kategori($id_kategori_point)
    {
        return $this->db->get_where('kategori',array('id_kategori_point'=>$id_kategori_point))->row_array();
    }
        
    /*
     * Get all kategori
     */
    function get_all_kategori()
    {
        $this->db->order_by('id_kategori_point', 'desc');
        return $this->db->get('kategori')->result_array();
    }
        
    /*
     * function to add new kategori
     */
    function add_kategori($params)
    {
        $this->db->insert('kategori',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kategori
     */
    function update_kategori($id_kategori_point,$params)
    {
        $this->db->where('id_kategori_point',$id_kategori_point);
        return $this->db->update('kategori',$params);
    }
    
    /*
     * function to delete kategori
     */
    function delete_kategori($id_kategori_point)
    {
        return $this->db->delete('kategori',array('id_kategori_point'=>$id_kategori_point));
    }


    public function generate_kategori_dropdown() {
            // Mendapatkan data ID dan nama kategori saja
            $this->db->select ('
                kategori.id_kategori_point,
                kategori.nama_kategori
            ');
            // Urut abjad
            $this->db->order_by('nama_kategori');
            $result = $this->db->get('kategori');
            
            // bikin array
            // please select berikut ini merupakan tambahan saja agar saat pertama
            // diload akan ditampilkan text please select.
            $dropdown[''] = 'Pilih';
            if ($result->num_rows() > 0) {
                
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['id_kategori_point']] = $row['nama_kategori'];
                }
            }
            return $dropdown;
        }
}
