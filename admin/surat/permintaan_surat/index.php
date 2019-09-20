<?php
  include ('../part/akses.php');
  include ('../part/header.php');
?>

<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../../../assets/img/user.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="../../dashboard/">
          <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
        </a>
      </li>
      <li>
        <a href="../../penduduk/">
          <i class="fa fa-users"></i> <span>Data Penduduk</span>
        </a>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fas fa-envelope-open-text"></i> <span>&nbsp;&nbsp;Surat</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li class="active">
            <a href="#">
              <i class="fa fa-circle-notch"></i> Permintaan Surat
            </a>
          </li>
          <li>
            <a href="../../surat/surat_selesai/">
              <i class="fa fa-circle-notch"></i> Surat Selesai
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="../../laporan/">
          <i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span>
        </a>
      </li>
    </ul>
  </section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
    <h1>Permintaan Surat</h1>
    <ol class="breadcrumb">
      <li><a href="../../dashboard/"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="active">Permintaan Surat</li>
    </ol>
  </section>
  <section class="content">      
    <div class="row">
      <div class="col-md-12">
        <br><br>
        <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th><strong>NIK</strong></th>
              <th><strong>Nama</strong></th>
              <th><strong>Jenis Surat</strong></th>
              <th><strong>Status</strong></th>
              <th><strong>Tanggal</strong></th>
              <th><strong>Aksi</strong></th>
            </tr>
          </thead>
          <tbody>
            <?php
              include ('../../../config/koneksi.php');

              $no = 1;
              $qTampil = mysqli_query($connect, "SELECT * FROM surat_keterangan WHERE status_surat='pending' UNION SELECT * FROM surat_keterangan_berkelakuan_baik WHERE status_surat='pending' UNION SELECT * FROM surat_keterangan_domisili WHERE status_surat='pending' UNION SELECT * FROM surat_keterangan_usaha WHERE status_surat='pending'");
              foreach($qTampil as $row){
            ?>
            <tr>
              <td><?php echo $row['nik']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['jenis_surat']; ?></td>
              <td><a class="btn btn-danger btn-sm" href='#'><i class="fa fa-spinner"> <?php echo $row['status_surat']; ?></i></a></td>
              <td><?php echo $row['tanggal_surat']; ?></td>
              <td>
                <?php  
                  if($row['jenis_surat']=="Surat Keterangan"){
                ?>
                <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"> KONFIRMASI</i></a>
                <?php
                  } else if($row['jenis_surat']=="Surat Keterangan Berkelakuan Baik"){
                ?>
                <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_berkelakuan_baik/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"> KONFIRMASI</i></a>
                <?php
                  } else if($row['jenis_surat']=="Surat Keterangan Domisili"){
                ?>
                <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_domisili/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"> KONFIRMASI</i></a>
                <?php
                  } else if($row['jenis_surat']=="Surat Keterangan Usaha"){
                ?>
                <a class="btn btn-success btn-sm" href='konfirmasi/surat_keterangan_usaha/index.php?id=<?php echo $row['id_sk']; ?>'><i class="fa fa-check"> KONFIRMASI</i></a>
                <?php
                  }
                ?>
              </td>
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