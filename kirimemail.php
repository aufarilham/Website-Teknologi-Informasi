<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='senjadijakarta@gmail.com';

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From : ".$email."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= "Cc: ".$email. "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
header('Location: http://www.teknologiinformasi.ga/');
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "<script>alert('Pesan berhasi terkirim !!!') ;window.location='index.php'</script>";
header('Location: http://www.teknologiinformasi.ga/');
}
?>