<?php
   session_start();
   
   include "config.php";

   if(!isset($_SESSION['email'])){
      header("location:login.php");
      exit();
   }

   if(isset($_SESSION['email'])){
      $email = $_SESSION['email'];
   }
?>

<html>
<head>
   <title>Home</title>
</head>

<body>
   Welcome, <?php echo $_SESSION['email']; echo "  "?><br>
   <a href="logout.php">Logout</a>
</body>
</html>