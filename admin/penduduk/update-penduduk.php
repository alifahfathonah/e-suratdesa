<?php
	include ('../../config/koneksi.php');

	$id = $_POST['id'];
	$nik = $_POST['fnik'];
	$nama = $_POST['fnama'];
	$tempat_lahir = $_POST['ftempat_lahir'];
	$tgl_lahir = $_POST['ftgl_lahir'];
	$jenis_kelamin = $_POST['fjenis_kelamin'];
	$agama = $_POST['fagama'];
	$jalan = addslashes($_POST['fjalan']);
	$dusun = $_POST['fdusun'];
	$rt = $_POST['frt'];
	$rw = $_POST['frw'];
	$desa = $_POST['fdesa'];
	$kecamatan = $_POST['fkecamatan'];
	$kota = $_POST['fkota'];
	$no_kk = $_POST['fno_kk'];
	$pend_kk = $_POST['fpend_kk'];
	$pend_terakhir = $_POST['fpend_terakhir'];
	$pend_ditempuh = $_POST['fpend_ditempuh'];
	$pekerjaan = $_POST['fpekerjaan'];
	$status_perkawinan = $_POST['fstatus_perkawinan'];
	$status_dlm_keluarga = $_POST['fstatus_dlm_keluarga'];
	$kewarganegaraan = $_POST['fkewarganegaraan'];
	$nama_ayah = $_POST['fnama_ayah'];
	$nama_ibu = $_POST['fnama_ibu'];

	$qUpdate = "UPDATE penduduk SET nik = '$nik', nama = '$nama', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', jalan = '$jalan', dusun = '$dusun', rt = '$rt', rw = '$rw', desa = '$desa', kecamatan = '$kecamatan', kota = '$kota', no_kk = '$no_kk', pend_kk = '$pend_kk', pend_terakhir = '$pend_terakhir', pend_ditempuh = '$pend_ditempuh', pekerjaan = '$pekerjaan', status_perkawinan = '$status_perkawinan', status_dlm_keluarga = '$status_dlm_keluarga', kewarganegaraan = '$kewarganegaraan', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu' WHERE id_penduduk='$id'";
	$update = mysqli_query($connect, $qUpdate);

	if($update){
		header('location:../penduduk/');
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengubah data penduduk'); window.location.href='../penduduk/'</script>");
	}
?>