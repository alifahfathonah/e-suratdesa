<?php  
	session_start();
	if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Administrator')){
?>
<html>
<head>
	<link rel="shortcut icon" href="../../assets/img/mini-logo.png">
	<title>CETAK LAPORAN</title>
	<style type="text/css" media="print">
	    @page { margin: 0; }
  		body { 
  			margin-top: 2cm;
  			margin-left: 2cm;
  			margin-right: 2cm;
  			margin-bottom: 2cm;
  			font-family: "Times New Roman", Times, serif;
  		}
	</style>
</head>
<body>
	<div class="header">
		<div align="center" style="font-size: 20pt;"><b>LAPORAN</b></div>
		<div align="center" style="font-size: 20pt;"><b>SURAT ADMINISTRASI DESA - SURAT KELUAR</b></div>
		<div align="center" style="font-size: 20pt;"><b>DESA KEDAWONG</b></div>
		<hr>
	</div><br>
	<table width="100%" border="1" cellpadding="10" style="border-collapse:collapse;">
		<thead>
            <tr>
              <th><strong>No. Surat</strong></th>
              <th><strong>Tanggal</strong></th>
              <th><strong>Nama</strong></th>
              <th><strong>Jenis Surat</strong></th>
              <th><strong>Alamat</strong></th>
            </tr>
          </thead>
          <tbody>
            <?php
              include ('../../config/koneksi.php');

              $no = 1;
              $qTampil = mysqli_query($connect, "SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' 
                UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai' 
                UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' 
                UNION SELECT penduduk.nama, penduduk.dusun, penduduk.rw, penduduk.rt, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai'");
              foreach($qTampil as $row){
            ?>
            <tr>
              <td><?php echo $row['no_surat']; ?></td>
              <?php
                $tanggal = date('d', strtotime($row['tanggal_surat']));
                $bulan = date('F', strtotime($row['tanggal_surat']));
                $tahun = date('Y', strtotime($row['tanggal_surat']));
                $bulanIndo = array(
                  'January' => 'Januari',
                  'February' => 'Februari',
                  'March' => 'Maret',
                  'April' => 'April',
                  'May' => 'Mei',
                  'June' => 'Juni',
                  'July' => 'Juli',
                  'August' => 'Agustus',
                  'September' => 'September',
                  'October' => 'Oktober',
                  'November' => 'November',
                  'December' => 'Desember'
                );
              ?>
              <td><?php echo $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['jenis_surat']; ?></td>
              <td><?php echo "Dusun. " . $row['dusun'] . ", RT" . $row['rt'] . "/RW" . $row['rw']; ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
	</table>
<script>
	window.print();
</script>
</body>
</html>
<?php  
	} else {
		include('../part/404-not-found.php');
	}
?>