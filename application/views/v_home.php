<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CekCek | Home</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
		<?php if ($this->session->flashdata('sukses')) { ?>
			<script type="text/javascript">alert("<?php echo $this->session->flashdata('sukses');?>"); </script>
		<?php } ?>
	<div class="container box-home">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-centered home-title">
				<h3>
				Hallo
				<?php if ($this->session->userdata('id_login')) { ?>
					<?php echo $this->session->userdata('username')?>!
					<a href="<?php echo site_url('login/logout') ?>">
					<img src="<?php echo base_url() ?>assets/img/logout.svg" style="width:10%;" title="logout">
					</a>
				<?php } else { ?>
					Anonymous
					<a href="<?php echo site_url('login') ?>">
					<img src="<?php echo base_url() ?>assets/img/login-square-arrow-button-outline.svg" style="width:10%;" title="login">
					</a>
				<?php } ?>
				</h3>	
			</div>
		</div>
		<div class="row row-centered">
			<div class="col-md-4 col-centered">
				<a href="<?php echo site_url(); ?>bmi">
					<img src="<?php echo base_url() ?>assets/img/weight-scale.svg">
					<h5>Indeks Massa Tubuh</h5>
				</a>
			</div>
			<div class="col-md-4 col-centered">
				<a href="<?php echo site_url(); ?>jantung">
					<img src="<?php echo base_url() ?>assets/img/cardiogram.svg">
					<h5>Detak Jantung</h5>
				</a>
			</div>
			<div class="col-md-4 col-centered">
				<a href="<?php echo site_url(); ?>darah">
					<img src="<?php echo base_url() ?>assets/img/pressure.svg">
					<h5>Tekanan Darah</h5>
				</a>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>