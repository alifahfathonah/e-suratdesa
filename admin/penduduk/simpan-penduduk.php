<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
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
        $kota = "Kabupaten " . $_POST['fkota'];
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

        $qCekPenduduk = mysqli_query($connect, "SELECT * FROM penduduk WHERE nik='$nik'");
        $row          = mysqli_num_rows($qCekPenduduk);

        if($row > 0){
            header('location:index.php?pesan=gagal-menambah');
        }else{
            $qTambahPenduduk = "INSERT INTO penduduk VALUES(NULL, '$nik', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$jalan', '$dusun', '$rt', '$rw', '$desa', '$kecamatan', '$kota', '$no_kk', '$pend_kk', '$pend_terakhir', '$pend_ditempuh', '$pekerjaan', '$status_perkawinan', '$status_dlm_keluarga', '$kewarganegaraan', '$nama_ayah', '$nama_ibu')";
            $tambahPenduduk = mysqli_query($connect, $qTambahPenduduk);
            if($tambahPenduduk){
                header("location:index.php");
            }
        }
    }
?>