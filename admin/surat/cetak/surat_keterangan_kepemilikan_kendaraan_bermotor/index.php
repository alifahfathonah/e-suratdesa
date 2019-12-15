<?php 
	include ('../../permintaan_surat/konfirmasi/part/akses.php');
  	include ('../../../../config/koneksi.php');

  	$id = $_GET['id'];
  	$qCek = mysqli_query($connect,"SELECT penduduk.*, surat_keterangan_kepemilikan_kendaraan_bermotor.* FROM penduduk LEFT JOIN surat_keterangan_kepemilikan_kendaraan_bermotor ON surat_keterangan_kepemilikan_kendaraan_bermotor.nik = penduduk.nik WHERE surat_keterangan_kepemilikan_kendaraan_bermotor.id_skkkb='$id'");
  	while($row = mysqli_fetch_array($qCek)){

  		$qTampilDesa = mysqli_query($connect, "SELECT * FROM profil_desa WHERE id_profil_desa = '1'");
        foreach($qTampilDesa as $rows){

			$id_pejabat_desa = $row['id_pejabat_desa'];
		  	$qCekPejabatDesa = mysqli_query($connect,"SELECT pejabat_desa.jabatan, pejabat_desa.nama_pejabat_desa FROM pejabat_desa LEFT JOIN surat_keterangan_kepemilikan_kendaraan_bermotor ON surat_keterangan_kepemilikan_kendaraan_bermotor.id_pejabat_desa = pejabat_desa.id_pejabat_desa WHERE surat_keterangan_kepemilikan_kendaraan_bermotor.id_pejabat_desa = '$id_pejabat_desa' AND surat_keterangan_kepemilikan_kendaraan_bermotor.id_skkkb='$id'");
		  	while($rowss = mysqli_fetch_array($qCekPejabatDesa)){
?>

<html>
<head>
	<link rel="shortcut icon" href="../../../../assets/img/mini-logo.png">
	<title>CETAK SURAT</title>
	<link href="../../../../assets/formsuratCSS/formsurat.css" rel="stylesheet" type="text/css"/>
	<style type="text/css" media="print">
	    @page { margin: 0; }
  		body { 
  			margin: 1cm;
  			margin-left: 2cm;
  			margin-right: 2cm;
  			font-family: "Times New Roman", Times, serif;
  		}
	</style>
</head>
<body>
<div>
	<table width="100%">
		<tr><img src="../../../../assets/img/logo-jombang-90x90.png" alt="" class="logo"></tr>
		<div class="header">
			<h4 class="kop" style="text-transform: uppercase">PEMERINTAH <?php echo $rows['kota']; ?></h4>
			<h4 class="kop" style="text-transform: uppercase">KECAMATAN <?php echo $rows['kecamatan']; ?></h4>
			<h4 class="kop" style="text-transform: uppercase">KEPALA DESA <?php echo $rows['nama_desa']; ?></h4>
			<h5 class="kop2" style="text-transform: capitalize;"><?php echo $rows['alamat'] . " Telp. " . $rows['no_telpon'] . " Kode Pos " . $rows['kode_pos']; ?></h5>
			<div style="text-align: center;">
				<hr>
			</div>
		</div>
		<div align="center"><u><h4 class="kop3">SURAT KETERANGAN KEPEMILIKAN KENDARAAN BERMOTOR</h4></u></div>
		<div align="center"><h4 class="kop3">Nomor :&nbsp;&nbsp;&nbsp;<?php echo $row['no_surat']; ?></h4></div>
	</table>
	<div class="clear"></div>
	<div id="isi3">
		<table width="100%">
			<tr>
				<td class="indentasi">Yang bertanda tangan di bawah ini, <a style="text-transform: capitalize;"><?php echo $rowss['jabatan'] . " " . $rows['nama_desa']; ?>, Kecamatan <?php echo $rows['kecamatan']; ?>, <?php echo $rows['kota']; ?></a>, menerangkan dengan sebenarnya bahwa :
				</td>
			</tr>
		</table>
		<table width="100%" style="text-transform: capitalize;">
			<tr>
				<td width="30%" class="indentasi">N&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;M&nbsp;&nbsp;&nbsp;A</td>
				<td width="2%">:</td>
				<td width="68%" style="text-transform: uppercase; font-weight: bold;"><?php echo $row['nama']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
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
				<td class="indentasi">Tempat/Tgl. Lahir</td>
				<td>:</td>
				<td><?php echo $row['tempat_lahir'] . ", " . $tgl . $blnIndo[$bln] . $thn; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Agama</td>
				<td>:</td>
				<td><?php echo $row['agama']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Pekerjaan</td>
				<td>:</td>
				<td><?php echo $row['pekerjaan']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">NIK</td>
				<td>:</td>
				<td><?php echo $row['nik']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Alamat</td>
				<td>:</td>
				<td><?php echo $row['jalan'] . ", RT" . $row['rt'] . "/RW" . $row['rw'] . ", Dusun " . $row['dusun'] . ", Desa " . $row['desa'] . ", Kecamatan " . $row['kecamatan'] . ", " . $row['kota']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Kewarganegaraan</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['kewarganegaraan']; ?></td>
			</tr>
		</table>
		<br>
		<table width="100%">
			<tr>
				<td class="indentasi">Bahwa sesuai dengan pengakuan orang tersebut diatas serta bukti-bukti yang ditunjukkan kepada kami, adalah benar yang menguasai kendaraan BERMOTOR roda <?php echo $row['roda']; ?> dengan ciri-ciri sebagai berikut :
				</td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td width="35%" class="indentasi">Merk / Type</td>
				<td width="2%">:</td>
				<td width="63%" style="text-transform: uppercase;"><?php echo $row['merk_type']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Jenis Model</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['jenis_model']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Tahun Pembuatan / CC</td>
				<td>:</td>
				<td><?php echo $row['tahun_pembuatan'] . "/" . $row['cc']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Warna Cat</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['warna_cat']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">No. Rangka</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['no_rangka']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">No. Mesin</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['no_mesin']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">No. POLISI</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['no_polisi']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">No. B P K B</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><?php echo $row['no_bpkb']; ?></td>
			</tr>
			<tr>
				<td class="indentasi">Atas Nama Pemilik</td>
				<td>:</td>
				<td style="text-transform: uppercase;"><b><?php echo $row['atas_nama_pemilik']; ?></b></td>
			</tr>
			<tr>
				<td class="indentasi">Alamat</td>
				<td>:</td>
				<td style="text-transform: capitalize;"><?php echo $row['alamat_pemilik']; ?></td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td width="31%">Surat ini dipergunakan untuk</td>
				<td width="2%">:</td>
				<td width="73%">Menerangkan kebenaran nama diatas sesuai pengakuannya yang saat ini menguasai kendaraan bermotor dengan ciri-ciri tersebut diatas.</td>
			</tr>
			<tr>
				<td>Guna keperluan</td>
				<td>:</td>
				<td style="text-transform: capitalize;"><b><?php echo $row['keperluan']; ?></b></td>
			</tr>
		</table><br>
		<table width="100%">
			<tr>
				<td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenar-benarnya dan digunakan sebagaimana mestinya.
				</td>
			</tr>
		</table>
	</div>
	<br>
	<table width="100%" style="text-transform: capitalize;">
		<tr>
			<td width="10%"></td>
			<td width="30%"></td>
			<td width="10%"></td>
			<td align="center">
				<?php echo $rows['nama_desa']; ?>, 
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
		<tr>
			<td></td>
			<td align="center">T.T Bersangkutan</td>
			<td></td>
			<td align="center"><?php echo $rowss['jabatan'] . " " . $rows['nama_desa']; ?></td>
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
			<td></td>
			<td align="center" style="text-transform: uppercase"><b><u><?php echo $row['nama']; ?></u></b></td>
			<td></td>
			<td align="center" style="text-transform: uppercase"><b><u><?php echo $rowss['nama_pejabat_desa']; ?></u></b></td>
		</tr>
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
  	}
?>