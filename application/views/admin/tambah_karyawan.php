<h1>TAMBAH KARYAWAN</h1>
<br>
<?php if (validation_errors()): ?>
	<div class="alert alert-danger">
		<p><?php echo validation_errors() ?></p>
	</div>
<?php endif ?>
<form action="<?php echo base_url('AdminController/do_tambahkaryawan') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>MASUKAN NAMA</label>
		<input type="text" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo set_value('nama') ?>">
	</div>
	<div class="form-group">
		<label>MASUKAN USERNAME</label>
		<input type="text" name="uname" placeholder="Masukan Username" class="form-control" value="<?php echo set_value('uname') ?>">
	</div>
	<div class="form-group">
		<label>MASUKAN PASSWORD</label>
		<input type="password" name="pswd1" placeholder="Masukan Password" class="form-control">
	</div>
	<div class="form-group">
		<label>ULANGI PASWWORD</label>
		<input type="password" name="pswd2" placeholder="Ulangi password" class="form-control">
	</div>
	<div class="form-group">
		<label>MASUKAN ALAMAT</label>
		<input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control" value="<?php echo set_value('alamat') ?>">
	</div>
	<div class="form-group">
		<label>MASUKAN JABATAN</label>
		<select name="jabatan" class="form-control">
			<option>KARYAWAN</option>
			<option>ADMIN</option>
			<option>KEPALA BAGIAN</option>
			<option>KEPALA CABANG</option>
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN FOTO</label>
		<input type="file" name="foto" placeholder="Masukan Nama" class="form-control" required="">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>