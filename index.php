<?php 
session_start();
if(!empty($_SESSION['name']))
{
    header("location:page/welcome");
}
    ?>

<!-- Fungsi -->
<?php 
require('proses/fungsi.php');
 ?>


       <!-- Kritik ! -->

<?php 

  if(!empty($_GET['kritik']))
  {

    if($_GET['kritik'] == 1)
      {
        echo  " <script language=\"JavaScript\">";
        echo  "  window.alert('Kritik anda berhasil dikirim! Terimakasih ;)')";
        echo  "  </script>";
      }
    else
      {
        echo  " <script language=\"JavaScript\">";
        echo  "  window.alert('Kritik dan saran gagal di kirim! coba isi kedua kolom!')";
        echo  "  </script>";
      }

  }


 ?>

<!-- end kritik -->



<html>
<head>
	<title>Inven</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<!-- Tambahan -->
	<link rel="stylesheet" type="text/css" href="css/tambahan.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</head>

<body style='background:#3333;'>
<div class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      	<img src='img/thumb.png' height='50px'>
      </a>
    </div>
  </div>
</div>

<div class="wide">
	<center><img src='img/logo.png' style='margin-top:50px;'>
		<h3 style='margin-top:-40px;'> Aplikasi Inventaris Sekolah </h3>
		<br>
		<h4> Kamu siswa smk4 ? mau minjem peralatan buat dikelas ? daftar disini </h4>
		<br>
		<div class="main">
            <div class="panel">
			<a href="#login_form" id="login_pop" type="button" class="btn btn-large" style='border:1px solid white;width:250px;height:50px;'><h4>Masuk</h4></a>	
            </div>
        </div>

        <!-- popup form #2 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            
        <form method= "post" class="sign-up">
        <h1 class="sign-up-title" style='color:#F0776C;'>Login</h1>
        <input type="text" name="name" class="sign-up-input" placeholder="Username">
        <input type="password" name="password" class="sign-up-input" placeholder="Password">
        <input type="submit" name="submit" value="Login!" class="sign-up-button">
        <?php include("proses/login.php"); ?>
      
      </form>


        </div>
            <a class="close" href="#close"></a>
        </div>
	</center>
</div>
<div id='page2'>
<div class='container'>
	<br><br>

	<center><h1>Apa sih <img src='img/logo.png' height="10%">?</h1>
	<hr style='width:100px;border:1px solid white;margin-top:-20px;'>
	<h4><i>"<img src='img/logo.png' height="10%"> adalah aplikasi web yang bertujuan untuk mendata traffic peminjaman barang-barang milik sekolah yang dipinjam siswa untuk kebutuhan dikelasnya"</i></h4>
	</center>
	<br><br>
	<center><h1><img src='img/logo.png' height="10%"> buat siapa ?</h1>
	<hr style='width:100px;border:1px solid white;margin-top:-20px;'>
	<h4><img src='img/logo.png' height="10%"> diperuntukan untuk siswa smk4</h4>
	</center>
	<br>
	<center><h1>Kritik & saran buat <img src='img/logo.png' height="10%"></h1>
	<hr style='width:100px;border:1px solid white;margin-top:-20px;'>
	<h4>Tampilannya jelek ? sistemnya ancur ? kasih saran dong <a href="#comment_form" id="login_pop">Disini</a></h4>
	 <a href="#x" class="overlay" id="comment_form"></a>



        <div class="popup">
            <form class="sign-up" method="post" action="proses/kritikSaran.php">
   		 	<h1 class="sign-up-title" style='color:#F0776C;'>Kritik & Saran</h1>
        <input type="text" name="name" class="sign-up-input" placeholder="Nama">
    		<input type="text" name="kritik" class="sign-up-input" placeholder="Tulis Kritik & Saranmu">
    		<input type="submit" name="submit" value="Kirim" class="sign-up-button">
  		</form>
        </div>



        <br><br>
        <img src="img/arrow.png" height="80">
        <br><br>
	</center>
</div>
</div>
<?php
@include('proses.hitungBarang.php')
?>
<div id='page3'>
	<br><br>
	<center><h1>Live Statistic</h1>
	<hr style='width:100px;border:1px solid white;'>
	<div class='container'>
	<div class="col-md-4">
    <div style="height:50%; width:100%; background-color:#333; opacity:0.8;">
    	<br>
    	<img src="img/thumb.png" class='img-responsive'>
    	<img src="img/logo.png" height='150'>
    </div>
    </div>
    <div class='col-md-3' style='border:1px solid white;border-radius:10px;margin-left:10px;'>
   	<h1><?php jumlah(1); ?></h1>
    		<p>Laptop</p>
    </div>
    <div class='col-md-2' style='border:1px solid white;border-radius:10px;margin-left:10px;'>
   	<h1><?php jumlah(2); ?></h1>
    		<p>Infocus</p>
    </div>
    <div class='col-md-2' style='border:1px solid white;border-radius:10px;margin-left:10px;'>
   	<h1><?php jumlah(3); ?></h1>
    		<p>Speaker</p>
    </div>
    <div class='col-md-2' style='border:1px solid white;border-radius:10px;margin-left:10px;margin-top:10px;'>
   	<h1><?php jumlah(4); ?></h1>
    		<p>Handicam</p>
    </div>
    <div class='col-md-3' style='border:1px solid white;border-radius:10px;margin-left:10px;margin-top:10px;'>
   	<h1><?php jumlah(5); ?></h1>
    		<p>Pocket</p>
    </div>
    <div class='col-md-2' style='border:1px solid white;border-radius:10px;margin-left:10px;margin-top:10px;'>
   	<h1><?php jumlah(6); ?></h1>
    		<p>DLSR</p>
    </div>
    <div class='col-md-2' style='border:1px solid white;border-radius:10px;margin-left:10px;margin-top:10px;'>
   	<h1><?php jumlah(7); ?></h1>
    		<p>Movie Camera</p>
    </div>
    <div class='col-md-2' style='border:1px solid white;border-radius:10px;margin-left:10px;margin-top:10px;'>
   	<h1><?php jumlah(8); ?></h1>
    		<p>Gitar</p>
    </div>
    <div class='col-md-3' style='border:1px solid white;border-radius:10px;margin-left:10px;margin-top:10px;'>
   	<h1><?php jumlah(9); ?></h1>
    		<p>Jimbe</p>
    </div>
    <div class='col-md-7' style='margin-top:20px;'>
	<p>Syarat dan ketentuan berlaku <a href='#'><span class='glyphicon glyphicon-question-sign'></span></a></p> 
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h5> Made with love by Cowoteam </h5>
</div>
</body>
</html>