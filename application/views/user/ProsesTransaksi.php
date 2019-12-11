<h1>TRASAKSI</h1>
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
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class="btn btn-danger btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>