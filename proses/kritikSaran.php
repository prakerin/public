<?php 
include("connectdb.php");
session_start();
?>

<?php

if(!empty($_POST['name'] && $_POST['kritik']))
{

$name = $_POST['name'];
$kritikSaran = $_POST['kritik'];


$tambah = "INSERT INTO kritik(nama,kritikSaran) VALUES( '".$name."' , '".$kritikSaran."' )";
mysql_query($tambah) or die( mysql_error());


		if($tambah)
			{
				header('location:../index.php?kritik=1');	
			}


}

else
{
	header('location:../index.php?kritik=2#comment_form');
}

 ?>