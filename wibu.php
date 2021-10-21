<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php");
	} 
?>

<html>
<html lang="en">

<head>
    <title>Wibu - Panel</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/img-07.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<center>
    <br><br>
    <div class="container">
        <h2>Selamat Datang Weebs</h2>
        <br>
        <center>
            <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai
                <b><?php echo $_SESSION['level']; ?></b>.</p>

            <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/g3jCAyPai2Y?autplay=1"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>

            <br><br>

            <h3>HTMLnya keren juga ya</h3>

            <!-- <a href="pencarian.php">Mencurigakan</a> -->
            <br>

            <a href="logout.php" class="btn btn-primary" style="margin-top:40px">Logout</a>
        </center>

</html>