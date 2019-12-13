<h1>DAFTAR PELANGGAN</h1>
<div class="row">
	<div class="col-md-8">
		<a href="" class="btn btn-info">CETAK</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Pelanggan">
			</div>
		</form>
	</div>
</div>
<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<p><?php echo $this->session->flashdata('success') ?></p>
	</div>
<?php endif ?>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>NO HP</th>
		<th>AKSI</th>
	</tr>
	<?php foreach($user as $u) : ?>
		<tr>
			<th><?php echo $no++ ?></th>
			<td><?php echo $u['nama_user'] ?></td>
			<td><?php echo $u['alamat_user'] ?></td>
			<td><?php echo $u['hp_user'] ?></td>
			<td>
				<a href="<?php echo base_url() ?>UserController/edit_user/<?php echo $u['id_user'] ?>" class="btn btn-info btn-sm">DETAIL</a>
				<a href="<?php echo base_url() ?>UserController/edit_user/<?php echo $u['id_user'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>