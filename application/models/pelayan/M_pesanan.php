<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan extends CI_Model 
{

	function tampil_pesanan($id_user)
	{
		$status = "aktif";
		$this->db->where('id_user', $id_user);
		$this->db->where('status_pesanan', $status);
		$ambil = $this->db->get('pesanan');
		return $ambil->result_array();
	}	
	function tampil_data()
	{
		$status = "lunas";
		$this->db->where('status_pesanan', $status);
		$data = $this->db->get('pesanan');
		return $data->result_array();
	}
		function tampil_semua_data()
	{
		$data = $this->db->get('pesanan');
		return $data->result_array();
	}
	function ambil_data_pesanan($id_pesanan)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$ambil = $this->db->get('pesanan');
		return $ambil->row_array();

	}
	function ambil_data_pelunasan($id_pesanan)
	{
		$this->db->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->where('id_pesanan', $id_pesanan);
		$ambil = $this->db->get('pesanan');
		return $ambil->row_array();
	}
	function tampil_detail_pesanan($id_pesanan)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$ambil = $this->db->get('detail_pesanan');
		return $ambil->result_array();
	}
	function ubah_pesanan($id_pesanan, $inputan, $record)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$this->db->update('pesanan', $inputan);
		$this->db->insert('aktifitas', $record);

	}
	function hapus_pesanan($id_pesanan,$record)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$this->db->delete('pesanan');
		$this->db->insert('aktifitas', $record);
	}
	function simpan_pesanan($inputan, $record)
	{

		$inputan['status_pesanan']="aktif";
		$this->db->insert('pesanan', $inputan);
		$this->db->insert('aktifitas', $record);
	}
	function simpan_detail_pesanan($inputan, $record)
	{
		$this->db->where('id_pesanan', $inputan['id_pesanan']);
		$this->db->where('id_menu', $inputan['id_menu']);
		$ambil = $this->db->get('detail_pesanan');
		$cek = $ambil->num_rows();
		if ($cek>0) 
		{
			$data_pesanan = $ambil->row_array();
			$update['jumlah_beli'] = $data_pesanan['jumlah_beli']+$inputan['jumlah_beli'];
			$id_detail = $data_pesanan['id_detail'];
			$this->db->where('id_detail', $id_detail);
			$this->db->update('detail_pesanan', $update);
		} 
		else 
		{
			$this->db->insert('detail_pesanan', $inputan);
		}
		$this->db->insert('aktifitas', $record);

	}
	function update_total($id_pesanan)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$ambil = $this->db->get('detail_pesanan');
		$pesanan = $ambil->result_array();

		$total_bayar = 0;
		foreach ($pesanan as $key => $value)
		{
			$total_bayar+= $value['sub_total'];
		}
		$inputan['total_bayar'] = $total_bayar;
		$this->db->where('id_pesanan', $id_pesanan);
		$this->db->update('pesanan', $inputan);
	}
	function pembayaran($id_pesanan, $inputan, $record)
	{
		$this->db->where('id_pesanan', $id_pesanan);
		$this->db->update('pesanan', $inputan);
		$this->db->insert('aktifitas', $record);
	}
}

/* End of file M_pesanan.php */
/* Location: ./application/models/M_pesanan.php */