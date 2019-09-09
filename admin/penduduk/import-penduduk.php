<?php 
// menghubungkan dengan koneksi
include ('../../config/koneksi.php');
// menghubungkan dengan library excel reader
include ('excel_reader2.php');
?>

<?php
// upload file xls
$target = basename($_FILES['datapenduduk']['name']) ;
move_uploaded_file($_FILES['datapenduduk']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['datapenduduk']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['datapenduduk']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nik     = $data->val($i, 1);
	$nama   = $data->val($i, 2);
	$t_lahir  = $data->val($i, 3);
	$j_kelamin  = $data->val($i, 4);
	$agama  = $data->val($i, 4);

	if($nik != "" && $nama != "" && $t_lahir != "" && $j_kelamin != "" && $agama != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($connect,"INSERT INTO penduduk VALUES('$nik','$nama','$t_lahir','$j_kelamin','$agama')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['datapenduduk']['name']);

// alihkan halaman ke index.php
header("location:index.php");
?>