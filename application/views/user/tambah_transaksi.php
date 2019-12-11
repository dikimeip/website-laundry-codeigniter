<h1>TAMBAH TRANSAKSI LAUNDRY</h1>
<form>
	<div class="form-group">
		<label>Masukan Nama Pelanggan</label>
		<select name="user" class="form-control">
			<?php foreach ($user as $u): ?>
				<option value="<?php echo $u['id_user'] ?>"><?php echo $u['nama_user'] ?></option>
			<?php endforeach ?>			
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Nama Paket</label>
		<select name="paket" class="form-control">
			<?php foreach ($paket as $pt): ?>
				<option value="<?php echo $pt['id_paket'] ?>"><?php echo $pt['nama_paket'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Masukan Berat Laundry</label>
		<input type="text" name="berat" class="form-control">
	</div>
	<div class="form-group">
		<label>Masukan Jenis Laundry</label>
		<select name="jenis" class="form-control">
			<option>CUCI BASAH</option>
			<option>CUCI KERING</option>
		</select>
	</div>
	<div class="alert alert-info">
		<p><b>SILAHKAN BACA SK PAKET YANG BERLAKU</b></p>
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>