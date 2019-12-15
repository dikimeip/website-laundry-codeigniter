<h1>ADMIN DASBOARD <?php echo date('Y-m-d') ?> </h1>
<br><hr>
<div class="row">
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>TRANSAKSI</b></p>
			<p>Jumlah Transaksi : <?php echo count($trans) ?>  Transaksi</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>PAKET</b></p>
			<p>Jumlah Paket : <?php echo count($pakets) ?> Paket</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>USER</b></p>
			<p>Jumlah User : <?php echo count($user) ?> User</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>KARYAWAN</b></p>
			<p>Jumlah Karyawan : <?php echo count($karyawan) ?> Karyawan</p>
		</div>
	</div>
</div>