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
    <link rel="stylesheet" href="css/wibu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<center>
    <header>
        <h2>Selamat Datang Weebs</h2>
       
        <nav>
        <div id="warna">
                <label>Warna latar: </label>
                <input type="color" id="bg-color"/>
            </div>
          
        </nav>
    </header>
        <main>
            <article>
                <div class="container">
                    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai
                        <b><?php echo $_SESSION['level']; ?></b>.</p>
        
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lT6HWOqKDiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <button onclick="alert('kira - kira ada yang aneh ga sih ?')" class="tombol">klik aku</button>
                    <br><br>
        
                    <h3>Selamat kamu jadi anggota watashi </h3>
            </article>
       

            <!-- <a href="pencarian.php">Mencurigakan</a> -->

            <a href="logout.php" class="btn btn-primary" style="margin-top:40px">Logout</a>
        </main>
        <footer>&#169; 2022 Seculab</footer>
        <script src="js/warna.js"></script>
<center>

</html>