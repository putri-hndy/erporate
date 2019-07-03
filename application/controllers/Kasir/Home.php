<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
		$this->load->model('M_menu');
	}

	public function index()
	{
		$data['kategori'] = $this->M_kategori->tampil_kategori();
		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/home');
	}
	function makanan()
	{
	
		$data['menu'] = $this->M_menu->tampil_menu();
		$data['kategori'] = $this->M_kategori->tampil_kategori();

		$this->load->view('kasir/header', $data);
		$this->load->view('kasir/makanan', $data);
	}
	function minuman()
	{
		$data['menu'] = $this->M_menu->tampil_menu();
		$data['kategori'] = $this->M_kategori->tampil_kategori();

		$this->load->view('kasir/header', $data);
		$this->load->view('minuman', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */