<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

	function tampil_kategori()
	{
		$ambil = $this->db->get('kategori');
		return $ambil->result_array();
	}
	function ambil_data_kategori($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$ambil = $this->db->get('kategori');
		return $ambil->row_array();
	}

	

}

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */