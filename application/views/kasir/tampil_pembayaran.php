<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No Pesanan</th>
				<th>No Meja</th>
				<th>Nama Pelanggan</th>
				<th>Total Pembayaran</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pembayaran as $key => $value): ?>
				<tr>
					<td><?php echo $value['no_pesanan'] ?></td>
					<td><?php echo $value['no_meja'] ?></td>
					<td><?php echo $value['nama_pelanggan'] ?></td>
					<td><?php echo $value['total_bayar'] ?></td>
					<td><?php echo $value['status_pesanan'] ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>