<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap-theme.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css") ?>">
</head>
<body>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login">

				<div class="login-header">
					<h3>Login User</h3>
				</div>
				<form method="POST">
					<div class="login-form">
						<div class="form-group has-feedback">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<button class="btn btn-success btn-block">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>