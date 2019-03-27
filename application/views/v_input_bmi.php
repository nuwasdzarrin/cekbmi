<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CekCek | Ukur BMI</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>

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
			<div class="col-md-6 bmi-description">
                <h5>Apa itu BMI?</h5>
                <p>Body Mass Index (BMI) atau Indeks Massa Tubuh (IMT) adalah angka yang menjadi penilaian standar untuk menentukan apakah berat badan anda tergolong normal, kurang, berlebihan, atau obesitas.</p>
			</div>
			<div class="col-md-6 bmi-form">
                <form action="<?php echo site_url(); ?>bmi/counting" class="inner-login" method="post">
                    <div class="form-group">
                        <label>Masukkan Berat Badan Anda</label>
                        <input type="number" class="form-control" name="weight" placeholder="Berat badan dalam Kg">
                    </div>

                    <div class="form-group">
                        <label>Masukkan Tinggi Badan Anda</label>
                        <input type="number" class="form-control" name="height" placeholder="Tinggi badan dalam cm">
                    </div>

                    <center><input type="submit" class="btn btn-success btn-custom-blue" value="HITUNG" /></center>
                </form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>