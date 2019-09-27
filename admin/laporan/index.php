<?php
    include ('../part/akses.php');
  	include ('../part/header.php');
?>

<aside class="main-sidebar">
   	<section class="sidebar">
   		<div class="user-panel">
       		<div class="pull-left image">
       			<img src="../../assets/img/user.jpg" class="img-circle" alt="User Image">
       		</div>
       		<div class="pull-left info">
       			<p>Administrator</p>
       			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       		</div>
   		</div>
   		<ul class="sidebar-menu" data-widget="tree">
      		<li class="header">MAIN NAVIGATION</li>
       		<li>
       			<a href="../dashboard/"><i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span></a>
       		</li>
       		<li>
       			<a href="../penduduk/"><i class="fa fa-users"></i> <span>Data Penduduk</span></a>
       		</li>
       		<li class="treeview">
       			<a href="#"><i class="fas fa-envelope-open-text"></i> <span>&nbsp;&nbsp;Surat</span>
           			<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
       			</a>
       			<ul class="treeview-menu">
           			<li>
           				<a href="../surat/permintaan_surat/"><i class="fa fa-circle-notch"></i> Permintaan Surat</a>
           			</li>
           			<li>
           				<a href="../surat/surat_selesai/"><i class="fa fa-circle-notch"></i> Surat Selesai</a>
           			</li>
       			</ul>
       		</li>
       		<li class="active">
       			<a href="#"><i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span></a>
       		</li>
		</ul>
	</section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
   	<h1>Laporan Surat Administrasi Desa - Surat Keluar</h1>
    <ol class="breadcrumb">
     	<li><a href="../dashboard/"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
     	<li class="active">Laporan</li>
    </ol>
  </section>
  <section class="content">      
    <div class="row">
      <div class="col-md-12">
        <a target="_blank" class="btn btn-primary btn-md" href='export-excel.php'><i class="fas fa-print"></i> Cetak Laporan</a>
        <br><br>
        <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
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
      </div>
    </div>
  </section>
</div>

<?php 
  	include ('../part/footer.php');
?>