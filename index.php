<?php 

$email = 'senjadijakarta@gmail.com';
$subject = 'Aktivasi akun';
$pesan = ' selamat pesan anda berhasil diaktifkan';

if ( mail('email', 'subject', 'pesan') ) 
{
	echo 'email berhasil dikirim';
}
else 
{
	echo 'email gagal dikirim';
}

?>

