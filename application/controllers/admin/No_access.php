<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class No_access extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login();
    }

    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/no_access');
        $this->load->view('template_admin/footer');
    }

}

/* End of file no_access.php */

?>
