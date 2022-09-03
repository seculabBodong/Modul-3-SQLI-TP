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
    <title>Selamat !!!</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/img-07.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
       footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            
       }
       header{
        margin-top: 20px
       }
      
       *{
        font-family: sans-serif;
       }
    </style>
</head>

<center>
    <header>
        <h2>Selamat Kamu Telah Berhasil</h2> <br>
    </header>
    <main>
        <div class="container">
        
            <div class="alert alert-success">
                <strong>Berhasil Berhasil Berhasil Horee, we did it !!</strong>
            </div>
            <br>
            <img src="images/sasundin.jfif" style="width:50%">
            <br><br>
            <h4> Screenshot Full Layar Mu hingga Memperlihatkan Jam Sebagai Bukti Kamu Telah Berhasil Hore</h4>
            
    </main>
    <footer><marquee behavior="alternate"><h3>Ho'oh Tenan</h3></marquee></footer>
        
</center>

</html>