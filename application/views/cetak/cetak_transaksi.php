<!DOCTYPE html>
<html>
<head>
	<title>Cetak Transaksi</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body onload="window.print()">
	<div class="container">
		<h1 class="text-center">CETAK TRANSAKSI</h1>
		<h3 class="text-center">CV DICK LAUNDRY INDO</h3>
		<p class="text-center">Jln RA Basuni No 34 Mojokerto Jawa Timur</p>
		<p class="text-center">HP 082143211234</p>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<p><b>NAMA PELANGGAN : </b><?php echo $trans['nama_user'] ?></p>
				<p><b>HO HP PELANGGAN : </b><?php echo $trans['hp_user'] ?></p>
			</div>
			<div class="col-md-6">
				<p><b>ALAMAT PELANGGAN : </b><?php echo $trans['alamat_user'] ?></p>
				<p><b>KETERANGAN PELANGGAN : </b><?php echo $trans['ket_user'] ?></p>
			</div>
		</div>
		<br>
		<br>
		<table class="table table-border">
			<tr>
				<th>NAMA PAKET</th>
				<th>HARGA</th>
				<th>TOTAL</th>
			</tr>
			<tr>
				<td><?php echo $trans['nama_paket'] ?></td>
				<td><?php echo $trans['berat_transaksi'] ?></td>
				<td><?php echo number_format($trans['harga_total']) ?></td>
			</tr>
			<tr>
				<td></td>
				<td>TOTAL</td>
				<td><?php echo number_format($trans['harga_total']) ?></td>
			</tr>
		</table>
		<br>
		<br>
		<b>* KETERANGAN</b>
		<br>
		<p><?php echo $trans['keterangan_transaksi'] ?></p>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4">
				<p class="text-center">Tanda Tangan Pelanggan</p>
				<br>
				<br>
				<br>
				<p class="text-center"></b><?php echo $trans['nama_user'] ?></p>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<p class="text-center">Tanda Tangan Kasir</p>
				<br>
				<br>
				<br>
				<p class="text-center"></b>Kasir</p>
			</div>
		</div>
	</div>
</body>
</html>