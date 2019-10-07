<?php 
	include ('../../config/koneksi.php');
	include ('excel_reader2.php');

	$target = basename($_FILES['datapenduduk']['name']) ;
	move_uploaded_file($_FILES['datapenduduk']['tmp_name'], $target);
	chmod($_FILES['datapenduduk']['name'],0777);
	$data = new Spreadsheet_Excel_Reader($_FILES['datapenduduk']['name'],false);
	$jumlah_baris = $data->rowcount($sheet_index=0);
	$berhasil = 0;
	for ($i=2; $i<=$jumlah_baris; $i++){
		$nik  = $data->val($i, 1);
		$nama  = $data->val($i, 2);
		$tempat_lahir  = $data->val($i, 3);
		$tgl_lahir  = $data->val($i, 4);
		$jenis_kelamin  = $data->val($i, 5);
		$agama  = $data->val($i, 6);
		$dusun  = $data->val($i, 7);
		$rw  = $data->val($i, 8);
		$rt  = $data->val($i, 9);
		$no_kk  = $data->val($i, 10);
		$pend_kk  = $data->val($i, 11);
		$pend_terakhir  = $data->val($i, 12);
		$pend_ditempuh  = $data->val($i, 13);
		$pekerjaan  = $data->val($i, 14);
		$status_perkawinan  = $data->val($i, 15);
		$status_dlm_keluarga  = $data->val($i, 16);
		$kewarganegaraan  = $data->val($i, 17);
		$nama_ayah  = $data->val($i, 18);
		$nama_ibu  = $data->val($i, 19);
		$gol_darah  = $data->val($i, 20);
		
		if($nik != "" && $nama != "" && $tempat_lahir != "" && $tgl_lahir != "" && $jenis_kelamin != "" && $agama != "" && $dusun != "" && $rw != "" && $rt != "" && $no_kk != "" && $pend_kk != "" && $pend_terakhir != "" && $pend_ditempuh != "" && $pekerjaan != "" && $status_perkawinan != "" && $status_dlm_keluarga != "" && $kewarganegaraan != "" && $nama_ayah != "" && $nama_ibu != "" && $gol_darah != ""){
			mysqli_query($connect,"INSERT INTO penduduk VALUES('$nik','$nama','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$agama','$dusun','$rw','$rt','$no_kk','$pend_kk','$pend_terakhir','$pend_ditempuh','$pekerjaan','$status_perkawinan','$status_dlm_keluarga','$kewarganegaraan','$nama_ayah','$nama_ibu','$gol_darah')");
			$berhasil++;
		}
	}
	unlink($_FILES['datapenduduk']['name']);
	header("location:index.php");
?>