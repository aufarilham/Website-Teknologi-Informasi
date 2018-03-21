<!DOCTYPE html>
<html>
<head>
	<title >Membuat Login Dengan CodeIgniter</title>
	<style type="text/css">
    .login {
        margin: 250px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        color: #fff;
        background: black;
        cursor: pointer;
    }
    </style>
</head>
<body style="background-color: black">

	<div class="login">
		<h1 style="text-align: center;">Login Admin</h1>
			<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
				<table style="text-align: center;">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Login"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>

 <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
 <link href="<?php echo base_url()?>assets/css/agency.min.css" rel="stylesheet">


	<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/agency.min.js"></script>
    <script src="assets/js/popup.js"></script>