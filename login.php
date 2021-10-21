<?php
session_start();
require 'database.php';

// Redirect User When Already Login

if( isset($_POST["login"]) ){
		$username = $_REQUEST['username'];
        $password = $_REQUEST['pass'];
		
		// Check user is exist in the database
		$query    = "SELECT * FROM `users` WHERE username='$username' AND pass='" . md5($password) . "'";
	    $result = mysqli_query($con, $query);
	    $rows = mysqli_num_rows($result);

		if($rows > 0){
 
			$data = mysqli_fetch_assoc($result);
		 
			// cek jika user login sebagai admin
			if($data['level']=="admin"){
		 
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "admin";
				// alihkan ke halaman dashboard admin
				header("location:admin.php");
		 
			// cek jika user login sebagai wibu
			}else if($data['level']=="wibu"){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "wibu";
				// alihkan ke halaman dashboard wibu
				header("location:wibu.php");
		 
			// cek jika user login sebagai kpop
			}else if($data['level']=="super"){
				// buat session login dan username
				$_SESSION['username'] = $username;
				$_SESSION['level'] = "super";
				// alihkan ke halaman dashboard kpop
				header("location:jawaban.php");
			}
		}
		else {
			echo "
			<script>
			alert('Username or Password is incorrect');
			</script>";
		}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Modul 3 - TP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/img-07.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<!-- <p>Cari apa hayoooo kemari ??, 
           awas yak coba" nakal </p> -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/Untitled-1.jpg);">
					<span class="login100-form-title-1">
						Security Laboratory
					</span>
				</div>
				<!-- <p>Besok main yuk, tapi sayang lagi pandemi gini hiks </p> -->
				<form class="login100-form validate-form" method="post" action="">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>