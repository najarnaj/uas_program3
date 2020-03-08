<?php
$server="localhost";
$user="root";  // ini Berlaku di xampp
$password="";  // ini Berlaku di xampp
$database="db_programuas";

// melakukan koneksi ke database
$home=mysqli_connect($server,$user,$password);

// cek koneksi yang kita lakukan berhasil
if($home){
	echo "Terhubung ke database!!!!";
}else{
	echo "cek lagi!!!";
}
$db=mysqli_select_db($home,$database);
if($db){
	echo "DB Berhasil Terhubung!!!!";
}else{
	echo 'cek lagi!!!!';
}
?>