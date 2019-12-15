<h1>ADMIN DASBOARD <?php echo date('Y-m-d') ?> </h1>
<br><hr>
<div class="row">
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>TRANSAKSI</b></p>
			<p>Jumlah Produk : <?php echo count($trans) ?>  Barang</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>PAKET</b></p>
			<p>Jumlah Produk : <?php echo count($pakets) ?> Barang</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>USER</b></p>
			<p>Jumlah Produk : <?php echo count($user) ?> Barang</p>
		</div>
	</div>
	<div class="col-md-4">
		<div class="alert alert-info">
			<p class="text-center"><b>KARYAWAN</b></p>
			<p>Jumlah Produk : <?php echo count($karyawan) ?> Barang</p>
		</div>
	</div>
</div>