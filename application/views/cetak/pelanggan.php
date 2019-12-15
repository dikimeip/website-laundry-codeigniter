<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body onload="window.print()">
	<div class="container">
		<h1 class="text-center">CETAK TRANSAKSI</h1>
			<h3 class="text-center">CV DICK LAUNDRY INDO</h3>
			<p class="text-center">Jln RA Basuni No 34 Mojokerto Jawa Timur</p>
			<p class="text-center">HP 082143211234</p>
			<hr>
			<?php echo date('d-m-Y') ?>
		<table class="table table-hover">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>NO HP</th>
		</tr>
		<?php foreach($user as $u) : ?>
			<tr>
				<th><?php echo $no++ ?></th>
				<td><?php echo $u['nama_user'] ?></td>
				<td><?php echo $u['alamat_user'] ?></td>
				<td><?php echo $u['hp_user'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	</div>
</body>
</html>