<?php
include('koneksi.php');
if(isset($_POST['save'])){
	$query_input_satuan="insert into t_satuan (id_satuan, nama_satuan)
	values('".$_POST['id_satuan']."',
			'".$_POST['nama_satuan']."')";
	$proses_input_satuan=mysqli_query($home,$query_input_satuan);
	if($proses_input_satuan){
		echo 'Input Data Berhasil!';
	}else{
		echo mysqli_error($home);
	}
}
?>
<body bgcolor="#F0E68C">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table class="border" align
 border="1" align="center">
		<tr>
			<td>Id Satuan</td>
			<td><input type="number" name="id_satuan"></td>
		<tr>
			<td>Nama Satuan</td>
			<td><input type="text" name="nama_satuan"></td>
		</tr>
		<tr>
		</tr>
		</table>
		<td><input type="submit" name="save"></td>
	</form>
<a href="menu.php">Menu Utama</a>