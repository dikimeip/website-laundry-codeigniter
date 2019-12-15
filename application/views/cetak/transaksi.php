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
			<th>USER</th>
			<th>BERAT LAUNDRY</th>
			<th>TOTAL</th>
			<th>TANGGAL</th>
			<th>KET</th>
		</tr>
		<?php foreach ($trans as $t): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $t['nama_user'] ?></td>
				<td><?php echo $t['berat_transaksi'] ?></td>
				<td><?php echo number_format($t['harga_total']) ?></td>
				<td><?php echo $t['tanggal_masuk_transaksi'] ?></td>
				<td><?php echo $t['keterangan_transaksi'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	</div>
</body>
</html>