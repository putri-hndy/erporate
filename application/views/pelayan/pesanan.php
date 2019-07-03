<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>No Pesanan</th>
					<th>Nama Pelanggan</th>
					<th>No Meja</th>
					<th>Total Bayar</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pesanan as $key => $value): ?>
					

					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['no_pesanan'] ?></td>
						<td><?php echo $value['nama_pelanggan'] ?></td>
						<td><?php echo $value['no_meja'] ?></td>
						<td><?php echo $value['total_bayar'] ?></td>
						<td>
							<button id_pesanan="<?php echo $value['id_pesanan'] ?>" type="button" class="btn btn-primary btn-sm detail-pesanan" data-toggle="modal" data-target="#myModal">Detail</button>
							<a class="btn btn-sm btn-warning" href="<?php echo base_url("pelayan/pesanan/ubah/$value[id_pesanan]") ?>">Ubah</a>
							<a class="btn btn-sm btn-danger" href="<?php echo base_url("pelayan/pesanan/hapus/$value[id_pesanan]") ?>">Hapus</a>
							<a class="btn btn-sm btn-danger" href="<?php echo base_url("pelayan/pesanan/tambah_menu/$value[id_pesanan]") ?>">Tambah Menu</a>
						</td>

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<a class="btn btn-primary" href="<?php echo base_url("pelayan/pesanan/tambah") ?>">Tambah Pesanan</a>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>


<script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script>
	$(document).ready(function(){
$(".detail-pesanan").on("click",function(){
	var id_pesanan= $(this).attr("id_pesanan");

	$.ajax({
		type:'POST',
		url:"<?php echo base_url('ajax/detail_pesanan') ?>",
		data:"id_pesanan="+id_pesanan,
		success:function(detail)
		{
			$(".modal-body").html(detail);
		}
	})
})
	})
</script>
</body>
</html>