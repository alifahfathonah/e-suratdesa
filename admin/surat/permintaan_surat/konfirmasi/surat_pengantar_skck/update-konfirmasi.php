<?php
	include ('../../../../../config/koneksi.php');

	$id 				= $_POST['id'];
	$no_surat 			= $_POST['fno_surat'];
	$id_pejabat_desa 	= $_POST['ft_tangan'];
	$masa_berlaku		= $_POST['fmasa_berlaku'];
	$status_surat 		= "SELESAI";

	$qUpdate 	= "UPDATE surat_pengantar_skck SET no_surat='$no_surat', id_pejabat_desa='$id_pejabat_desa', masa_berlaku='$masa_berlaku', status_surat='$status_surat' WHERE id_sps='$id'";
	$update 	= mysqli_query($connect, $qUpdate);

	if($update){
		header('location:../../');
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengonfirmasi surat'); window.location.href='#'</script>");
	}
?>