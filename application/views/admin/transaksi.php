<h1>HALAMAN TRANSAKSI</h1>
<div class="row">
	<div class="col-md-8">
		<a href="" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Tanggal Transaksi">
			</div>
		</form>
	</div>
</div>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>USER</th>
		<th>BERAT LAUNDRY</th>
		<th>TOTAL</th>
		<th>TANGGAL</th>
		<th>KET</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($trans as $t): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $t['nama_user'] ?></td>
			<td><?php echo $t['berat_transaksi'] ?></td>
			<td><?php echo number_format($t['harga_total']) ?></td>
			<td><?php echo $t['tanggal_masuk_transaksi'] ?></td>
			<td><?php echo $t['keterangan_transaksi'] ?></td>
			<td>
				<a href="<?php echo base_url() ?>UserController/show_trans/<?php echo $t['id_transaksi'] ?>" class="btn btn-info btn-sm">DETAIL</a>
				<a href="" class="btn btn-warning btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>