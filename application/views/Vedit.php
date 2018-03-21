<!DOCTYPE html>
<html>
<head>
	<title>Data Pesan Teknologi Informasi</title>
</head>
<body>
	<center>
		<h1>Edit Pesan | Admin</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><input type="text" name="isi" value="<?php echo $u->isi ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>