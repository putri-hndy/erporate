<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		session_destroy();

		echo "<script>alert('Berhasil Logout')</script>";		
		redirect('login','refresh');
	}

}
