<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $jenis_surat = "Surat Lapor Hajatan";
        $nik = $_POST['fnik'];
        $bukti_ktp = $_POST['fbukti_ktp'];
        $bukti_kk = $_POST['fbukti_kk'];
        $jenis_hajat = addslashes($_POST['fjenis_hajat']);
        $hari = addslashes($_POST['fhari']);
        $tanggal = $_POST['ftanggal'];
        $jenis_hiburan = addslashes($_POST['fjenis_hiburan']);
        $pemilik = addslashes($_POST['fpemilik']);
        $alamat_pemilik = addslashes($_POST['falamat_pemilik']);
        $status_surat = "PENDING";
        $id_profil_desa = "1";

        $qTambahSurat = "INSERT INTO surat_lapor_hajatan (jenis_surat, nik, bukti_ktp, bukti_kk, jenis_hajat, hari, tanggal, jenis_hiburan, pemilik, alamat_pemilik, status_surat, id_profil_desa) VALUES('$jenis_surat', '$nik', '$bukti_ktp', '$bukti_kk', '$jenis_hajat', '$hari', '$tanggal', '$jenis_hiburan', '$pemilik', '$alamat_pemilik', '$status_surat', '$id_profil_desa')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:../index.php?pesan=berhasil");
    }
?>