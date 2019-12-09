<h1>USER LAUNDRY</h1>
<hr>
<div class="row">
	<div class="col-md-8">
		<a href=" <?php echo base_url('UserController/post_user') ?> " class="btn btn-info">TAMBAH</a>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama User">
			</div>
		</form>
	</div>
</div>
<br>
<table class="table table-hover">
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>NO HP</th>
		<th>EMAIL</th>
		<th>KET</th>
		<th>AKSI</th>
	</tr>
	<?php foreach($user as $u) : ?>
		<tr>
			<th><?php echo $no++ ?></th>
			<td><?php echo $u['nama_user'] ?></td>
			<td><?php echo $u['alamat_user'] ?></td>
			<td><?php echo $u['hp_user'] ?></td>
			<td><?php echo $u['email_user'] ?></td>
			<td><?php echo $u['ket_user'] ?></td>
			<td><a href="" class="btn btn-success btn-sm">EDIT</a></td>
		</tr>
	<?php endforeach ?>
</table>