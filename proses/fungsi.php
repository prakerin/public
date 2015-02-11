<?php

include 'connectdb.php';


$tampil = mysql_query("SELECT *FROM jenis");
$banyak = mysql_num_rows($tampil);


	function jumlah($number)
{
		$sql = mysql_query("SELECT SUM(JUMLAH) AS total_barang FROM barang WHERE JENIS_ID = '".$number."' ");
		$hasil = mysql_fetch_array($sql);

		$output = number_format($hasil['total_barang']);
		echo $output;
	//echo $output;
	//echo "<br/>";
}




function item(){

	$total = mysql_query("SELECT SUM(JUMLAH) AS total_item FROM barang");
	$hasil = mysql_fetch_array($total);

	$output = number_format($hasil['total_item']);
	echo $output;

}



function user(){

	$user = mysql_query("SELECT * FROM user");
	$total = mysql_num_rows($user);

	$output =  $total - 1;
	echo $output;

}


function comment(){

  $comment = mysql_query("SELECT * FROM kritik");
  $total = mysql_num_rows($comment);

  $output = $total;
  echo $output;

}


function banyak_peminjaman(){

  $peminjam = mysql_query("SELECT * FROM peminjam");
  $total = mysql_num_rows($peminjam);

  echo $total;
}

function banyak_admin(){

  $admin = mysql_query("SELECT * FROM user WHERE tipe='admin'");
  $total = mysql_num_rows($admin);

  echo $total;

}

function list_user()
{

$tampil = mysql_query("SELECT * FROM user");
$data = mysql_fetch_array($tampil);
//$jumlah = mysql_num_rows($tampil);


		while($row=mysql_fetch_row($tampil))
		{

		echo "	<tr>
        <td>
          $row[0]
        </td>
        <td>
          $row[4]
        </td>
        <td>
          $row[6]
        </td>
        <td>
          $row[10]
        </td>
        <td>
          $row[7]
        </td>
      </tr>";
		
		}

	

}

function list_user_2(){

$tampil = mysql_query("SELECT * FROM user WHERE tipe = 'siswa'");
  
  while($row=mysql_fetch_row($tampil))
    {
     echo "<tr>
        <td>
          <h5 style='color:black;'>$row[0]</h5>
        </td>
        <td>
          <h5 style='color:black;'>$row[4]</h5>
        </td>
        <td>
          <span class='glyphicon glyphicon-edit' style='color:grey;'></span>
          &nbsp; &nbsp;
          <span class='glyphicon glyphicon-remove' style='color:red;'></span>
        </td>
      </tr>";
    }
}


function list_barang()
{

	$tampil = mysql_query("SELECT *FROM barang as brg JOIN jenis as jns ON brg.JENIS_ID=jns.JENIS_ID ");
		while($row=mysql_fetch_row($tampil))
		{

			echo " 
		<tr>
        <td>
		  $row[9]        
        </td>
        <td>
          $row[4]
        </td>
        <td>
          $row[7]
        </td>
        <td>
          <span class='glyphicon glyphicon-edit' style='color:grey;'></span>
          &nbsp; &nbsp;
          <span class='glyphicon glyphicon-remove' style='color:red;'></span>
        </td>
      </tr>
      		";
		}

}


function name(){
  session_start(); echo $_SESSION['nama']; 
}


function riwayat_peminjaman(){
  echo "<div class='col-md-6' style='margin-top:30px;'>
    <img src="/"../profil/img/profil.jpg"/" style='border-radius:50%;' height='100' width='100' class='pull-left'>
    <h3 style='color:grey;margin:0;margin-left:110px;'> Ananda Prameswary Putri </h3>
    <h5 style='color:grey;margin:0;margin-left:110px;'> 05 Februari 2015 </h5><br>
    <h4 style='color:grey;margin:0;margin-left:110px;'> Meminjam Laptop merk Asus</h4>
  </div>
  <div class='col-md-6' style='margin-top:30px;'>
    <img src="/"../profil/img/profil.jpg"/" style='border-radius:50%;' height='100' width='100' class='pull-left'>
    <h3 style='color:grey;margin:0;margin-left:110px;'> Ananda Prameswary Putri </h3>
    <h5 style='color:grey;margin:0;margin-left:110px;'> 09 Februari 2015 </h5><br>
    <h4 style='color:grey;margin:0;margin-left:110px;'> Mengembalikan Laptop merk Asus</h4>
  </div>
    ";
 }

function info_user(){
  echo "<div class='col-md-4' style='margin-top:20px;'>
      <div class='profilbig'>
        <center><br><img src="/"../profil/img/profil.jpg"/" style='border-radius:50%;' height='100' width='100'>
        <br><br><h3 style='margin:0;color:white;'>Ananda Prameswary Putri</h3>
        <h4>XI RPL B</h4>
        <h4>Perempuan</h4>
        <br>
        </center>
      </div>
    </div>
    ";
}

 ?>
