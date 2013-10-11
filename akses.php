<?php
include 'koneksi.php';
$user		= (!empty($_POST['user'])) ? 	$_POST['user'] : ""   ;
$pass		= (!empty($_POST['pass'])) ? 	$_POST['pass'] : ""   ;
$nama		= (!empty($_POST['nama'])) ? 	$_POST['nama'] : ""   ;
$tempat		= (!empty($_POST['tempat'])) ? 	$_POST['tempat'] : ""   ;
$alamat		= (!empty($_POST['alamat'])) ? 	$_POST['alamat'] : ""   ;
$kelas		= (!empty($_POST['kelas '])) ? 	$_POST['kelas'] : ""   ;
$status		= (!empty($_POST['status'])) ? 	$_POST['status'] : ""   ;


$dbData		=  mysql_query("select * from biodata where no_induk = '$user' and password = '$pass'  ") or die(mysql_error()) ;
$dbRow		=  mysql_fetch_array($dbData);
$nRow		=  mysql_num_rows($dbData);
if ($nRow > 0 ){


$_SESSION['user'] = $dbRow[7] ;
$_SESSION['pass'] = $dbRow[8] ;	
$_SESSION['nama'] = $dbRow[0] ;
$_SESSION['tempat'] = $dbRow[1] ;
$_SESSION['alamat'] = $dbRow[5] ;
$_SESSION['kelas'] = $dbRow[6] ;
$_SESSION['status'] = $dbRow[9] ;

 echo "<script> alert ('yes :D')</script>";
 echo "<meta http-equiv='refresh' content='0;url=akun.php' />" ;
}

?>
