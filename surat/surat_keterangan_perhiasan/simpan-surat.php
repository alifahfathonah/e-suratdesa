<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $jenis_surat = "Surat Keterangan Perhiasan";
        $nik = $_POST['fnik'];
        $jenis_perhiasan = $_POST['fjenis_perhiasan'];
        $nama_perhiasan = $_POST['fnama_perhiasan'];
        $berat = $_POST['fberat'];
        $toko_perhiasan = addslashes($_POST['ftoko_perhiasan']);
        $lokasi_toko_perhiasan = addslashes($_POST['flokasi_toko_perhiasan']);
        $keperluan = addslashes($_POST['fkeperluan']);
        $status_surat = "PENDING";
        $id_profil_desa = "1";

        $qTambahSurat = "INSERT INTO surat_keterangan_perhiasan (jenis_surat, nik, jenis_perhiasan, nama_perhiasan, berat, toko_perhiasan, lokasi_toko_perhiasan, keperluan, status_surat, id_profil_desa) VALUES('$jenis_surat', '$nik', '$jenis_perhiasan', '$nama_perhiasan', '$berat', '$toko_perhiasan', '$lokasi_toko_perhiasan', '$keperluan', '$status_surat', '$id_profil_desa')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:../index.php?pesan=berhasil");
    }
?>