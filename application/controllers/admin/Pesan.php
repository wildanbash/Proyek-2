<?php
 
class Pesan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pesan_model');
        // check_not_login();
        // $role = array("admin", "humas");
		// check_staff( $this->fungsi->user_login()['type'], $role);

    } 

    /*
     * Listing of peminjaman
     */
    function index()
    {
        $data['pesan'] = $this->Pesan_model->get_message();
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pesan/index', $data);
        $this->load->view('template_admin/footer');
    }  

    /*
     * Deleting peminjaman
     */
    function remove($pesan_id)
    {
        $pesan = $this->Pesan_model->get_message($pesan_id);

        // check if the peminjaman exists before trying to delete it
        if(isset($pesan['id']))
        {
            $this->Pesan_model->delete_message($pesan_id);
            redirect('admin/pesan/index');
        }
        else
            show_error('The pesan you are trying to delete does not exist.');
    }   
}