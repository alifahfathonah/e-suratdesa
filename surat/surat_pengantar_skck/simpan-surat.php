<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $jenis_surat = "Surat Pengantar SKCK";
        $nik = $_POST['fnik'];
        $bukti_ktp = $_POST['fbukti_ktp'];
        $bukti_kk = $_POST['fbukti_kk'];
        $keperluan = addslashes($_POST['fkeperluan']);
        $keterangan = addslashes($_POST['fketerangan']);
        $status_surat = "PENDING";
        $id_profil_desa = "1";

        $qTambahSurat = "INSERT INTO surat_pengantar_skck (jenis_surat, nik, bukti_ktp, bukti_kk, keperluan, keterangan, status_surat, id_profil_desa) VALUES('$jenis_surat', '$nik', '$bukti_ktp', '$bukti_kk', '$keperluan', '$keterangan', '$status_surat', '$id_profil_desa')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:../index.php?pesan=berhasil");
    }
?>