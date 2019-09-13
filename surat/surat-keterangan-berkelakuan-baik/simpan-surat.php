<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
    	$no_surat = " ";
        $nik = $_POST['fnik'];
        $nama = $_POST['fnama'];
        $tempat_tgl_lahir = $_POST['ftempat_tgl_lahir'];
        $jenis_kelamin = $_POST['fjenis_kelamin'];
        $alamat = $_POST['falamat'];
        $agama = $_POST['fagama'];
        $pekerjaan = $_POST['fpekerjaan'];
        $kewarganegaraan = $_POST['fkewarganegaraan'];
        $keperluan = $_POST['fkeperluan'];
        $status_surat = "Pending";

        $qTambahSurat = "INSERT INTO surat_keterangan_berkelakuan_baik (nik, nama, tempat_tgl_lahir, jenis_kelamin, alamat, agama, pekerjaan, kewarganegaraan, keperluan, status_surat) VALUES('$nik', '$nama', '$tempat_tgl_lahir', '$jenis_kelamin', '$alamat', '$agama', '$pekerjaan', '$kewarganegaraan', '$keperluan', '$status_surat')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:index.php?pesan=berhasil");

    }
?>