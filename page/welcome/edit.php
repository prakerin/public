<!-- autentikasi -->
<?php 
include("../../proses/cek.php");
require('../../proses/fungsi.php');
 ?>

<html>
<head>
	<title>E-nvent | <?php echo $_SESSION['nama'];  ?> </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

	<!-- Tambahan -->
	<link rel="stylesheet" type="text/css" href="../../css/tambahan.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../../js/bootstrap.min.js"></script>
</head>
<body style="background:<?php background(); ?>;">
<div class="navbar">
      <center><img src='../../img/logo.png' height='60px'><a href="#help" id="login_pop"><span class='glyphicon glyphicon-question-sign'></span></a></center>
</div>
 <a href="#x" class="overlay" id="help"></a>
        <div class="popup">
            <form class="sign-up" style='width:700px;'>
   		 	<h1 class="sign-up-title" style='color:#F0776C;'>Help</h1>
    		<table border='0' width='100%'>
    			<tr>
    				<td>
    					<center><h2 style='color:#333;'>Icon</h2></center>
    				</td>
    				<td>
    					<center><h2 style='color:#333;'>Fungsi</h2></center>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<center><img src='../../img/pinjam-hover.png' width='100'></center>
    				</td>
    				<td>
    					<center><h3 style='color:#333;'>Meminjam Barang</h3></center>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<br><center><img src='../../img/ngembaliin-hover.png' width='100'></center>
    				</td>
    				<td>
    					<center><h3 style='color:#333;'>Mengembalikan Barang</h3></center>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<br><center><img src='../../img/arus-hover.png' width='100'></center>
    				</td>
    				<td>
    					<center><h3 style='color:#333;'>Aktifitas Peminjaman Barang</h3></center>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<br><center><img src='../../img/profil-hover.png' width='100'></center>
    				</td>
    				<td>
    					<center><h3 style='color:#333;'>Info Profil</h3></center>
    				</td>
    			</tr>    			
    		</table>
  		</form>
        </div>
<div class='container'>
	<div class='col-md-10 col-md-offset-1' style='padding:0;background:white;box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.3);'>
		<div class='col-md-2' style='padding:0;'><img src="<?php echo $_SESSION['foto']; ?>" height='200' width='158'></div>
		<div class='col-md-6' style='background:#2F74A3;'><h1 style='color:white;text-transform:capitalize;'><center>  <?php echo $_SESSION['nama']; ?>  </h1></center><br></div>
		<div class='col-md-4' style='background:#266997;'><h1 style="color:white;text-transform:capitalize;"><center>  <?php echo $_SESSION['kelas']; ?>  </center></h1><br></div>
		<a href="pinjam.php"><div class='col-md-2' style='padding:0;'>
			<div class='pinjam'>
			</div>
		</div>
		</a>
		<a href="kembali.php"><div class='col-md-2' style='padding:0;'>
				<div class='kembali'>
				</div>
		</div>
		</a>
		<a href="index.php"><div class='col-md-2' style='padding:0;'>
				<div class='traffic'>
				</div>
		</div>
		</a>
		<a href="profil.php"><div class='col-md-2' style='padding:0;'>
				<div class='profil'>
				</div>
		</div>
		</a>
		<a href="../../proses/logout.php"><div class='col-md-2' style='padding:0;'>
				<div class='logout'>
				</div>
		</div>
		</a>

		<div class='col-md-12'>
			<center><h1>Edit Profil</h1></center>
			<hr style='width:100px;border:1px solid #d4d4d4;'>
			<div class='col-md-12'>
			<h3 style='color:#333;'> Informasi Umum</h3>
			<hr style='width:200px;border:1px solid #d4d4d4;margin-top:-2px;' class='pull-left'>
			<table width='100%'>
				<form action='' method='post'>
				<tr>
					<td width='10%'>
						Nama
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
          			<input type="text" name="nama" class="form-control" value="<?php echo $_SESSION['nama'];?>">
					</div>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td width='10%'>
						Kelas
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
          			<input type="text" name="kelas" class="form-control" value="<?php echo $_SESSION['kelas'];?>">
          			</div>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td width='10%'>
						Alamat
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
          			<input type="text" name="kelas" class="form-control" placeholder='Alamat' value="<?php alamat(); ?>">
          			</div>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td width='10%'>
						No. Telepon
					</td>
					<td>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">+62</span>
					  <input type="text" class="form-control" placeholder="Nomor Telepon" value='<?php nomorhp(); ?>' aria-describedby="basic-addon1">
					</div>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td></td>
					<td> <button type='submit' name="submit" class='btn pull-right' style='background:#1BBC9B;color:white;'>Edit</button></td>
				</tr>
				</form>
			</table>
			<br>
			<h3 style='color:#333;'>Keamanan</h3>
			<hr style='width:200px;border:1px solid #d4d4d4;margin-top:-2px;' class='pull-left'>
			<table width='100%'>
				<form action='' method='post'>
				<tr>
					<td width='10%'>
						Username
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
          			<input type="text" name="nama" class="form-control" value="<?php username();?>">
					</div>
					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td width='10%'>
						Password
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
          			<input type="text" name="nama" class="form-control" value="<?php password();?>">
					</div>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td></td>
					<td> <button type='submit' name="submit" class='btn pull-right' style='background:#1BBC9B;color:white;'>Edit</button></td>
				</tr>
				</form>
			</table>
			<br>
			<h3 style='color:#333;'>Design</h3>
			<hr style='width:200px;border:1px solid #d4d4d4;margin-top:-2px;' class='pull-left'>
			<table width='100%'>
				<form action='' method='post'>
				<tr>
					<td width='10%'>
						Background
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
					<span class="input-group-addon" id="basic-addon1">#</span>
					<input type="text" class="form-control" placeholder="Background" value='<?php backgroundedit(); ?>' aria-describedby="basic-addon1">
					</div>
					</td>
				</tr>
				<tr>
					<td>
						<br>
					</td>
				</tr>
				<tr>
					<td width='10%'>
						Photo
					</td>
					<td>
					<div class="input-group" style='width:100%;'>
          			<input type="file" class='btn' style='margin:0;padding:0;' name="Filegambar" id="Filegambar">
					</div>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td></td>
					<td> <button type='submit' name="submit" class='btn pull-right' style='background:#1BBC9B;color:white;'>Edit</button></td>
				</tr>
				</form>
			</table>
			</div>
			<center><img src="../../img/thumb-footer.png" height='50' style='margin-top:50px;'>
			<h5 style='color:#333;'>Made with love by Cowoteam</h5>
			</center>
		</div>
</body>
</html> 	