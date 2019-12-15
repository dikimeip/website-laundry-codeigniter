<h1>TRANSAKSI</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<a href="<?php echo base_url('UserController/tambah_transaksi') ?>" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<hr>
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
				<a href="<?php echo base_url() ?>UserController/cetak_trans/<?php echo $t['id_transaksi'] ?>" class="btn btn-success btn-sm">CETAK</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>