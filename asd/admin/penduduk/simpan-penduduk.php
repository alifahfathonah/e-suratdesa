<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $nik = $_POST['fnik'];
        $nama = $_POST['fnama'];
        $tempat_lahir = $_POST['ftempat_lahir'];
        $tgl_lahir = $_POST['ftgl_lahir'];
        $jenis_kelamin = $_POST['fjenis_kelamin'];
        $agama = $_POST['fagama'];
        $dusun = $_POST['fdusun'];
        $rw = $_POST['frw'];
        $rt = $_POST['frt'];
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
        $gol_darah = $_POST['fgol_darah'];

        $qTambahPenduduk = "INSERT INTO penduduk VALUES(NULL, '$nik' , '$nama' , '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$dusun', '$rw', '$rt', '$no_kk', '$pend_kk', '$pend_terakhir', '$pend_ditempuh', '$pekerjaan', '$status_perkawinan', '$status_dlm_keluarga', '$kewarganegaraan', '$nama_ayah', '$nama_ibu', '$gol_darah')";
        $TambahPenduduk = mysqli_query($connect, $qTambahPenduduk);
        header("location:index.php");
    }
?>