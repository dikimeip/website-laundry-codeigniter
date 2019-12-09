<h1>TAMBAH PELANGGAN LAUNDRY</h1>
<br>
<?php if (validation_errors()): ?>
	<div class="alert alert-danger">
		<?php echo validation_errors() ?>
	</div>
<?php endif ?>
<form action="<?php echo base_url('UserController/do_post_user') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama User</label>
		<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Alamt User</label>
		<textarea class="form-control" name="alamat"><?php echo set_value('alamat') ?></textarea>
	</div>
	<div class="form-group">
		<label>Masukan No Hp User</label>
		<input type="text" name="hp" class="form-control" value="<?php echo set_value('hp') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Email User</label>
		<input type="text" name="email" class="form-control" value="<?php echo set_value('email') ?>">
	</div>
	<input type="submit" name="submit" value="SIMPAN" class="btn btn-info">
</form>