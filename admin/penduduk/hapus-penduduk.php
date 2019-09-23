<?php
	include ('../../config/koneksi.php');

	$nik		= $_GET['nik'];
	$qHapus		= mysqli_query($connect, "DELETE FROM penduduk WHERE nik = '$nik'");

	if($qHapus){
		header('location:index.php');
	} else {
		header('location:index.php?pesan=gagal');
	}
?>