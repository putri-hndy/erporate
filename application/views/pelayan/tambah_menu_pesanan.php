<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel-default">
				<div class="panel-heading">
					<h2>Tambah Menu Pesanan</h2>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Kategori</label>
							<select class="form-control" name="id_kategori">
								<option>-pilih-</option>
								<?php foreach ($kategori as $key => $value): ?>
									<option value="<?php echo $value['id_kategori'] ?>"><?php echo $value['nama_kategori'] ?></option>

								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label>Menu</label>
							<select name="pilih_menu" class="form-control">

							</select>
						</div>
						<div class="form-group">
							<label>Jumlah Beli</label>
							<input type="" name="jumlah_beli" class="form-control">
						</div>
						<button class="btn btn-primary">Simpan</button>


<input type="" name="id_menu">
<input type="" name="nama_menu">
<input type="" name="harga_menu">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js") ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
<script>
	$(document).ready(function(){
		$("select[name=id_kategori]").on("change",function(){
			var id_kategori= $(this).val();

			$.ajax({
				type:'POST',
				url:"<?php echo base_url('ajax/tampil_menu') ?>",
				data:"id_kategori="+id_kategori,
				success:function(menu)
				{
					$("select[name=pilih_menu]").html(menu);
				}
			})
		})
	})
</script>
<script>
	$(document).ready(function(){
		$("select[name=pilih_menu]").on("change",function(){
			var id_menu = $(this).val();
			var nama_menu = $("option:selected",this).attr("nama_menu");
			var harga_menu = $("option:selected",this).attr("harga_menu");

			$("input[name=id_menu]").val(id_menu);
			$("input[name=nama_menu]").val(nama_menu);
			$("input[name=harga_menu]").val(harga_menu);
		});
	})
</script>
</body>
</html>