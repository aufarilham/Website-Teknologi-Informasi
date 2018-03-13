<?php
   session_start(); //mulai session, krena kita akan menggunakan session pd file php ini
   include 'config.php'; //hubungkan dengan config.php untuk berhubungan dengan database

   $email=$_POST['email']; //tangkap data yg di input dari form login input username
   $password=$_POST['password']; //tangkap data yg di input dari form login input password

   $query=mysqli_query("select * from admin where email='$Email' and password='$Password'"); //melakukan pengampilan data dari database untuk di cocokkan
   $xxx=mysqli_num_rows($query); //melakukan pencocokan

   if($xxx==TRUE){ // melakukan pemeriksaan kecocokan dengan percabangan.
      $_SESSION['email']=$email; //jika cocok, buat session dengan nama sesuai dengan username
      header("location:home.php"); // dan alihkan ke index.php
   }else{ //jika tidak tampilkan pesan gagal login
      echo "<script> alert('Email atau Password Salah'); location = 'login.php'; </script>";
   }
?>