<h1>HALAMAN PAKET LAUNDRY</h1>
<hr>
<div class="row">
	<div class="col-md-8">
		<a href="<?php echo base_url('AdminController/TambahPaket') ?>" class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Paket">
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
		<th>NO</th>
		<th>NAMA</th>
		<th>TANGGAL</th>
		<th>KET</th>
		<th>STATUS</th>
		<th>AKSI</th>
	</tr>
	<?php foreach($pakets as $paket) : ?>
		<tr>
			<th><?php echo $no++ ?></th>
			<td><?php echo $paket['nama_paket'] ?></td>
			<td><?php echo $paket['tanggal_paket'] ?></td>
			<td><?php echo $paket['keterangan_paket'] ?></td>
			<td><?php echo $paket['active_paket'] ?></td>
			<td>
				<a href="<?php echo base_url() ?>AdminController/edit_paket/<?php echo $paket['id_paket'] ?>" class="btn btn-success btn-sm">EDIT</a>
				<a onclick="return confirm('Yakin Akan Dihapus..??') " href="<?php echo base_url() ?>AdminController/delete_paket/<?php echo $paket['id_paket'] ?>" class="btn btn-warning btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>