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
          <img src="../../../assets/img/user.jpg" class="img-circle" alt="User Image">
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
          <a href="../../dashboard/index.php">
            <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../../penduduk/index.php">
            <i class="fa fa-users"></i> <span>Data Penduduk</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fas fa-envelope-open-text"></i> <span>&nbsp;&nbsp;Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="../../surat/permintaan_surat/index.php">
                <i class="fa fa-circle-notch"></i> Permintaan Surat
              </a>
            </li>
            <li class="active">
              <a href="#"><i class="fa fa-circle-notch"></i> Surat Selesai
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../../laporan/index.php">
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
        Surat Selesai
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../dashboard/index.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="active">Surat</li>
        <li class="active">Surat Selesai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      KONTEN

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include ('../part/footer.php');
?>