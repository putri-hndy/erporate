<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$inputan = $this->input->post();
		// untuk melakukan pengecekan apakah datanya sesuai atau tidak
		if ($inputan)
		 {

			$cek = $this->M_login->login($inputan);
			if($cek == "pelayan")
			{
				echo "<script>alert('Login Berhasil')</script>";
				redirect('pelayan/home','refresh');
			}
			elseif($cek == "kasir")
			{
				echo "<script>alert('Login Berhasil')</script>";
				redirect('kasir/home','refresh');
			}
			else
			{
				echo "<script>alert('Login Gagal')</script>";
				// redirect('admin/login','refresh');
			}
		}
		$this->load->view('login');
	}

	// public function index()
	// {
	// 	$inputan = $this->input->post();
	// 	echo "<pre>";
	// 	print_r ($inputan);
	// 	echo "</pre>";
	// 	if($inputan)
	// 	{
	// 		$this->load->model('M_login');
	// 		$cek = $this->M_login->login($inputan);
	// 		if($cek=="benar")
	// 		{
	// 			echo "<script>alert('Login Berhasil')</script>";
	// 			// redirect('home','refresh');
	// 		}
	// 		{
	// 			echo "<script>alert('Login Gagal, Silahkan Login')</script>";
	// 			// redirect('login','refresh');
	// 		}
	// 	}



	// 	$this->load->view('login');
	// }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */