<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('home');
	}
	function makanan()
	{
		$this->load->model('M_menu');
		$data['menu'] = $this->M_menu->tampil_menu();
		$this->load->view('header');
		$this->load->view('makanan', $data);
	}
	function minuman()
	{
		$this->load->model('M_menu');
		$data['menu'] = $this->M_menu->tampil_menu();
		$this->load->view('header');
		$this->load->view('minuman', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */