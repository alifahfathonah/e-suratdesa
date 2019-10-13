<html>
<head>
  <link rel="shortcut icon" href="../../assets/img/mini-logo.png">
  <title>CETAK LAPORAN</title>
  <style>
    @page {
      margin: 2cm;
      color: none;
    }
    body {
      font-family: "Times New Roman", Times, serif;
    }
    hr{
      border-bottom: 1px solid #000000;
      height:0px;
    }
  </style>
</head>
<body>
  <?php
    include "../../config/koneksi.php";
    if(isset($_GET['filter']) && ! empty($_GET['filter'])){
      $filter = $_GET['filter'];
      if($filter == '1'){
        echo '
          <div class="header">
            <div align="center" style="font-size: 14pt;"><b>Laporan Surat Administrasi Desa - Surat Keluar Desa Kedawong</b></div>
            <hr>
          </div><br>
        ';

        $query = "SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' 
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai' 
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' 
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai' ORDER BY tanggal_surat";
      }else if($filter == '2'){
        $tgl = date('d-m-y', strtotime($_GET['tanggal']));
        echo '
          <div class="header">
            <div align="center" style="font-size: 12pt;"><b>Laporan Surat Administrasi Desa - Surat Keluar Desa Kedawong</b></div>
            <div align="center" style="font-size: 12pt;"><b>Tanggal '.$tgl.'</b></div>
            <hr>
          </div><br>
        ';
        
        $query = "SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' AND DATE(surat_keterangan.tanggal_surat)='{$_GET['tanggal']}'
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai' AND DATE(surat_keterangan_berkelakuan_baik.tanggal_surat)='{$_GET['tanggal']}'
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' AND DATE(surat_keterangan_domisili.tanggal_surat)='{$_GET['tanggal']}'
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai' AND DATE(surat_keterangan_usaha.tanggal_surat)='{$_GET['tanggal']}' ORDER BY tanggal_surat";
      }else if($filter == '3'){
        $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        echo '
          <div class="header">
            <div align="center" style="font-size: 12pt;"><b>Laporan Surat Administrasi Desa - Surat Keluar Desa Kedawong</b></div>
            <div align="center" style="font-size: 12pt;"><b>Bulan '.$nama_bulan[$_GET['bulan']].' '.$_GET['tahun'].'</b></div>
            <hr>
          </div><br>
        ';
        
        $query = "SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' AND MONTH(surat_keterangan.tanggal_surat)='{$_GET['bulan']}' AND YEAR(surat_keterangan.tanggal_surat)='{$_GET['tahun']}'
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai' AND MONTH(surat_keterangan_berkelakuan_baik.tanggal_surat)='{$_GET['bulan']}' AND YEAR(surat_keterangan_berkelakuan_baik.tanggal_surat)='{$_GET['tahun']}'
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' AND MONTH(surat_keterangan_domisili.tanggal_surat)='{$_GET['bulan']}' AND YEAR(surat_keterangan_domisili.tanggal_surat)='{$_GET['tahun']}'
          UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai' AND MONTH(surat_keterangan_usaha.tanggal_surat)='{$_GET['bulan']}' AND YEAR(surat_keterangan_usaha.tanggal_surat)='{$_GET['tahun']}' ORDER BY tanggal_surat";
      }else if($filter == '4'){
        echo '
          <div class="header">
            <div align="center" style="font-size: 12pt;"><b>Laporan Surat Administrasi Desa - Surat Keluar Desa Kedawong</b></div>
            <div align="center" style="font-size: 12pt;"><b>Tahun '.$_GET['tahun'].'</b></div>
            <hr>
          </div><br>
        ';
       
        $query = "SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' AND YEAR(surat_keterangan.tanggal_surat)='{$_GET['tahun']}'
            UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai' AND YEAR(surat_keterangan_berkelakuan_baik.tanggal_surat)='{$_GET['tahun']}'
            UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' AND YEAR(surat_keterangan_domisili.tanggal_surat)='{$_GET['tahun']}'
            UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai' AND YEAR(surat_keterangan_usaha.tanggal_surat)='{$_GET['tahun']}' ORDER BY tanggal_surat";
      }
    }else{
      echo '
          <div class="header">
            <div align="center" style="font-size: 12pt;"><b>Laporan Surat Administrasi Desa - Surat Keluar Desa Kedawong</b></div>
            <hr>
          </div><br>
        ';
      $query = "SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' 
        UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai' 
        UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' 
        UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai' ORDER BY tanggal_surat";
    }
  ?>
  <table width="100%" border="1" cellpadding="5" style="border-collapse:collapse;">
    <tr>
      <th>No. Surat</th>
      <th>Tanggal</th>
      <th>Nama</th>
      <th>Jenis Surat</th>
      <th>Alamat</th>
    </tr>
    <?php
      $sql = mysqli_query($connect, $query);
      $row = mysqli_num_rows($sql);
      if($row > 0){
        while($data = mysqli_fetch_assoc($sql)){
          $tgl = date('d-m-Y', strtotime($data['tanggal_surat']));
          echo "<tr>";
          echo "<td>".$data['no_surat']."</td>";
          echo "<td>".$tgl."</td>";
          echo "<td>".$data['nama']."</td>";
          echo "<td>".$data['jenis_surat']."</td>";
          echo "<td>Dsn. ".$data['dusun'].", RT".$data['rt']."/RW".$data['rw']."</td>";
          echo "</tr>";
        }
      }else{
        echo "<tr><td colspan='5'>Data tidak ditemukan.</td></tr>";
      }
    ?>
  </table>
  <script>
    window.print();
  </script>
</body>
</html>