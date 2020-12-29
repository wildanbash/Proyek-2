<?php
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by user_id
     */
    function get_user($user_id)
    {
        return $this->db->get_where('user',array('user_id'=>$user_id))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('user_id', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($user_id,$params)
    {
        $this->db->where('user_id',$user_id);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($user_id)
    {
        return $this->db->delete('user',array('user_id'=>$user_id));
    }

    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
	}
	
	public function register($data){
		$this->db->insert('username', $data);
		return $this->db->get();
	}
}
