<h1>TAMBAH PAKET PROMO</h1>
<hr>
<?php if (validation_errors()): ?>
	<div class="alert alert-danger">
		<?php echo validation_errors() ?>
	</div>
<?php endif ?>
<form action="<?php echo base_url('AdminController/do_paket') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama Paket Promo</label>
		<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>">
	</div>
	<div class="form-group">
		<label>Masukan Keterangan Paket Promo</label>
		<textarea name="ket" class="form-control"><?php echo set_value('ket') ?></textarea>
	</div>
	<input type="submit" name="simpan" class="btn btn-info" value="SIMPAN">
</form>