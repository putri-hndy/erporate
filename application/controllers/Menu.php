<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_menu');
	}

	function kategori()
	{


		$data["kategori"] = $this->M_menu->tampil_kategori();

	}

	function tambah_menu()
	{
		$data["kategori"] = $this->M_menu->tampil_kategori();



		$tambah = $this->input->post();

		if($tambah)
		{
			echo "<pre>";
			print_r ($tambah);
			echo "</pre>";
			// $this->M_menu->simpan_menu($tambah);
			// redirect('home','refresh');
		}

		$this->load->view('tambah', $data);
	}
	

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */