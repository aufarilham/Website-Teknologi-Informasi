<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['nama'];
	$email=$_POST['email'];
	$subjek=$_POST['subjek'];
	$isi=$_POST['isi'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pesan SET nama='$name',email='$email',subjek='$subjek',isi='$isi' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: halamanadmin.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['nama'];
	$email = $user_data['email'];
	$subjek = $user_data['subjek'];
	$isi = $user_data['isi'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="halamanadmin.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Subjek</td>
				<td><input type="text" name="subjek" value=<?php echo $subjek;?>></td>
			</tr>
			<tr> 
				<td>Isi</td>
				<td><input type="text" name="isi" value=<?php echo $isi;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>