<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model 
{

	function login($inputan)
	{
		// untuk mengenkripsi password
		$password = sha1($inputan["password"]);

		$this->db->where('username', $inputan["username"]);
		$this->db->where('password', $password);

		$ambil = $this->db->get('user');

		$cek = $ambil->num_rows();
		if($cek==0)
		{
			return "salah";
		}
		else
		{
			$data_user = $ambil->row_array();
			$status_user= $data_user['status_user'];

			if($status_user=="Pelayan")
			{
				$this->session->set_userdata( 'pelayan', $data_user);

				$record['id_user'] = $_SESSION['pelayan']['id_user'];
				$record['waktu_aktifitas'] = date("Y-m-d H:i");
				$record['isi_aktifitas'] = "user melakukan login";

				$this->db->insert('aktifitas', $record);
				return "pelayan";
			}
			else
			{
				$this->session->set_userdata( 'kasir', $data_user);

				$record['id_user'] = $_SESSION['kasir']['id_user'];
				$record['waktu_aktifitas'] = date("Y-m-d H:i");
				$record['isi_aktifitas'] = "user melakukan login";

				$this->db->insert('aktifitas', $record);
				return "kasir";

			}
		}
	}	
}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */