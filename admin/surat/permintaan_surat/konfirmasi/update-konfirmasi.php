<?php
	include ('../../../../config/koneksi.php');

	$id 				= $_POST['id'];
	$no_surat 			= $_POST['fno_surat'];
	$tanda_tangan 		= $_POST['ft_tangan'];
	$status_surat 		= "SELESAI";

	$qUpdate 	= "UPDATE surat_keterangan_berkelakuan_baik SET no_surat='$no_surat', tanda_tangan='$tanda_tangan', status_surat='$status_surat' WHERE id_skbb='$id'";
	$update 	= mysqli_query($connect, $qUpdate);

	if($update){
		header('location:../');
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengonfirmasi surat'); window.location.href='#'</script>");
	}
?>