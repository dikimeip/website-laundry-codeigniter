<h1>TAMBAH TRANSAKSI LAUNDRY</h1>
<div class="row">
	<div class="col-md-6">
		<form action="<?php echo base_url('UserController/do_tambahtrans') ?>" method="post">
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
				<input type="number" name="berat" class="form-control">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<select name="ket" class="form-control">
					<option>BELUM BAYAR</option>
					<option>BAYAR</option>
				</select>
			</div>
			<input type="submit" value="SIMPAN" class="btn btn-info">
		</form>
	</div>
	<div class="col-md-6">
		<div class="alert alert-warning">
			<b>DAFTAR PAKET</b>
		<hr>
		<?php foreach ($paket as $pt): ?>
			<b><?php echo $pt['nama_paket'] ?></b><br>
			<b><?php echo $pt['keterangan_paket'] ?></b><br>
			<b><?php echo number_format($pt['harga_paket']) ?> Per Kilogram</b><hr>
		<?php endforeach ?>
		</div>
	</div>
</div>
<br>
<div class="alert alert-info">
	<p><b>SILAHKAN BACA SK PAKET YANG BERLAKU</b></p>
</div>
