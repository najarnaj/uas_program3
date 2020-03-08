<?php
include('koneksi.php');
$tampil_satuan =mysqli_query($home,'select *from t_satuan');
?>
 <body bgcolor="#7FFFD4">
	<h2 align="center">UAS PEMROGRAMAN SEMESTER 3 </h2>
	<form method="post" action="">
	<table border="1" align="center">
	<tr>
		<td>Id Satuan</td>
		<td>Nama Satuan</td>
	</tr>
<?php while($data = mysqli_fetch_array($tampil_satuan)) { ?>
	<tr>
		<td><?php echo $data['id_satuan']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
	</tr>
<?php } ?>
		</table>
	</form>
<a href="menu.php">Menu Utama</a>
