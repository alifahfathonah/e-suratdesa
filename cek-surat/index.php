<?php 
	include ('../config/koneksi.php');
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../assets/img/mini-logo.png">
	<title>e-SuratDesa</title>
  	<link rel="stylesheet" href="../assets/fontawesome-5.10.2/css/all.css">
	<link rel="stylesheet" href="../assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
	<navbar class="navbar navbar-expand-lg navbar-dark bg-info">
	  	<a class="navbar-brand ml-4 mt-1" href="../"><img src="../assets/img/e-SuratDesa.png"></a>
	  	<button class="navbar-toggler mr-4 mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    	<ul class="navbar-nav ml-auto mt-lg-3 mr-5 position-relative text-right">
	      		<li class="nav-item">
	        		<a class="nav-link" href="../">HOME</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="#">BUAT SURAT</a>
	      		</li>
	      		<li class="nav-item active">
	        		<a class="nav-link" href="#"><i class="fas fa-tasks"></i>&nbsp;CEK SURAT</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="../tentang/">TENTANG <b>e-SuratDesa</b></a>
	      		</li>
	      		<li class="nav-item active ml-5">
	      			<?php
						session_start();

						if(empty($_SESSION['username'])){
						    echo '<a class="btn btn-light text-info" href="../login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>';
						}else if(isset($_SESSION['lvl'])){
							echo '<a class="btn btn-transparent text-light" href="../admin/"><i class="fa fa-user-cog"></i> '; echo $_SESSION['lvl']; echo '</a>';
							echo '<a class="btn btn-transparent text-light" href="../login/logout.php"><i class="fas fa-power-off"></i></a>';
						}
					?>
	      		</li>
	    	</ul>
	  	</div>
	</navbar>
<div class="container-fluid">
	<div class="container shadow p-3 mb-5 mt-lg-5 bg-white rounded">
		<div style="max-height:cover; padding-top:30px; padding-bottom:60px; position:relative; min-height: 100%;">
			<div class="row">
		      <div class="col-md-12">
		        <table class="table table-hover table-active">
		          <thead>
		            <tr>
		              <th><strong>No</strong></th>
		              <th><strong>NIK</strong></th>
		              <th><strong>Nama</strong></th>
		              <th><strong>Jenis Surat</strong></th>
		              <th><strong>Status</strong></th>
		              <th><strong>Tanggal</strong></th>
		            </tr>
		          </thead>
		          <tbody>
		            <?php
		              $no=0;
		              $qTampil = mysqli_query($connect, "SELECT penduduk.nama, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='pending' 
		                UNION SELECT penduduk.nama, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='pending'
		                UNION SELECT penduduk.nama, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='pending' 
		                UNION SELECT penduduk.nama, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='pending'
		                UNION SELECT penduduk.nama, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.status_surat='selesai' 
		                UNION SELECT penduduk.nama, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.status_surat='selesai'
		                UNION SELECT penduduk.nama, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.status_surat='selesai' 
		                UNION SELECT penduduk.nama, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.status_surat='selesai'");
		                if ($qTampil->num_rows > 0){
		                  foreach ($qTampil as $row){
		                  	$no++; 
		            ?>
		                    <tr>
		                      <td><?php echo $no; ?></td>
		                      <td><?php echo $row['nik']; ?></td>
		                      <td><?php echo $row['nama']; ?></td>
		                      <td><?php echo $row['jenis_surat']; ?></td>
		                      <?php 
		                      	if($row['status_surat'] == 'pending'){
		                      ?>
		                      		<td><a class="btn btn-danger btn-sm" href='#'><i class="fa fa-spinner"> <?php echo $row['status_surat']; ?></i></a></td>
		                      <?php		
		                      	}else if($row['status_surat'] == 'selesai'){
							  ?>
		                      		<td><a class="btn btn-success btn-sm" href='#'><i class="fa fa-spinner"> <?php echo $row['status_surat']; ?></i></a></td>
		                      <?php	
		                      	}
		                      ?>
		                      
		                      <td><?php echo $row['tanggal_surat']; ?></td>
		                    </tr>
		            <?php 
		                  } 
		                }
		            ?>
		          </tbody>
		        </table>
		      </div>
		    </div>
		</div>
	</div>
</div>

<div class="footer bg-dark text-center">
    <span class="text-light"><strong>Copyright &copy; 2019 <a href="../" class="text-decoration-none text-white">e-SuratDesa</a>.</strong> All rights reserved.</span>
</div>
</body>
</html>