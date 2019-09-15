<?php
	include ('../../config/koneksi.php');

	$qDelete 	= "DELETE FROM penduduk";
	mysqli_query($connect, $qDelete);
	header('location:index.php');
?>