<?php 
//session_start();
 ?>
 <?php 

include("connectdb.php");

if(isset($_POST['name']))
{
$username = $_POST['name'];
$password = $_POST['password'];

	$query = "SELECT *FROM user WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
	$see = mysql_query($query);
	$data = mysql_fetch_array($see);

//pengecekan data, apakah field sudah terisi benar dengan database atau belum.

			if(mysql_num_rows($see) != 0)
			{

					if($data['tipe'] == 'admin')
					{	
						$_SESSION['tipe']=$data['tipe'];
						$_SESSION['nama']=$data['NAMA'];
						$_SESSION['kelas']=$data['KELAS'];
						$_SESSION['foto']=$data['FOTO'];
						header("location:page/admin/index.php");

					}

					else if($data['tipe'] == 'siswa')
					{
						$_SESSION['tipe']=$data['tipe'];
						$_SESSION['nama']=$data['NAMA'];
						$_SESSION['kelas']=$data['KELAS'];
						$_SESSION['foto']=$data['FOTO'];
						header("location:page/welcome/index.php");
					}
													
			}
			else{

				echo "username atau password salah";
				session_destroy();
			}

}


  ?>