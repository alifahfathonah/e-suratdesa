<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Surat Ds. Kedawong.xls");
	?>
 
	<center>
		<h2>Data Penduduk <br/> Desa Kedawong</h2>
	</center>
 
	<table border="1">
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
              $qTampil = mysqli_query($connect, "SELECT * FROM surat_keterangan WHERE status_surat='selesai' UNION SELECT * FROM surat_keterangan_berkelakuan_baik WHERE status_surat='selesai' UNION SELECT * FROM surat_keterangan_domisili WHERE status_surat='selesai' UNION SELECT * FROM surat_keterangan_usaha WHERE status_surat='selesai'");
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
              <td><?php echo $row['alamat']; ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
</body>
</html>