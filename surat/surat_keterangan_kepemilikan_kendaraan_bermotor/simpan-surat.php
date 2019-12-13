<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $jenis_surat = "Surat Keterangan Kepemilikan Kendaraan Bermotor";
        $nik = $_POST['fnik'];
        $merk_type = $_POST['fmerk_type'];
        $jenis_model = $_POST['fjenis_model'];
        $tahun_pembuatan = $_POST['ftahun_pembuatan'];
        $cc = $_POST['fcc'];
        $warna_cat = $_POST['fwarna_cat'];
        $no_rangka = $_POST['fno_rangka'];
        $no_mesin = $_POST['fno_mesin'];
        $no_polisi = $_POST['fno_polisi'];
        $no_bpkb = $_POST['fno_bpkb'];
        $atas_nama_pemilik = addslashes($_POST['fatas_nama_pemilik']);
        $alamat_pemilik = addslashes($_POST['falamat_pemilik']);
        $keperluan = addslashes($_POST['fkeperluan']);
        $status_surat = "PENDING";
        $id_profil_desa = "1";

        $qTambahSurat = "INSERT INTO surat_keterangan_kepemilikan_kendaraan_bermotor (jenis_surat, nik, merk_type, jenis_model, tahun_pembuatan, cc, warna_cat, no_rangka, no_mesin, no_polisi, no_bpkb, atas_nama_pemilik, alamat_pemilik, keperluan, status_surat, id_profil_desa) VALUES('$jenis_surat', '$nik', '$merk_type', '$jenis_model', '$tahun_pembuatan', '$cc', '$warna_cat', '$no_rangka', '$no_mesin', '$no_polisi', '$no_bpkb', '$atas_nama_pemilik', '$alamat_pemilik', '$keperluan', '$status_surat', '$id_profil_desa')";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);
        header("location:../index.php?pesan=berhasil");
    }
?>