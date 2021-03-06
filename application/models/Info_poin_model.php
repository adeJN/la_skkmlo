<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Info_poin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jurusan by id_jurusan
     */
    function get_info_poin($kode_poin)
    {
        return $this->db->get_where('info_poin',array('kode_poin'=>$kode_poin))->row_array();
    }

        
    /*
     * Get all jurusan
     */
    function get_all_info_poin()
    {
        $this->db->order_by('kode_kategori', 'asc');
        return $this->db->get('kategori')->result_array();
    }
        
    /*
     * function to add new jurusan
     */
    function add_info_poin($params)
    {
        $this->db->insert('info_poin',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jurusan
     */
    function update_info_poin($kode_poin,$params)
    {
        $this->db->where('kode_poin ',$kode_poin);
        return $this->db->update('info_poin',$params);
    }
    
    /*
     * function to delete jurusan
     */
    function delete_info_poin($kode_poin)
    {
        return $this->db->delete('info_poin ',array('kode_poin '=>$kode_poin));
    }

    public function generate_info_poin_dropdown()
    {

        // Mendapatkan data ID dan nama kategori saja
        $this->db->select ('
            info_poin.kode_poin,
            info_poin.tingkat_kegiatan,
            info_poin.prestasi,
            info_poin.angka_kredit,
            info_poin.dasar_penilaian
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
