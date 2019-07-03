<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-default">
						<div class="panel-heading">
							<h2>Tambah Menu</h2>
						</div>
						<div class="panel-body">
							<form method="post">
								<div class="form-group">
									<label>Nama Kategori</label>
									<select class="form-control" name="id_kategori">
										<option value="">-pilih-</option>
										<?php foreach ($kategori as $key => $value): ?>
											<option value="<?php echo $value['id_kategori'] ?>" <?php if($value['id_kategori']==$data_kategori['id_kategori']){echo "selected";} ?>><?php echo $value['nama_kategori'] ?></option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama Menu</label>
									<input type="" name="nama_menu" class="form-control">
								</div>
								<div class="form-group">
									<label>Harga</label>
									<input type="" name="harga_menu" class="form-control">
								</div>
								<div class="form-group">
									<label>Status</label>
									<input type="" name="status_menu" class="form-control">
								</div>
							<button class="btn btn-primary">Simpan</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>