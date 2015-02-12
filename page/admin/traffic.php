<?php 
require '../../proses/fungsi.php';
 ?>

<html>
<head>
	<title>Inven</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

	<!-- Tambahan -->
	<link rel="stylesheet" type="text/css" href="../../css/tambahan.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/jquery-1.3.2.min.js"></script>
  <script src="../../js/jquery-1.11.0.min.js"></script>
  <script src="../../js/bootstrap.min2.js"></script>
</head>
<body style='background:#C0C6C2;'>
  <div class='container' style='background:#F1F3FA;padding:0;box-shadow: 0 5px 5px black;height:auto;'>
  <div class='navbar navbar-fixed-top'>
  <div class='container' style='padding:0;box-shadow: 0 5px 5px rgba(0,0,0,.09);'>
  <div class='col-md-2' style='background:#14B9D6;'>
    <center><img src="../../img/logo.png" style='max-height:80px;' class='img-responsive'></center>
  </div>
    <div class='col-md-10' style='padding:10px;background:white;'>
      <div class='col-md-4'>
        <div class="input-group" style='margin-top:15px;'>
          <input type="text" class="form-control" placeholder="Search..." style='border:none;box-shadow:none;'>
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" style='background:transparent;border:none;box-shadow:none;'><p class='glyphicon glyphicon-search' style='color:grey;'></p></button>
          </span>
        </div>
      </div>
      <div class='col-md-3 pull-right'>
        <img src='../profil/img/profil.jpg' height='60' width='60' style='border-radius:50%;' class='pull-left col-md-offset-2'>
        <div class="dropdown" style='margin-top:10px;'>
        <button class="btn dropdown-toggle" style='background:transparent;' type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        <p style='color:grey;font-size:16px;'> <?php name(); ?> <span class="caret"></span></p>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="setting.php">Pengaturan</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="../../proses/logout.php">Logout</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br>
<div class='container' style='padding:0;'>
  <div class='col-md-2' style='height:1000px;background:#4D5B69;padding:0;'>
    <a href="index.php"><div class='col-md-12 lain' style='border-bottom:1px solid grey;'>
      <center><h2 class='glyphicon glyphicon-home' style='color:#15c1df;'></h2>
      <h4> Dashboard </h4>
      </center>
    </div>
    </a>
    <a href="statistic.php"><div class='col-md-12 lain' style='border-bottom:1px solid grey;'>
      <center><h2 class='glyphicon glyphicon-retweet' style='color:#15c1df;'></h2>
      <h4> Statistic </h4>
      </center>
    </div>
    </a>
    <a href="traffic.php"><div class='col-md-12 active' style='border-bottom:1px solid grey;'>
      <center><h2 class='glyphicon glyphicon-transfer' style='color:#15c1df;'></h2>
      <h4> Traffic </h4>
      </center>
    </div>
    </a>
    <a href="user.php"><div class='col-md-12 lain' style='border-bottom:1px solid grey;'>
      <center><h2 class='glyphicon glyphicon-user' style='color:#15c1df;'></h2>
      <h4> User Panel </h4>
      </center>
    </div>
    </a>
    <a href="setting.php"><div class='col-md-12 lain' style='height:100px;border-bottom:1px solid grey;'>
      <center><h2 class='glyphicon glyphicon-cog' style='color:#15c1df;'></h2>
      <h4> Setting </h4>
      </center>
    </div>
    </a>
  </div>
  <div class='col-md-10'>
    <h2 style='color:grey;'>Traffic peminjaman</h2>
    <ol class="breadcrumb" style='background:white;'>
      <li><i class='glyphicon glyphicon-transfer'> </i><a href='#'> &nbsp;E-nvent </a> </li> 
      <li class='active'> Traffic</li>
    </ol>
    <div class='col-md-4'>
      <div class='komen'>
        <h1 class='text-right' style='margin:0;padding-top:25px;margin-right:20px;color:white;'><?php comment(); ?> </h1>
        <h3 class='pull-right' style='margin:0;margin-right:20px;'> New Comment </h3>
      </div>
    </div>
    <div class='col-md-4'>
      <div class='riwayat'>
        <h1 class='text-right' style='margin:0;padding-top:25px;margin-right:20px;color:white;'><?php banyak_peminjaman(); ?> </h1>
        <h3 class='pull-right' style='margin:0;margin-right:20px;'> Peminjaman Barang </h3>
      </div>
    </div>
    <div class='col-md-4'>
      <div class='barang'>
        <h1 class='text-right' style='margin:0;padding-top:25px;margin-right:20px;color:white;'><?php item(); ?> </h1>
        <h3 class='pull-right' style='margin:0;margin-right:20px;'> Item </h3>
      </div>
    </div>
  <hr style='width:500px;border:1px solid #d4d4d4;margin-top:200px;'>
  <h2 class='text-center' style='color:grey;'> Riwayat Peminjaman </h2>
  <hr style='width:50px;border:1px solid #d4d4d4;'>
  <br>
  <div class='col-md-12' style='max-height:550px;overflow:auto;'>
  

      <!-- Riwayat Peminjaman -->
  
  

    <!-- end of riwayat peminjaman -->

  </div>
  </div>
</div>
</div>
<center><img src="../../img/thumb.png" height='50' style='margin-top:50px;'>
      <h5 style='color:#333;'>Made with love by Cowoteam</h5>
      </center>
</body>
</html>