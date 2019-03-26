<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CekCek | Ukur Detak Jantung</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>

	<div class="container box-home">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-centered home-title">
				<h3>Ukur Detak Jantung Anda</h3>	
			</div>
		</div>
		<div class="row bmi-result">
			<div class="col-md-4 col-md-offset-4">
            <form action="#" class="inner-login" method="post">
                    <div class="form-group">
                        <label>Masukkan Umur Anda</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                </form>
                <a href="<?php echo site_url(); ?>jantung/process" class="btn btn-success btn-custom-blue">Selanjutnya</a>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>