<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$isi=$_POST['isi'];

$to='senjadijakarta@gmail.com';

$message="From:$name <br />".$isi;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From : ".$email."\r\n" . 'Reply-To: '.$nama.' <'.$email.'>'."\r\n";
$headers .= "Cc: ".$email. "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
header('Location: http://www.teknologiinformasi.ga/');
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "<script>alert('Pesan berhasi terkirim !!!') ;window.location='index.php'</script>";
//header('Location: http://www.teknologiinformasi.ga/');
}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webtik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$nama=$_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$isi=$_POST['isi'];


$sql = "INSERT INTO pesan (Nama, Email, Subjek, Isi)
VALUES ('".$nama."', '".$email."', '".$subjek."', '".$isi."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>