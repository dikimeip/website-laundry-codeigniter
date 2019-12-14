<h1>EDIT KARYAWAN</h1>
<form action="<?php echo base_url('AdminController/do_tambahkaryawan') ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>MASUKAN NAMA</label>
		<input type="text" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $kary['nama_karyawan'] ?>">
	</div>
	<div class="form-group">
		<label>MASUKAN USERNAME</label>
		<input type="text" name="uname" placeholder="Masukan Username" class="form-control" value="<?php echo $kary['username_karyawan'] ?>">
	</div>
	<div class="form-group">
		<label>MASUKAN ALAMAT</label>
		<input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control" value="<?php echo $kary['alamat_karyawan'] ?>">
	</div>
	<div class="form-group">
		<label>MASUKAN JABATAN</label>
		<select name="jabatan" class="form-control">
			<option><?php echo $kary['jabatan_karyawan'] ?></option>
			<option>KARYAWAN</option>
			<option>ADMIN</option>
			<option>KEPALA BAGIAN</option>
			<option>KEPALA CABANG</option>
		</select>
	</div>
	<div class="form-group">
		<label>MASUKAN FOTO</label><br>
		<img style="width: 50px" src="<?php echo base_url('asset/foto/'.$kary['foto_karyawan']) ?>">
		<input type="file" name="foto" placeholder="Masukan Nama" class="form-control" required="">
	</div>
	<input type="submit" value="SIMPAN" class="btn btn-info">
</form>