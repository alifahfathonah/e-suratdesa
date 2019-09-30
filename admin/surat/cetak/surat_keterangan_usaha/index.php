<?php 
	include ('../../permintaan_surat/konfirmasi/part/akses.php');
  	include ('../../../../config/koneksi.php');

  	$id = $_GET['id'];
  	$qCek = mysqli_query($connect,"SELECT penduduk.*, surat_keterangan_usaha.no_surat, surat_keterangan_usaha.atribut_umum, surat_keterangan_usaha.keperluan, surat_keterangan_usaha.id_pejabat_desa FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.id_sku='$id'");
  	while($row = mysqli_fetch_array($qCek)){

  		$qTampilDesa = mysqli_query($connect, "SELECT * FROM profil_desa WHERE id_profil_desa = '1'");
        foreach($qTampilDesa as $rows){
?>

<html>
<head>
	<title>CETAK SURAT</title>
	<link href="../../../../assets/formsuratCSS/formsurat.css" rel="stylesheet" type="text/css"/>
	<style type="text/css" media="print">
	    @page { margin: 0; }
  		body { 
  			margin: 1cm;
  			font-family: "Times New Roman", Times, serif;
  		}
	</style>
</head>
<body>
<div>
	<table width="100%">
		<tr><img src="../../../../assets/img/logo-jombang-90x90.png" alt="" class="logo"></tr>
		<div class="header">
			<h4 class="kop" style="text-transform: uppercase">PEMERINTAH KABUPATEN <?php echo $rows['kabupaten']; ?></h4>
			<h4 class="kop" style="text-transform: uppercase">KECAMATAN <?php echo $rows['kecamatan']; ?></h4>
			<h4 class="kop" style="text-transform: uppercase">DESA <?php echo $rows['nama_desa']; ?></h4>
			<h5 class="kop2"><?php echo $rows['alamat']; ?> Ds. <?php echo $rows['nama_desa']; ?>, Kec. <?php echo $rows['kecamatan']; ?>, Kab. <?php echo $rows['kabupaten'] . " " . $rows['kode_pos']; ?></h5>
			<div style="text-align: center;">
				<hr>
			</div>
		</div>
		<br><br>
		<div align="center"><u><h4 class="kop">SURAT KETERANGAN USAHA</h4></u></div>
		<div align="center"><h4 class="kop3">Nomor :&nbsp;&nbsp;&nbsp;<?php echo $row['no_surat']; ?></h4></div>
	</table>
	<br>
	<div class="clear"></div>
	<div id="isi3">
		<table width="100%">
			<tr>
				<td class="indentasi">Yang bertanda tangan di bawah ini Penjabat Kepala Desa <?php echo $rows['nama_desa']; ?>, Kecamatan <?php echo $rows['kecamatan']; ?>, Kabupaten <?php echo $rows['kabupaten']; ?>, Provinsi <?php echo $rows['provinsi']; ?> menerangkan dengan sebenarnya bahwa :
				</td>
			</tr>
		</table>
		<br><br>
		<table width="100%" class="indentasi">
			<tr>
				<td width="25%">NIK</td>
				<td width="75%">:&nbsp;&nbsp;&nbsp;<?php echo $row['nik']; ?></td>
			</tr>
			<tr>
				<td>N&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;A</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['nama']; ?></td>
			</tr>
			<?php
				$tgl_lhr = date($row['tgl_lahir']);
				$tgl = date('d ', strtotime($tgl_lhr));
				$bln = date('F', strtotime($tgl_lhr));
				$thn = date(' Y', strtotime($tgl_lhr));
				$blnIndo = array(
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
			<tr>
				<td>Tempat/Tgl. Lahir</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['tempat_lahir'] . ", " . $tgl . $blnIndo[$bln] . $thn; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo "Dusun. " . $row['dusun'] . ", RT" . $row['rt'] . "/RW" . $row['rw']; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['agama']; ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td>:&nbsp;&nbsp;&nbsp;<?php echo $row['kewarganegaraan']; ?></td>
			</tr>
		</table>
		<br><br>
		<table width="100%">
			<tr>
				<td class="indentasi">Bahwa benar-benar penduduk kami Dusun <?php echo $row['dusun']; ?>, Desa <?php echo $rows['nama_desa']; ?>, Kecamatan <?php echo $rows['kecamatan']; ?>, Kabupaten <?php echo $rows['kabupaten']; ?>. Adapun Nama diatas benar-benar memiliki usaha <b><?php echo $row['atribut_umum']; ?></b>.</td>
			</tr>
		</table><br>
		<table width="100%">
			<tr>
				<td class="indentasi">Surat Keterangan ini dipergunakan untuk <u><b><?php echo $row['keperluan']; ?></u></b></td>
			</tr>
		</table><br>
		<table width="100%">
			<tr>
				<td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenar-benarnya dan digunakan sebagaimana mestinya.
				</td>
			</tr>
		</table>
	</div>
	<br><br>
	<table width="100%">
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td width="23%"></td>
			<td width="30%"></td>
			<td align="center">
				<?php echo $rows['kabupaten']; ?>, 
				<?php
					$tanggal = date('d F Y');
					$bulan = date('F', strtotime($tanggal));
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
					echo date('d ') . $bulanIndo[$bulan] . date(' Y');
				?>
			</td>
		</tr>
		<?php
			$id_pejabat_desa = $row['id_pejabat_desa'];
		  	$qCek = mysqli_query($connect,"SELECT pejabat_desa.jabatan, pejabat_desa.nama_pejabat_desa FROM pejabat_desa LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.id_pejabat_desa = pejabat_desa.id_pejabat_desa WHERE surat_keterangan_usaha.id_pejabat_desa = '$id_pejabat_desa' AND surat_keterangan_usaha.id_sku='$id'");

		  	while($row = mysqli_fetch_array($qCek)){
		?>
		<tr>
			<td width="23%"></td>
			<td width="30%"></td>
			<td align="center"><?php echo $row['jabatan']; ?> <?php echo $rows['nama_desa']; ?></td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td>
			<td></td>
			<td align="center"><b><?php echo $row['nama_pejabat_desa']; ?></b></td>
		</tr>
		<?php 
			} 
		?>
	</table>
</div>
<script>
	window.print();
</script>
</body>
</html>

<?php
		}
  	}
?>