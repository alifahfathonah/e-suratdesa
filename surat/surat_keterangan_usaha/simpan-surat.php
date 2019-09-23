<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $jenis_surat = "Surat Keterangan Usaha";
        $nik = $_POST['fnik'];
        $usaha = $_POST['fusaha'];
        $keperluan = $_POST['fkeperluan'];
        $status_surat = "PENDING";
        $id_profil_desa = "1";

        $qTambahSurat = "INSERT INTO surat_keterangan_usaha (jenis_surat, nik, atribut_umum, keperluan, status_surat, id_profil_desa) VALUES('$jenis_surat', '$nik', '$usaha', '$keperluan', '$status_surat', '$id_profil_desa')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:../index.php?pesan=berhasil");
    }
?>