<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	 <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="col-md-4"></div>
<div class="col-md-4">
	<h2>LOGIN AKUN</h2>
	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			<form action="" method="post">
				<div class="form-group">
					<label>MASUKAN USERNAME ATAU EMAIL</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>MASUKAN PASSWORD</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<select class="form-control">
						<option>KARYAWAN</option>
						<option>OWNER</option>
					</select>
				</div>
				<input type="submit" name="simpan" value="REGISTER" class="btn btn-info" >
			</form>
		</div>
	</div>
</div>


</body>
</html>