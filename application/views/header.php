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
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".naff">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse naff">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo base_url('home') ?>">Home</a></li>
						<li><a href="<?php echo base_url("home/makanan") ?>">Makanan</a></li>
						<li><a href="<?php echo base_url("home/minuman") ?>">Minuman</a></li>
						<li><a href="">Pesanan</a></li>

					</ul>
					<ul class="nav navbar-nav navbar-right">

						<li><a href="<?php echo base_url('logout') ?>">Logout</a></li>

					</ul>
				</div>
			</div>
		</nav>