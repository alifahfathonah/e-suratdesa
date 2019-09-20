<?php
	include ('../../config/koneksi.php');

	$qHapus	= mysqli_query($connect, "DELETE FROM penduduk");

	if($qHapus){
		header('location:index.php');
	}
?>