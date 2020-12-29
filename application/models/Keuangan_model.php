<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan_model extends CI_Model {

	public function inserting($data){
		return $this->db->insert('keuangan', $data);
	}

	public function getByMonth($month){
		$this->db->where('MONTH(tanggal)', $month);
		return $this->db->get('keuangan')->result_array();
	}

	public function total_pemasukan(){
		$this->db->select('SUM(jumlah) as jumlah');
		$this->db->where('jenis', 'pemasukkan');
		return $this->db->get('keuangan')->row_array();
	}

	public function total_pengeluaran(){
		$this->db->select('SUM(jumlah) as jumlah');
		$this->db->where('jenis', 'pengeluaran');
		return $this->db->get('keuangan')->row_array();
	}

	function get_keuangan($id)
    {
        return $this->db->get_where('keuangan',array('id'=>$id))->row_array();
	}
	
	function delete_keuangan($id)
    {
        return $this->db->delete('keuangan',array('id'=>$id));
    }

}

/* End of file Keuangan_model.php */

?>
