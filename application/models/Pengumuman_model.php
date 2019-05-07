<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_pengumuman()
    {

        $query = $this->db->get('pengumuman');
        return $query->result();
    }
    public function get_all_timeline()
    {

        $query = $this->db->get('timeline');
        return $query->result();
    }

    // Dapatkan kategori berdasar ID
    public function get_pengumuman_by_id($id)
    {
        $query = $this->db->get_where('pengumuman', array('id_pengumuman' => $id));
        return $query->row();
    }

    // Dapatkan kategori berdasar ID
    public function get_timeline_by_id($id)
    {
        $query = $this->db->get_where('timeline', array('id_timeline' => $id));
        return $query->row();
    }

    public function update_pengumuman($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'pengumuman', $data, array('id_pengumuman'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function update_timeline($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'timeline', $data, array('id_timeline'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

}
