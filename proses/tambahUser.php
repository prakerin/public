<?php 
include("connectdb.php");
 ?>

 <?php 

if(!empty($_POST['name'] && $_POST['jenis-kelamin'] )){

$username = $_POST['username'];
$password = $_POST['password'];
$tipe = 'siswa';
$name = $_POST['name'];
$kelas = $_POST['kelas'];
$jk = $_POST['jenis-kelamin'];


$tambah = mysql_query("INSERT INTO user(USERNAME,PASSWORD,tipe,NAMA,KELAS,JENIS_KELAMIN,FOTO) VALUES( '".$username."', '".$password."', '".$tipe."', '".$name."', '".$kelas."', '".$jk."' , '../profil/img/default.png')");
	
	if($tambah){
		header('location:../page/admin/user.php?tambah=1');
}

else{
  header('location:../page/admin/user.php?tambah=2');
}

}

?>