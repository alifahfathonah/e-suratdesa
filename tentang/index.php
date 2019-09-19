<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-SuratDesa</title>
	<link rel="stylesheet" href="../assets/fontawesome-5.10.2/css/all.css">
	<link rel="stylesheet" href="../assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div>
	<navbar class="navbar navbar-expand-lg navbar-dark bg-info">
	  	<a class="navbar-brand ml-4 mt-3" href="../" style="font-size:25pt">e-<b>SuratDesa</b></a>
	  	<button class="navbar-toggler mr-4 mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    	<ul class="navbar-nav ml-auto mt-lg-3 mr-5 position-relative text-right">
	      		<li class="nav-item">
	        		<a class="nav-link" href="../">HOME</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="../surat">BUAT SURAT</a>
	      		</li>
	      		<li class="nav-item active">
	        		<a class="nav-link" href="#"><i class="fas fa-info-circle"></i>&nbsp;TENTANG <b>e-SuratDesa</b></a>
	      		</li>
	      		<li class="nav-item active ml-5">
	        		<?php
						session_start();

						if(empty($_SESSION['username'])){
						    echo '<a class="btn btn-light text-info" href="../login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>';
						}else if(isset($_SESSION['admin'])){
							echo '<a class="btn btn-transparent text-light" href="../admin/"><i class="fa fa-user-cog"></i>&nbsp;admin</a>';
						}
					?>
	      		</li>
	    	</ul>
	  	</div>
	</navbar>
</div>
<div class="container-fluid">
	<div class="container shadow p-3 mb-5 mt-lg-5 bg-white rounded">
		<div style="max-height:cover; padding-top:30px; padding-bottom:60px; position:relative; min-height: 100%;">
			<div class="card-body">
				<div class="card-text">
					<p>
						<label style="font-weight: 700;font-size: 25px">APLIKASI SURAT</label>
						<hr>
						<blockquote>
							Web Aplikasi untuk pelayanan surat administrasi desa yang dikembangkan oleh <b><a href="#" style="text-decoration:none">Kelompok 12 PI FTI UNHASY - 2019</a></b> untuk mempermudah penduduk dalam pembuatan surat administrasi desa secara online.
							<br>
							<br>
						</blockquote>
					</p>
					<br>
					<br>
					<p class="card-text">
						<label style="font-weight: 700;font-size: 25px">HAK CIPTA DAN KETENTUAN</label>
					</p>
					<hr>
					© e-<b>SuratDesa</b> 2019. Hak Cipta Dilindungi.
					<br>
					<br>
					Trademark By <b><a href="#" style="text-decoration:none">Kelompok 12 PI FTI UNHASY - 2019</a></b>
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