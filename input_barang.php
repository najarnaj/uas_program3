<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_barang="insert into t_barang (id_barang, nama_barang, id_kategori, id_satuan)
	values('".$_POST['id_barang']."',
			'".$_POST['nama_barang']."',
			'".$_POST['id_kategori']."',
			'".$_POST['id_satuan']."')";
	$proses_input_barang=mysqli_query($home,$query_input_barang);
	if($proses_input_barang){
		echo 'Input Data Berhasil kawan!!!';
	}else{
		echo mysqli_error($home);
	}
}
?>
<body bgcolor="#7FFFD4">  
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action=""><!--Form untuk kirim data ke DB-->
	<table border="1"  align=""><!--Nama harus sama dengan database-->
		<tr>
			<td>Id Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Id Kategori</td>
			<td><input type="number" name="id_kategori"></td>
		</tr>
		<tr>
			<td>Id Satuan</td>
			<td><input type="number" name="id_satuan"></td>
		</tr>
		</td>
		</table>
		<input type="submit" name="save">
	</form>
<a href="menu.php">Menu Utama</a>
