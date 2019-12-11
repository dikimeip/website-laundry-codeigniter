<h1>TAMBAH TRANSAKSI LAUNDRY</h1>
<div class="row">
	<div class="col-md-6">
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
			<input type="submit" value="SIMPAN" class="btn btn-info">
		</form>
	</div>
	<div class="col-md-6">
		<b>DAFTAR PAKET</b>
		<hr>
		<?php foreach ($paket as $pt): ?>
			<b><?php echo $pt['nama_paket'] ?></b><br>
			<b><?php echo $pt['keterangan_paket'] ?></b><br>
			<b><?php echo $pt['harga_paket'] ?></b><hr>
		<?php endforeach ?>
	</div>
</div>
<br>
<div class="alert alert-info">
	<p><b>SILAHKAN BACA SK PAKET YANG BERLAKU</b></p>
</div>
