<h1>DATA KARYAWAN</h1>
<div class="row">
	<div class="col-md-8">
		<a href="<?php echo base_url('AdminController/tambah_karyawan') ?>" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form action="<?php echo base_url('AdminController/search_karyawan') ?>" method="post">
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama">
			</div>
		</form>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
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
			<td>
				<img style="width: 50px" src="<?php echo base_url('asset/foto/'.$k['foto_karyawan']) ?>">
			</td>
			<td>
				<a href="<?php echo base_url() ?>AdminController/edit_karyawan/<?php echo $k['id_karyawan'] ?>" class="btn btn-info btn-sm">EDIT</a>
				<a onclick="return confirm('Hapus data..?')" href="<?php echo base_url() ?>AdminController/hapus_karyawan/<?php echo $k['id_karyawan'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>