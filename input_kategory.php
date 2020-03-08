<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_kategory="insert into t_kategori (id_kategori, nama_kategori)
	values('".$_POST['id_kategori']."',
			'".$_POST['nama_kategori']."')";
	$proses_input_kategory=mysqli_query($home,$query_input_kategory);
	if($proses_input_kategory){
		echo 'Input Data Berhasil!';
	}else{
		echo mysqli_error($home);
	}
}
?>
 <body bgcolor="#FF8C00">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="border"
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="id_kategory"></td>
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="nama_kategory"></td>
		</tr>
		<tr>
		</tr>
		</table>
		<td><input type="submit" name="save"></td>
	</form>
<a href="menu.php">Menu Utama</a>