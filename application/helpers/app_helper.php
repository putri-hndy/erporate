<?php 

function rp($harga)
{
	// bentuk format harga yang tampil menjadi dipisah dalam 3 digit
	$format_harga = number_format($harga);

	// str_replace untuk mengubah bentuk format string
	// search = string yang mau diganti
	// replace = string barunya
	// subject = sumber string
	// semua isi paramaternya harus dalam ""
	$harga_fix = str_replace(',', '.',$format_harga);
	return "Rp " . $harga_fix;

}

 ?>