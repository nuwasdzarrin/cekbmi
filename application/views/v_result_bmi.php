<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CekCek | Hasil BMI</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>

	<div class="container box-home">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-centered home-title">
				<h3>Nilai BMI terakhir anda</h3>	
			</div>
		</div>
		<div class="row bmi-result">
			<div class="col-md-6 col-md-offset-3">
				<?php if ($hit==0) { ?>
					<h2 class="result-bmi">Belum ada data</h2>
				<?php } else { ?>
					<h2 class="result-bmi"><?php echo $latest->bmi; ?></h2>
					<?php if ($latest->bmi > 18.5 && $latest->bmi < 22.9) { ?>
						<h3 class="result-bmi">Anda termasuk Sehat</h3>
					<?php } else { ?>
						<h3 class="result-bmi">Anda kurang Sehat</h3>
					<?php } ?>
				<?php } ?>
                <p>berat badan anda bisa dikatakan ideal jika angka bmi anda antara 18,5 sampai 22,9</p>
                <div class="bmi-tips">
                    <h3>TIPS...</h3>
                    <h4>Bagaimana cara menjaga agar berat badan tetap ideal?</h4>
                    <p>Anda perlu mengonsumsi makanan dan minuman sesuai dengan kebutuhan kalori harian anda, <br>
                    untuk mempertahankan berat bdan ideal seperti sekarang.<br>
                    Misalnya, jika kebituhan kalori harian anda adalah 1950 kkal, maka anada harus mengonsumsi<br>
                    makanan dengan total kalori 1950 per hari.</p>
				</div>
				<h4>Riwayat BMI anda</h4>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Tanggal</td>
							<td>Berat Badan</td>
							<td>Tinggi Badan</td>
							<td>BMI</td>
						</tr>
					</thead>
					<?php foreach ($history as $his) { ?>
					<tbody>
						<tr>
							<td><?php echo $his->created; ?></td>
							<td><?php echo $his->weight; ?></td>
							<td><?php echo $his->height; ?></td>
							<td><?php echo $his->bmi; ?></td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
                <a href="<?php echo site_url(); ?>" class="btn btn-success btn-custom-blue">Kembali ke menu utama</a>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>