<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets/img/mini-logo.png">
	<title>e-SuratDesa</title>
  	<link rel="stylesheet" href="assets/fontawesome-5.10.2/css/all.css">
	<link rel="stylesheet" href="assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background:url('assets/img/background.jpg');
			height: 100%;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    background-attachment:fixed;
		}
	</style>
</head>
<body>
<div>
	<navbar class="navbar navbar-expand-lg navbar-dark bg-transparent">
	  	<a class="navbar-brand ml-4 mt-1" href="#"><img src="assets/img/e-SuratDesa.png"></a>
	  	<button class="navbar-toggler mr-4 mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    	<ul class="navbar-nav ml-auto mt-lg-3 mr-5 position-relative text-right">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="#"><i class="fas fa-home"></i>&nbsp;HOME</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="surat/">BUAT SURAT</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="tentang/">TENTANG <b>e-SuratDesa</b></a>
	      		</li>
	      		<li class="nav-item active ml-5">
	      			<?php
						session_start();

						if(empty($_SESSION['username'])){
						    echo '<a class="btn btn-dark" href="login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>';
						}else if(isset($_SESSION['lvl'])){
							echo '<a class="btn btn-transparent text-light" href="admin/"><i class="fa fa-user-cog"></i> '; echo $_SESSION['lvl']; echo '</a>';
							echo '<a class="btn btn-transparent text-light" href="login/logout.php"><i class="fas fa-power-off"></i></a>';
						}
					?>
	      		</li>
	    	</ul>
	  	</div>
	</navbar>
</div>
<div class="container" style="max-height:cover; padding-top:50px; padding-bottom:120px" align="center">
	<img src="assets/img/logo-jombang.png"><hr>
	<a class="text-light" style="font-size:18pt"><strong>WEB APLIKASI PELAYANAN SURAT ADMINISTRASI DESA</strong></a><br>
	<?php  
		include('config/koneksi.php');

        $qTampilDesa = mysqli_query($connect, "SELECT * FROM profil_desa WHERE id_profil_desa = '1'");
        foreach($qTampilDesa as $row){
    ?>
	<a class="text-light" style="font-size:15pt; text-transform: uppercase;"><strong>DESA <?php echo $row['nama_desa']; ?></strong><br>
	<a class="text-light" style="font-size:15pt; text-transform: uppercase;"><strong><?php echo $row['kota']; ?></strong></a><hr>
	<?php  
		}
	?>
	<a href="surat/" class="btn btn-outline-light" style="font-size:15pt"><i class="fas fa-envelope"></i> BUAT SURAT</a>
</div>
<div class="footer bg-transparent text-center mb-3 ">
    <span class="text-light"><strong>Copyright &copy; 2019 <a href="#" class="text-decoration-none text-white">e-SuratDesa</a>.</strong> All rights reserved.</span>
</div>
</body>
</html>