<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-default">
						<div class="panel-heading">
							<h2>Pembayaran</h2>
						</div>
						<div class="panel-body">
							<form method="post">
								<div class="form-group">
									<label>No Pesanan</label>
									<input type="" name="no_pesanan" value="<?php echo "ERP".date("dmY")."-" ?>" class="form-control">
								</div>
								<div class="form-group">
									<label>No Meja</label>
									<input type="" name="no_meja" class="form-control" value="<?php echo $pesanan['no_meja'] ?>">
								</div>
								<div class="form-group">
									<label>Nama Pelanggan</label>
									<input type="" name="nama_pelanggan" class="form-control" value="<?php echo $pesanan['nama_pelanggan'] ?>">
								</div>
								<div class="form-group">
									<label>Status Pesanan</label>
									<input type="" name="status_pesanan" class="form-control" value="<?php echo $pesanan['status_pesanan'] ?>">
								</div>
							<button class="btn btn-primary">Simpan</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>