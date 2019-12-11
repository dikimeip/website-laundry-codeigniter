<h1>EDIT TRANSAKSI</h1>
<form action="<?php echo base_url('UserController/do_tambahtrans') ?>" method="post">
	<div class="form-group">
		<label>Masukan Nama Pelanggan</label>
		<input type="hidden" name="id" value="<?php echo $trans['id_transaksi'] ?>">
		<input type="text" name="pelanggan" class="form-control" disabled="" value="<?php echo $trans['nama_user'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Nama Paket</label>
		<input type="text" name="pelanggan" class="form-control" disabled="" value="<?php echo $trans['nama_paket'] ?>">
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<select name="ket" class="form-control">
			<option><?php echo $trans['keterangan_transaksi'] ?></option>
			<option>BELUM BAYAR</option>
			<option>BAYAR</option>
		</select>
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control">
			<option><?php echo $trans['status_transaksi'] ?></option>
			<option>PROSES</option>
			<option>SELESAI</option>
			<option>DIAMBIL</option>
			<option>BATAL</option>
		</select>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>