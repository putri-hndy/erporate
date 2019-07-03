<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model 
{
	function tampil_menu()
	{
		$this->db->join('kategori', 'kategori.id_kategori = menu.id_kategori', 'left');
		$ambil = $this->db->get('menu');
		return $ambil->result_array();
	}


	function simpan_menu($inputan, $record)
	{
		$this->db->insert('menu', $inputan);
		$this->db->insert('aktifitas', $record);
	}

	function tampil_menu_kategori($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$ambil = $this->db->get('menu');
		return $ambil->result_array();
	}
	function ambil_menu($id_menu)
	
	{
		$this->db->where('id_menu', $id_menu);
		$ambil = $this->db->get('menu');
		return $ambil->row_array();
	}
	function ubah_menu($inputan,$record,$id_menu)
	{
		$this->db->where('id_menu', $id_menu);
		$this->db->update('menu', $inputan);
		$this->db->insert('aktifitas', $record);
	}
	function hapus_menu($id_menu,$record)
	{
		$this->db->where('id_menu', $id_menu);
		$this->db->delete('menu');
		$this->db->insert('aktifitas', $record);
	}

	

}

/* End of file M_data.php */
/* Location: ./application/models/M_data.php */