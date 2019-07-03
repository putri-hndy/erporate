<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$record = array();
		$record['id_user'] = $_SESSION['kasir']['id_user'];
		$record['waktu_aktifitas'] = date("Y-m-d H:i");
		$record['isi_aktifitas'] = "user melakukan Logout";
		session_destroy();

		echo "<script>alert('Berhasil Logout')</script>";		
		// redirect('login','refresh');
	}

}
