<?php 
  include ('part/header.php');
?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../../../assets/img/user.jpg" class="img-circle" alt="User Image">
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
          <a href="../../../dashboard/index.php">
            <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="../../../penduduk/index.php">
            <i class="fa fa-users"></i><span>&nbsp;Data Penduduk</span>
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
              <a href="../index.php">
                <i class="fa fa-circle-notch"></i> Permintaan Surat
              </a>
            </li>
            <li>
              <a href="../../surat_selesai/index.php"><i class="fa fa-circle-notch"></i> Surat Selesai
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../../../laporan/index.php">
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
      <h1>&nbsp;</h1>
      <ol class="breadcrumb">
        <li><a href="../dashboard/index.php"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="active">Permintaan Surat</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">      
        <div class="row">
          <div class="col-md-12">
            <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fas fa-envelope"></i> Konfirmasi Surat</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form class="form-horizontal" method="post" action="#">
            <div class="col-md-6">
              <!-- form start -->
            
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">NIK</label>

                  <div class="col-sm-9">
                    <input type="text" name="fnik" class="form-control" placeholder="NIK">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama</label>

                  <div class="col-sm-9">
                    <input type="text" name="fnama" class="form-control" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tempat Lahir</label>

                  <div class="col-sm-9">
                    <input type="text" name="ft_lahir" class="form-control" placeholder="Tempat Lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Kelamin</label>

                  <div class="col-sm-9">
                    <input type="text" name="fj_kelamin" class="form-control" placeholder="Jenis Kelamin">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Agama</label>

                  <div class="col-sm-9">
                    <input type="text" name="fagama" class="form-control" placeholder="Agama">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer pull-right">
                <input type="reset" class="btn btn-default" value="Batal">
                <input type="submit" name="submit" class="btn btn-info" value="Submit">
              </div>
              <!-- /.box-footer -->
            
            </div>
            <!-- /.col -->
            </form>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
      </div>
      <!-- /.box -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include ('part/footer.php');
?>