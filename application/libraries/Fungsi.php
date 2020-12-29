<?php 

class Fungsi{
    protected $ci;

    public function __construct(){
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('user_model');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_model->get_user($user_id);
        return $user_data;
    }
}
