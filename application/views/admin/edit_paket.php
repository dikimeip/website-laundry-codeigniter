<h1>TAMBAH PAKET PROMO</h1>
<hr>
<form action="<?php echo base_url('AdminController/do_edit_paket') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama Paket Promo</label>
		<input type="hidden" name="id" class="form-control" value="<?php echo $paket['id_paket'] ?>">
		<input type="text" name="nama" class="form-control" value="<?php echo $paket['nama_paket'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Keterangan Paket Promo</label>
		<textarea name="ket" class="form-control"><?php echo $paket['keterangan_paket'] ?></textarea>
	</div>
	<div class="form-group">
		<label>STATUS PAKET</label>
		<select name="status" class="form-control">
			<option><?php echo $paket['active_paket'] ?></option>
			<option>Active</option>
			<option>Expired</option>
		</select>
	</div>
	<input type="submit" name="simpan" class="btn btn-info" value="SIMPAN">
</form>