<?php 
include('connectdb.php');




$id_brg = $_GET['id'];
$tampil = mysql_query("SELECT * FROM barang WHERE BARANG_ID='".$id_brg."' ");
$data = mysql_fetch_array($tampil);
$awal = $data['JUMLAH'];



if($awal > 0)
{

$akhir = $awal - 1;



	//$sql = "DELETE FROM barang WHERE BARANG_ID='".$id_brg."' ";
	//$delete = mysql_query($sql);

	$sql = "UPDATE barang SET JUMLAH='".$akhir."' WHERE BARANG_ID='".$id_brg."' ";
	$delete = mysql_query($sql);
		if($delete)
		{
			header('location:../page/admin/index.php?delete=1');

		}
		else
		{
			echo "gagal";
		}

}

else {

	$sql = "DELETE FROM barang WHERE BARANG_ID='".$id_brg."' ";
	$delete = mysql_query($sql);
	if($delete){
	header('location:../page/admin/index.php?delete=2');
	}

}

 ?>
