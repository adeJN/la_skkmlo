<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Point_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get point by id_point
     */
    function get_point($id_point)
    {
        return $this->db->get_where('point',array('id_point'=>$id_point))->row_array();
    }
        
    /*
     * Get all point
     */
    function get_all_point()
    {
        $this->db->order_by('id_point', 'desc');
        return $this->db->get('point')->result_array();
    }

    public function get_total_point($id){
            $query = $this->db->get_where('point', array('fk_id_user' => $id));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_point_him($id){
            $query = $this->db->get_where('point', array('fk_id_user' => $id, 'verif_himp'=>1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_point_bem($id){
            $query = $this->db->get_where('point', array('fk_id_user' => $id, 'verif_bemm'=>1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    public function get_total_point_dpk($id){
            $query = $this->db->get_where('point', array('fk_id_user' => $id, 'verif_dpka'=>1));
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }

    function get_all_point_by_id($id_user)
    {
        $this->db->join('pengguna', 'pengguna.id_user = point.fk_id_user');
        $this->db->join('kategori', 'kategori.id_kategori_point = point.fk_id_kategori');

        $this->db->order_by('id_point', 'desc');
        // return $this->db->get('point')->result_array();
        $query = $this->db->get_where('point',array('fk_id_user'=>$id_user));
            // Return dalam bentuk object
        return $query->result();
    }
        
    /*
     * function to add new point
     */
    function add_point($data)
    {
        // $this->db->insert('kegiatan',$params);
        // return $this->db->insert_id();
        return $this->db->insert('point', $data);
    }
    
    /*
     * function to update point
     */
    // function update_point($id_point,$params)
    // {
    //     $this->db->where('id_point',$id_point);
    //     return $this->db->update('point',$params);
    // }

    function update_point($data,$id)
    {
        // $this->db->where('id_user',$id_user);
        // return $this->db->update('pengguna',$params);
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'point', $data, array('id_point'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }
    
    /*
     * function to delete point
     */
    function delete_point($id)
    {
        return $this->db->delete('point',array('id_point'=>$id));
    }
}
