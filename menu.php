<?php
include ('koneksi.php');
?>
<body bgcolor="#FFFF00">
	<h2 align="center">Halaman Utama Database UAS 3</h2>
	<form method="post" action="center"><!--Form untuk di kirim data ke DB-->
	<table border="1" align="center"><!--Nama harus sama dengan Database-->
		<ul>
		    <li><a href="input_barang.php">Master Barang</a></li>
		    <li><a href="input_satuan.php">Master Satuan</a></li>
		    <li><a href="input_kategori.php">Master Kategori</a></li>
		    <li><a href="tampil_barang.php">Tampil Barang</a></li>
		    <li><a href="tampil_satuan.php">Tampil Satuan</a></li>
		    <li><a href="tampil_kategori.php">Tampil Kategori</a></li>
		    <li><a href="tampil_transaksi.php">Tampil Transaksi</a></li>
		    <li><a href="laporan_transaksi.php">Laporan Transaksi</a></li>
	    </ul>
</div>