<?php 
session_start();

if(empty($_SESSION['tipe'])){

	header("location:../../index.php");

}

 ?>
