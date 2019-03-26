<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CekCek | Login</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="col-md-4 col-md-offset-4 form-login">

		<?php
		/* handle error */
		if (isset($_GET['error'])) : ?>
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
			</div>
		<?php endif;?>

		<div class="outter-form-login">
			<form action="<?php echo site_url() ?>login/do_register" class="inner-login" method="post">
				<h3 class="text-center title-login">Silahkan Mendaftar Terlebih Dahulu</h3>
                <div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email" required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" required>
				</div>

				<center><input type="submit" class="btn btn-success btn-custom-blue" value="registrasi" /></center>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>