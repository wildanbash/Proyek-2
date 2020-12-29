<?php
 
class Kegiatan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kegiatan by kegiatan_id
     */
    function get_kegiatan($kegiatan_id)
    {
        return $this->db->get_where('kegiatan',array('kegiatan_id'=>$kegiatan_id))->row_array();
    }
        
    /*
     * Get all kegiatan
     */
    function get_all_kegiatan()
    {
        $this->db->select('user.nama as namauser,kegiatan.kegiatan_id, kegiatan.nama, kegiatan.deskripsi');
        $this->db->from('kegiatan');
        $this->db->join('user', 'user.user_id = kegiatan.user_id');
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new kegiatan
     */
    function add_kegiatan($params)
    {
        $this->db->insert('kegiatan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kegiatan
     */
    function update_kegiatan($kegiatan_id,$params)
    {
        $this->db->where('kegiatan_id',$kegiatan_id);
        return $this->db->update('kegiatan',$params);
    }
}
