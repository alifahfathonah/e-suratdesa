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
	header("Content-Disposition: attachment; filename=Data Penduduk Ds. Kedawong.xls");
	?>
 
	<center>
		<h2>Data Penduduk <br/> Desa Kedawong</h2>
	</center>
 
	<table border="1">
    <thead>
      <tr>
        <th><strong>No</strong></th>
        <th><strong>NIK</strong></th>
        <th><strong>Nama</strong></th>
        <th><strong>Tempat/Tgl Lahir</strong></th>
        <th><strong>Jenis Kelamin</strong></th>
        <th><strong>Agama</strong></th>
        <th><strong>Alamat</strong></th>
      </tr>
    </thead>
    <tbody>
      <?php
        include ('../../config/koneksi.php');

        $no = 1;
        $qTampil = mysqli_query($connect, "SELECT * FROM penduduk");
        foreach($qTampil as $row){
          $tanggal = $row['tgl_lahir'];
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['nik']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <?php
          $tanggal = date('d', strtotime($row['tgl_lahir']));
          $bulan = date('F', strtotime($row['tgl_lahir']));
          $tahun = date('Y', strtotime($row['tgl_lahir']));
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
        <td><?php echo $row['tempat_lahir'] . ", " . $tanggal . " " . $bulanIndo[$bulan] . " " . $tahun; ?></td>
        <td><?php echo $row['jenis_kelamin']; ?></td>
        <td><?php echo $row['agama']; ?></td>
        <td><?php echo 'Dsn. ', $row['dusun'], ', RT', $row['rt'], '/RW', $row['rw']; ?></td>
      </tr>
      <?php
        }
      ?>
    </tbody>    
  </table>
</body>
</html>