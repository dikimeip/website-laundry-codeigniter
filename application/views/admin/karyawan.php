<h1>DATA KARYAWAN</h1>
<div class="row">
	<div class="col-md-8">
		<a href="" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama">
			</div>
		</form>
	</div>
</div>
<br>
<table class="table table-hover">
	<tr>
		<th>NAMA</th>
		<th>USERNAME</th>
		<th>ALAMAT</th>
		<th>JABATAN</th>
		<th>FOTO</th>
		<th>AKSI</th>
	</tr>
	<?php foreach ($karyawan as $k): ?>
		<tr>
			<td><?php echo $k['nama_karyawan'] ?></td>
			<td><?php echo $k['username_karyawan'] ?></td>
			<td><?php echo $k['alamat_karyawan'] ?></td>
			<td><?php echo $k['jabatan_karyawan'] ?></td>
			<td><?php echo $k['foto_karyawan'] ?></td>
			<td>
				<a href="" class="btn btn-info btn-sm">EDIT</a>
				<a href="" class="btn btn-danger btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>