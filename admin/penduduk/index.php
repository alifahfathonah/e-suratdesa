<?php 
  include ('../part/header.php');
?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../assets/img/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../dashboard/index.php">
            <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <i class="fa fa-users"></i> <span>Data Penduduk</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-envelope-open-text"></i> <span>&nbsp;&nbsp;Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="../surat/permintaan_surat/index.php">
                <i class="fa fa-circle-notch"></i> Permintaan Surat
              </a>
            </li>
            <li>
              <a href="../surat/surat_selesai/index.php"><i class="fa fa-circle-notch"></i> Surat Selesai
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../laporan/index.php">
            <i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penduduk
      </h1>
      <ol class="breadcrumb">
        <li><a href="../dashboard/index.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="active">Data Penduduk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">      
        <div class="row">
          <div class="col-md-12">
            <a class="btn btn-success btn-md" href='tambah-penduduk.php'><i class="fa fa-user-plus"></i> Tambah Data Penduduk</a>
            <a class="btn btn-danger btn-md" href='kosongkan-penduduk.php'><i class="fas fa-trash-alt"></i> Kosongkan Data Penduduk</a>
            <br><br>
            <table class="table table-striped table-bordered table-responsive" id="data-table" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th><strong>No</strong></th>
                  <th><strong>NIK</strong></th>
                  <th><strong>Nama</strong></th>
                  <th><strong>Tempat/Tgl Lahir</strong></th>
                  <th><strong>Jenis Kelamin</strong></th>
                  <th><strong>Agama</strong></th>
                  <th><strong>Alamat</strong></th>
<!--                   <th><strong>Aksi</strong></th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                  include ('../../config/koneksi.php');
                  $no = 1;
                  $qTampil = mysqli_query($connect, "SELECT * FROM penduduk");
                  foreach($qTampil as $row){
                ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nik']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['t_lahir']; ?></td>
                  <td><?php echo $row['j_kelamin']; ?></td>
                  <td><?php echo $row['agama']; ?></td>
<!--                   <td>
                    <a class="btn btn-success btn-sm" href='edit-anggota.php?id=<?php echo $row['id']; ?>'><i class="fa fa-edit"></i></a> 
                    <a class="btn btn-danger btn-sm" href='hapus-anggota.php?id=<?php echo $row['id']; ?>'><i class="fa fa-trash"></i></a>
                  </td> -->
                </tr>

                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include ('../part/footer.php');
?>