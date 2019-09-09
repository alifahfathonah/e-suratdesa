<?php
    include ('../../config/koneksi.php');

    if (isset($_POST['submit'])){
        $nik = $_POST['fnik'];
        $nama = $_POST['fnama'];
        $t_lahir = $_POST['ft_lahir'];
        $j_kelamin = $_POST['fj_kelamin'];
        $agama = $_POST['fagama'];

        $qTambahPenduduk = "INSERT INTO penduduk VALUES('$nik' , '$nama' , '$t_lahir', '$j_kelamin', '$agama')";
        $TambahPenduduk = mysqli_query($connect, $qTambahPenduduk);
        header("location:index.php");
    }
?>