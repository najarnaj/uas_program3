<?php
include('koneksi.php');
$tampil_kategori =mysqli_query($home,'select *from t_kategori');
?>
 <body bgcolor="#7FFFD4">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table border="tablex" align="center">
	<tr>
		<td>Id Kategori</td>
		<td>Nama Kategori</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_kategori)) { ?>
	<tr>
		<td><?php echo $data['id_kategori']; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
<a href="menu.php">Menu Utama</a>