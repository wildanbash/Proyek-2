<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Keuangan_model');
        check_not_login();
		$role = array("admin", "keuangan");
		check_staff( $this->fungsi->user_login()['type'], $role);
    }

	public function index(){
		
		$data['keuangan'] = $this->Keuangan_model->getByMonth(date('m'));
		$data['t_pemasukan'] = $this->Keuangan_model->total_pemasukan();
		$data['t_pengeluaran'] = $this->Keuangan_model->total_pengeluaran();
		$data['keuangan_bulan_lalu'] = $this->Keuangan_model->getByMonth(date("m", strtotime("-1 month", strtotime(date("m")))));
		
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/keuangan/index', $data);
        $this->load->view('template_admin/footer');
	}

	public function entry(){
		$data = array(
			'tanggal' => date("Y-m-d"),
			'ket' => $this->input->post('keterangan'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'user_id' => $this->fungsi->user_login()['user_id']
		);
		if($this->Keuangan_model->inserting($data)){
			redirect('admin/keuangan','refresh');
		} else {
			echo "<script>
                alert('Entry Gagal');
                window.location='" . site_url('admin/keuangan') . "';
            </script>";
		}
	}

	public function remove($id){
		$keuangan = $this->Keuangan_model->get_keuangan($id);

        // check if the peminjaman exists before trying to delete it
        if(isset($keuangan['id']))
        {
            $this->Keuangan_model->delete_keuangan($id);
            redirect('admin/keuangan/index');
        }
        else
            show_error('The keuangan you are trying to delete does not exist.');
	}

	public function laporan(){}

}

/* End of file Keuangan.php */
?>