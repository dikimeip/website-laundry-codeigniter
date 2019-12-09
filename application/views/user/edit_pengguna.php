<h1>EDIT PELANGGAN LAUNDRY</h1>
<br>
<form action="" method="post">
	<input type="hidden" name="nama" class="form-control" value="<?php echo $user['id_user'] ?>">
	<div class="form-group">
		<label>Masukan Nama User</label>
		<input required="" type="text" name="nama" class="form-control" value="<?php echo $user['nama_user'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Alamt User</label>
		<textarea required="" class="form-control" name="alamat"><?php echo $user['alamat_user'] ?></textarea>
	</div>
	<div class="form-group">
		<label>Masukan No Hp User</label>
		<input required="" type="text" name="hp" class="form-control" value="<?php echo $user['hp_user'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Email User</label>
		<input required="" type="text" name="email" class="form-control" value="<?php echo $user['email_user'] ?>">
	</div>
	<div class="form-group">
		<label>Masukan Ket User</label>
		<select name="ket" class="form-control">
			<option><?php echo $user['ket_user'] ?></option>
			<option>USER</option>
			<option>MEMBER</option>
		</select>
	</div>
	<input type="submit" name="submit" value="SIMPAN" class="btn btn-info">
</form>