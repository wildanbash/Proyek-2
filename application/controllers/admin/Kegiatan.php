<?php
 
class Kegiatan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
		check_not_login();
		$role = array("admin", "humas");
		check_staff( $this->fungsi->user_login()['type'], $role);
    } 

    /*
     * Listing of kegiatan
     */
    function index()
    {
        $data['kegiatan'] = $this->Kegiatan_model->get_all_kegiatan();
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/kegiatan/index', $data);
        $this->load->view('template_admin/footer');
    }

    /*
     * Adding a new kegiatan
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		
		if($this->form_validation->run())     
        {   
            $masjid_id = 1;
            $params = array(
                'user_id' => $this->fungsi->user_login()['user_id'],
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi')
            );
            
            $this->Kegiatan_model->add_kegiatan($params);
            redirect('admin/kegiatan/index');
        }
        else
        {            
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/kegiatan/add');
            $this->load->view('template_admin/footer');
        }
    }  

    /*
     * Editing a kegiatan
     */
    function edit($kegiatan_id)
    {   
        // check if the kegiatan exists before trying to edit it
        $data['kegiatan'] = $this->Kegiatan_model->get_kegiatan($kegiatan_id);
        
        if(isset($data['kegiatan']['kegiatan_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nama' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi')
                );

                $this->Kegiatan_model->update_kegiatan($kegiatan_id,$params);            
                redirect('admin/kegiatan/index');
            }
            else
            {
                $this->load->view('template_admin/header');
                $this->load->view('template_admin/sidebar');
                $this->load->view('admin/kegiatan/edit', $data);
                $this->load->view('template_admin/footer');
            }
        }
        else
            show_error('The kegiatan you are trying to edit does not exist.');
    }
}