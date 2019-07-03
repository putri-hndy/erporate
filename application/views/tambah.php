<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Warung Erporate</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap//css/bootstrap-theme.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css") ?>">
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="logo">
							<img src="<?php echo base_url('assets/img/logo.jpg') ?>" class="img-responsive">
						</div>
					</div>
					<div class="col-md-9">
						<div class="text-header">
							<h1>Warung Erporate</h1>
							<span>Jl. Wirajaya No. 310 A, Condongcatur, Depok, Sleman, (Rumah pagar hijau, samping oksigen medis, belakang terminal Condongcatur)</span>
							<span>Telp. 0274-1234-56789</span>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</header>
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
											<option value="<?php echo $value['id_kategori'] ?>"><?php echo $value['nama_kategori'] ?></option>
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
							</form>
							<button class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>