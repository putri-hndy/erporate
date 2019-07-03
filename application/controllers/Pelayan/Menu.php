<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
		$this->load->model('M_menu');
	}

	public function tampil($id_kategori)
	{
		$data['menu'] = $this->M_menu->tampil_menu_kategori($id_kategori);
		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$data['data_kategori'] = $this->M_kategori->ambil_data_kategori($id_kategori);

		$this->load->view('pelayan/header', $data);
		$this->load->view('pelayan/menu', $data);
	}
	function tambah_menu($id_kategori)
	{
		$data['data_kategori'] = $this->M_kategori->ambil_data_kategori($id_kategori);
		$data['kategori'] = $this->M_kategori->tampil_kategori();

		$inputan = $this->input->post();
		if($inputan)
		{
			$record = array();
			$record['id_user'] = $_SESSION['pelayan']['id_user'];
			$record['waktu_aktifitas'] = date("Y-m-d H:i");
			$record['isi_aktifitas'] = "user menambahkan menu";


			$this->M_menu->simpan_menu($inputan, $record);
			echo "<script>alert('menu berhasil disimpan')</script>";
			redirect("pelayan/menu/tampil/$id_kategori", 'refresh');
		}
		$this->load->view('pelayan/header', $data);
		$this->load->view('pelayan/tambah_menu', $data);
	}

	function ubah_menu($id_menu,$id_kategori)
	{
		$data['data_kategori'] = $this->M_kategori->ambil_data_kategori($id_kategori);

		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$data['menu'] = $this->M_menu->ambil_menu($id_menu);

		$inputan = $this->input->post();
		if($inputan)
		{
			$record = array();
			$record['id_user'] = $_SESSION['pelayan']['id_user'];
			$record['waktu_aktifitas'] = date("Y-m-d H:i");
			$record['isi_aktifitas'] = "user mengubah menu";

			$this->M_menu->ubah_menu($inputan, $record, $id_menu);
			echo "<script>alert('menu berhasil diubah')</script>";
			redirect("pelayan/menu/tampil/$id_kategori", 'refresh');
		}

		$this->load->view('pelayan/header', $data);
		$this->load->view('pelayan/ubah_menu', $data);
	}
	function hapus_menu($id_menu,$id_kategori)
	{
		$record = array();
		$record['id_user'] = $_SESSION['pelayan']['id_user'];
		$record['waktu_aktifitas'] = date("Y-m-d H:i");
		$record['isi_aktifitas'] = "user menghapus menu";

		$this->M_menu->hapus_menu($id_menu,$record);
		echo "<script>alert('menu berhasil dihapus')</script>";
		redirect("pelayan/menu/tampil/$id_kategori", 'refresh');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Pelayan/Kategori.php */