<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model 
{
	function tampil_semua_pembayaran()
	{

		$ambil = $this->db->get('pembayaran');
		return $ambil->result_array();
	}
	function ambil_data_pembayaran($id_pembayaran)
	{
		$this->db->where('id_pembayaran', $id_pembayaran);
		$ambil = $this->db->get('pembayaran');
		return $ambil->row_array();
	}

	

}

/* End of file M_pembayaran.php */
/* Location: ./application/models/M_pembayaran.php */