<?php
 
class Pesan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_message($id = null)
    {
        if($id != null){
            $this->db->where('id', $id);
            return $this->db->get('pesan')->row_array();
        }else{
            return $this->db->get('pesan')->result_array();
        }
    }
        
    function send_message($params)
    {
        $this->db->insert('pesan',$params);
    }
    
    function delete_message($pesan_id)
    {
        return $this->db->delete('pesan',array('id'=>$pesan_id));
    }
}
