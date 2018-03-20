<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Subjek</td>
				<td><input type="text" name="subjek"></td>
			</tr>
			<tr> 
				<td>Isi</td>
				<td><input type="text" name="isi"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['nama'];
		$email = $_POST['email'];
		$subjek = $_POST['subjek'];
		$isi = $_POST['isi'];

		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO pesan(nama,email,subjek,isi) VALUES('$name','$email','$subjek','$isi')");
		
		// Show message when user added
		echo "User added successfully. <a href='halamanadmin.php'>View Users</a>";
	}
	?>
</body>
</html>