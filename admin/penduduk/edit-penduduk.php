<?php 
  include ('../part/akses.php');
  include ('../../config/koneksi.php');
  include ('../part/header.php');

  $id = $_GET['id'];
  $qCek = mysqli_query($connect,"SELECT * FROM penduduk WHERE id_penduduk='$id'");
  while($row = mysqli_fetch_array($qCek)){
?>

<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <?php  
          if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Administrator')){
            echo '<img src="../../assets/img/ava-admin-female.png" class="img-circle" alt="User Image">';
          }else if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Kepala Desa')){
            echo '<img src="../../assets/img/ava-kades.png" class="img-circle" alt="User Image">';
          }
        ?>
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['lvl']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="../dashboard/">
          <i class="fas fa-tachometer-alt"></i> <span>&nbsp;&nbsp;Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="../penduduk/">
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
            <a href="../surat/permintaan_surat/">
              <i class="fa fa-circle-notch"></i> Permintaan Surat
            </a>
          </li>
          <li>
            <a href="../surat/surat_selesai/"><i class="fa fa-circle-notch"></i> Surat Selesai
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="../laporan/">
          <i class="fas fa-chart-line"></i> <span>&nbsp;&nbsp;Laporan</span>
        </a>
      </li>
    </ul>
  </section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb">
      <li><a href="../dashboard/"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="active">Data Penduduk</li>
    </ol>
  </section>
  <section class="content">      
    <div class="row">
      <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fas fa-edit"></i> Edit Data Penduduk</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="row">
              <form class="form-horizontal" method="post" action="update-penduduk.php">
                <div class="col-md-6">
                  <div class="box-body">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id_penduduk']; ?>">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">NIK</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnik" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $row['nik']; ?>" required>
                        <script>
                          function hanyaAngka(evt){
                            var charCode = (evt.which) ? evt.which : event.keyCode
                            if (charCode > 31 && (charCode < 48 || charCode > 57))
                            return false;
                            return true;
                          }
                        </script>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama" class="form-control" style="text-transform: capitalize;" placeholder="Nama" value="<?php echo $row['nama']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" name="ftempat_lahir" class="form-control" style="text-transform: capitalize;" value="<?php echo $row['tempat_lahir']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                        <input type="date" name="ftgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <select name="fjenis_kelamin" class="form-control" value="<?php echo $row['jenis_kelamin']; ?>" required>
                          <option value="">--Jenis Kelamin--</option>
                          <option <?php if($row['jenis_kelamin'] == 'Laki-laki'){ echo 'selected'; } ?> value="Laki-laki">Laki-laki</option>
                          <option <?php if($row['jenis_kelamin'] == 'Perempuan'){ echo 'selected'; } ?> value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Agama</label>
                      <div class="col-sm-8">
                        <input type="text" name="fagama" class="form-control" style="text-transform: capitalize;" placeholder="Agama" value="<?php echo $row['agama']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jalan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fjalan" class="form-control" style="text-transform: capitalize;" placeholder="Jalan" value="<?php echo $row['jalan']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dusun</label>
                      <div class="col-sm-8">
                        <select name="fdusun" class="form-control" style="text-transform: capitalize;" required>
                          <option value="">-- Dusun --</option>
                          <?php
                            $selectedDusun = $row['dusun'];
                            $qTampilDusun = "SELECT * FROM dusun";
                            $tampilDusun = mysqli_query($connect, $qTampilDusun);
                            while($rows = mysqli_fetch_assoc($tampilDusun)){
                              if($rows['nama_dusun'] == $selectedDusun){
                          ?>
                          <option value="<?php echo $rows['nama_dusun']; ?>" selected="selected"><?php echo $rows['nama_dusun']; ?></option>
                          <?php
                              }else{
                          ?>
                          <option value="<?php echo $rows['nama_dusun']; ?>"><?php echo $rows['nama_dusun']; ?></option>
                          <?php
                              }
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">RT</label>
                      <div class="col-sm-8">
                        <select name="frt" class="form-control" value="<?php echo $row['rt']; ?>" required>
                          <option value="">-- RT --</option>
                          <option <?php if($row['rt'] == '001'){ echo 'selected'; } ?> value="001">001</option>
                          <option <?php if($row['rt'] == '002'){ echo 'selected'; } ?> value="002">002</option>
                          <option <?php if($row['rt'] == '003'){ echo 'selected'; } ?> value="003">003</option>
                          <option <?php if($row['rt'] == '004'){ echo 'selected'; } ?> value="004">004</option>
                          <option <?php if($row['rt'] == '005'){ echo 'selected'; } ?> value="005">005</option>
                          <option <?php if($row['rt'] == '006'){ echo 'selected'; } ?> value="006">006</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">RW</label>
                      <div class="col-sm-8">
                        <select name="frw" class="form-control" value="<?php echo $row['rw']; ?>" required>
                          <option value="">-- RW --</option>
                          <option <?php if($row['rw'] == '001'){ echo 'selected'; } ?> value="001">001</option>
                          <option <?php if($row['rw'] == '002'){ echo 'selected'; } ?> value="002">002</option>
                          <option <?php if($row['rw'] == '003'){ echo 'selected'; } ?> value="003">003</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Desa</label>
                      <div class="col-sm-8">
                        <input type="text" name="fdesa" class="form-control" style="text-transform: capitalize;" placeholder="Desa" value="<?php echo $row['desa']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kecamatan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fkecamatan" class="form-control" style="text-transform: capitalize;" placeholder="Kecamatan" value="<?php echo $row['kecamatan']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kota</label>
                      <div class="col-sm-8">
                        <input type="text" name="fkota" class="form-control" style="text-transform: capitalize;" placeholder="Kota" value="<?php echo $row['kota']; ?>" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nomor KK</label>
                      <div class="col-sm-8">
                        <input type="text" name="fno_kk" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Nomor KK" value="<?php echo $row['no_kk']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan di KK</label>
                      <div class="col-sm-8">
                        <select name="fpend_kk" class="form-control" value="<?php echo $row['pend_kk']; ?>" required>
                          <option value="">-- Pendidikan di KK --</option>
                          <option <?php if($row['pend_kk'] == 'SD/SEDERAJAT'){ echo 'selected'; } ?> value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'SLTP/SEDERAJAT'){ echo 'selected'; } ?> value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'SLTA/SEDERAJAT'){ echo 'selected'; } ?> value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'D1/SEDERAJAT'){ echo 'selected'; } ?> value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'D2/SEDERAJAT'){ echo 'selected'; } ?> value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'D3/SEDERAJAT'){ echo 'selected'; } ?> value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'D4/SEDERAJAT'){ echo 'selected'; } ?> value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'S1/SEDERAJAT'){ echo 'selected'; } ?> value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'S2/SEDERAJAT'){ echo 'selected'; } ?> value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == 'S3/SEDERAJAT'){ echo 'selected'; } ?> value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                          <option <?php if($row['pend_kk'] == '-'){ echo 'selected'; } ?> value="-">-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan Terakhir</label>
                      <div class="col-sm-8">
                        <select name="fpend_terakhir" class="form-control" value="<?php echo $row['pend_terakhir']; ?>" required>
                          <option value="">-- Pendidikan Terakhir --</option>
                          <option <?php if($row['pend_terakhir'] == 'SD/SEDERAJAT'){ echo 'selected'; } ?> value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'SLTP/SEDERAJAT'){ echo 'selected'; } ?> value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'SLTA/SEDERAJAT'){ echo 'selected'; } ?> value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'D1/SEDERAJAT'){ echo 'selected'; } ?> value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'D2/SEDERAJAT'){ echo 'selected'; } ?> value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'D3/SEDERAJAT'){ echo 'selected'; } ?> value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'D4/SEDERAJAT'){ echo 'selected'; } ?> value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'S1/SEDERAJAT'){ echo 'selected'; } ?> value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'S2/SEDERAJAT'){ echo 'selected'; } ?> value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == 'S3/SEDERAJAT'){ echo 'selected'; } ?> value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                          <option <?php if($row['pend_terakhir'] == '-'){ echo 'selected'; } ?> value="-">-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pendidikan Ditempuh</label>
                      <div class="col-sm-8">
                        <select name="fpend_ditempuh" class="form-control" value="<?php echo $row['pend_ditempuh']; ?>" required>
                          <option value="">-- Pendidikan Ditempuh --</option>
                          <option <?php if($row['pend_ditempuh'] == 'SD/SEDERAJAT'){ echo 'selected'; } ?> value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'SLTP/SEDERAJAT'){ echo 'selected'; } ?> value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'SLTA/SEDERAJAT'){ echo 'selected'; } ?> value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'D1/SEDERAJAT'){ echo 'selected'; } ?> value="D1/SEDERAJAT">D1/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'D2/SEDERAJAT'){ echo 'selected'; } ?> value="D2/SEDERAJAT">D2/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'D3/SEDERAJAT'){ echo 'selected'; } ?> value="D3/SEDERAJAT">D3/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'D4/SEDERAJAT'){ echo 'selected'; } ?> value="D4/SEDERAJAT">D4/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'S1/SEDERAJAT'){ echo 'selected'; } ?> value="S1/SEDERAJAT">S1/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'S2/SEDERAJAT'){ echo 'selected'; } ?> value="S2/SEDERAJAT">S2/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == 'S3/SEDERAJAT'){ echo 'selected'; } ?> value="S3/SEDERAJAT">S3/SEDERAJAT</option>
                          <option <?php if($row['pend_ditempuh'] == '-'){ echo 'selected'; } ?> value="-">-</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Pekerjaan</label>
                      <div class="col-sm-8">
                        <input type="text" name="fpekerjaan" class="form-control" style="text-transform: capitalize;" placeholder="Pekerjaan" value="<?php echo $row['pekerjaan']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Perkawinan</label>
                      <div class="col-sm-8">
                        <select name="fstatus_perkawinan" class="form-control" value="<?php echo $row['status_perkawinan']; ?>" required>
                          <option value="">-- Status Perkawinan --</option>
                          <option <?php if($row['status_perkawinan'] == 'Belum Menikah'){ echo 'selected'; } ?> value="Belum Menikah">Belum Menikah</option>
                          <option <?php if($row['status_perkawinan'] == 'Menikah'){ echo 'selected'; } ?> value="Menikah">Menikah</option>
                          <option <?php if($row['status_perkawinan'] == 'Cerai'){ echo 'selected'; } ?> value="Cerai">Cerai</option>
                          <option <?php if($row['status_perkawinan'] == 'Cerai Mati'){ echo 'selected'; } ?> value="Cerai Mati">Cerai Mati</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Status Dlm Keluarga</label>
                      <div class="col-sm-8">
                        <select name="fstatus_dlm_keluarga" class="form-control" value="<?php echo $row['status_dlm_keluarga']; ?>" required>
                          <option value="">-- Status Dlm Keluarga --</option>
                          <option <?php if($row['status_dlm_keluarga'] == 'Ayah'){ echo 'selected'; } ?> value="Ayah">Ayah</option>
                          <option <?php if($row['status_dlm_keluarga'] == 'Ibu'){ echo 'selected'; } ?> value="Ibu">Ibu</option>
                          <option <?php if($row['status_dlm_keluarga'] == 'Anak'){ echo 'selected'; } ?> value="Anak">Anak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Kewarganegaraan</label>
                      <div class="col-sm-8">
                        <select name="fkewarganegaraan" class="form-control" value="<?php echo $row['kewarganegaraan']; ?>" required>
                          <option value="">-- Kewarganegaraan --</option>
                          <option <?php if($row['kewarganegaraan'] == 'WNI'){ echo 'selected'; } ?> value="WNI">WNI</option>
                          <option <?php if($row['kewarganegaraan'] == 'WNA'){ echo 'selected'; } ?> value="WNA">WNA</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama_ayah" class="form-control" style="text-transform: capitalize;" value="<?php echo $row['nama_ayah']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama Ibu</label>
                      <div class="col-sm-8">
                        <input type="text" name="fnama_ibu" class="form-control" style="text-transform: capitalize;" value="<?php echo $row['nama_ibu']; ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer pull-right">
                    <input type="reset" class="btn btn-default" value="Batal">
                    <input type="submit" name="submit" class="btn btn-info" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="box-footer">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
  }

  include ('../part/footer.php');
?>