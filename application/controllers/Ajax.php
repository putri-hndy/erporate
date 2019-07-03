<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pesanan');
		$this->load->model('M_menu');
	}

	public function detail_pesanan()
	{
		$id_pesanan = $_POST['id_pesanan'];
		$detail_pesanan = $this->M_pesanan->tampil_detail_pesanan($id_pesanan);
		?>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Menu</th>
					<th>Harga</th>
					<th>Jumlah Pesanan</th>
					<th>Sub Total</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($detail_pesanan as $key => $value): ?>
					
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['nama_menu'] ?></td>
						<td><?php echo $value['harga_menu'] ?></td>
						<td><?php echo $value['jumlah_beli'] ?></td>
						<td><?php echo $value['sub_total'] ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<?php
	}
	function tampil_menu()
	{
		$id_kategori = $_POST['id_kategori'];
		$menu = $this->M_menu->tampil_menu_kategori($id_kategori);
		?>

		<option value="">-pilih-</option>
		<?php foreach ($menu as $key => $value): ?>
			<option nama_menu="<?php echo $value['nama_menu'] ?>" harga_menu="<?php echo $value['harga_menu'] ?>" value="<?php echo $value['id_menu'] ?>"><?php echo $value['nama_menu'] ?></option>
		<?php endforeach ?>
		<?php
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */