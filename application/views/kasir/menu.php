<div class="container">
	<div class="row">
		<div class="table">
			<h2>List Menu <?php echo $data_kategori['nama_kategori'] ?></h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Makanan</th>
						<th>Harga</th>
						<th>Status</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($menu as $key => $value): ?>
				
						<tr>
						<td><?php echo $key+1 ?></td>
						<td><?php echo $value['nama_menu'] ?></td>
						<td><?php echo rp($value['harga_menu']) ?></td>
						<td><?php echo $value['status_menu'] ?></td>
						<td>
							<a class="btn btn-default" href="<?php echo base_url("kasir/menu/ubah_menu/$value[id_menu]/$data_kategori[id_kategori]") ?>">Ubah</a>
							<a class="btn btn-default" href="<?php echo base_url("kasir/menu/hapus_menu/$value[id_menu]/$data_kategori[id_kategori]") ?>">Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<a class="btn btn-default" href="<?php echo base_url("kasir/menu/tambah_menu/$data_kategori[id_kategori]") ?>">tambah</a>
		</div>
	</div>
</div>
</body>