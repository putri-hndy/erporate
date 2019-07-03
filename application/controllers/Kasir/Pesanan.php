<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
		$this->load->model('M_pesanan');

	}

	public function index()
	{
				$data['pesanan'] = $this->M_pesanan->tampil_semua_data();
		// $id_user = $_SESSION['kasir']['id_user'];
		// $data['pesanan'] = $this->M_pesanan->tampil_pesanan($id_user);
		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/pesanan', $data);
	}
	function detail($id_pesanan)
	{
		$data['detail'] = $this->M_pesanan->ambil_data_pesanan($id_pesanan);
	}
	function ubah($id_pesanan)
	{
		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$data['pesanan'] = $this->M_pesanan->ambil_data_pesanan($id_pesanan);

		$inputan = $this->input->post();
		if($inputan)
		{
			$record = array();
			$record['id_user'] = $_SESSION['kasir']['id_user'];
			$record['waktu_aktifitas'] = date("Y-m-d H:i");
			$record['isi_aktifitas'] = "user mengubah pesanan";

			$inputan['id_user']= $_SESSION['kasir']['id_user'];
			$this->M_pesanan->ubah_pesanan($id_pesanan, $inputan, $record);
			echo "<script>alert('pesanan berhasil disimpan')</script>";
			redirect("kasir/pesanan", 'refresh');
		}
		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/ubah_pesanan', $data);
	}
	function hapus($id_pesanan)
	{
		$record = array();
		$record['id_user'] = $_SESSION['kasir']['id_user'];
		$record['waktu_aktifitas'] = date("Y-m-d H:i");
		$record['isi_aktifitas'] = "user menghapus pesanan";

		$this->M_pesanan->hapus_pesanan($id_pesanan,$record);
		echo "<script>alert('pesanan berhasil dihapus')</script>";
		redirect("kasir/pesanan", 'refresh');

	}
	function tambah()
	{
		$data['kategori'] = $this->M_kategori->tampil_kategori();

		$inputan = $this->input->post();
		if($inputan)
		{
			$record = array();
			$record['id_user'] = $_SESSION['kasir']['id_user'];
			$record['waktu_aktifitas'] = date("Y-m-d H:i");
			$record['isi_aktifitas'] = "user menambahkan pesanan";

			$inputan['id_user']= $_SESSION['kasir']['id_user'];
			$this->M_pesanan->simpan_pesanan($inputan, $record);
			echo "<script>alert('pesanan berhasil disimpan')</script>";
			redirect("kasir/pesanan", 'refresh');
		}
		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/tambah_pesanan', $data);
	}

	function tambah_menu($id_pesanan)
	{
		$inputan = $this->input->post();
		if($inputan)
		{
			unset($inputan['id_kategori']);
			unset($inputan['pilih_menu']);

			$inputan['sub_total'] = $inputan['harga_menu']*$inputan['jumlah_beli'];
			$record = array();
			$record['id_user'] = $_SESSION['kasir']['id_user'];
			$record['waktu_aktifitas'] = date("Y-m-d H:i");
			$record['isi_aktifitas'] = "user menambahkan menu pesanan";

			$inputan['id_pesanan']= $id_pesanan;

			$this->M_pesanan->simpan_detail_pesanan($inputan, $record);
			$this->M_pesanan->update_total($id_pesanan);
			echo "<script>alert('detail pesanan berhasil disimpan')</script>";
			redirect("kasir/pesanan", 'refresh');
		}
		$data['kategori'] = $this->M_kategori->tampil_kategori();

		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/tambah_menu_pesanan', $data);


	}
	function pembayaran($id_pesanan)
	{
		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$data['pesanan'] = $this->M_pesanan->ambil_data_pesanan($id_pesanan);
		$data['pembayaran'] = $this->M_pesanan->ambil_data_pelunasan($id_pesanan);

		$inputan = $this->input->post();
		if($inputan)
		{
			echo "<pre>";
			print_r ($data['pembayaran']);
			echo "</pre>";
			$record = array();
			$record['id_user'] = $_SESSION['kasir']['id_user'];
			$record['waktu_aktifitas'] = date("Y-m-d H:i");
			$record['isi_aktifitas'] = "user melakukan pembayaran";

			$inputan['id_user']= $_SESSION['kasir']['id_user'];
			$this->M_pesanan->pembayaran($id_pesanan, $inputan, $record);
			echo "<script>alert('pesanan berhasil dibayar')</script>";
			redirect("kasir/pesanan", 'refresh');
		}
		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/pembayaran', $data);
	}
}


/* End of file Pesanan.php */
/* Location: ./application/controllers/Pelayan/Pesanan.php */