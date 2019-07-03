<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
		$this->load->model('M_pesanan');
		$this->load->model('M_pembayaran');
	}

	public function index()
	{
		$id_user = $_SESSION['kasir']['id_user'];
		$data['pesanan'] = $this->M_pesanan->tampil_pesanan($id_user);
		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$data['pembayaran'] = $this->M_pesanan->tampil_data();

		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/tampil_pembayaran', $data);
	}

}

/* End of file Pembayaran.php */
/* Location: ./application/controllers/Kasir/Pembayaran.php */