<?php
	include ('../../config/koneksi.php');
	 
	$nik = $_POST['fnik'];
	 
	$qCekNik = mysqli_query($connect,"SELECT * FROM penduduk WHERE nik = '$nik'");
	$row = mysqli_num_rows($qCekNik);
	 
	if($row > 0){
		$data = mysqli_fetch_assoc($qCekNik);
		if($data['nik']==$nik){
			header("location:form-surat.php");
		}
	}else{
		header("location:index.php?pesan=gagal");
	}
?>