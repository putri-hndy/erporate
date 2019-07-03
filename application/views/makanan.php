<div class="container">
	<div class="row">
		<div class="table">
			<h2>List Menu Makanan</h2>
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
					<?php if ($value['id_kategori']==1): ?>
						<tr>
						<td><?php echo $key+1 ?></td>
						<td><?php echo $value['nama_menu'] ?></td>
						<td><?php echo rp($value['harga_menu']) ?></td>
						<td><?php echo $value['status_menu'] ?></td>
						<td>
							<a class="btn btn-default" href="<?php echo base_url("menu/ubah_menu/$value[id_menu]") ?>">Ubah</a>
							<a class="btn btn-default" href="<?php echo base_url("menu/hapus_menu/$value[id_menu]") ?>">Hapus</a>
						</td>
					</tr>
					<?php endif ?>
					<?php endforeach ?>
				</tbody>
			</table>
			<a class="btn btn-default" href="<?php echo base_url("menu/tambah_menu") ?>">tambah</a>
		</div>
	</div>
</div>
</body>