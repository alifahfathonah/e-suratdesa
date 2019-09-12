<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-SuratDesa</title>
	<!-- Font Awesome v5.8.2 -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			background:url('assets/img/background.jpg');/* sesuaikan dengan gambar kalian */
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
	  <a class="navbar-brand ml-4 mt-3" href="index.php" style="font-size:25pt">e-<b>SuratDesa</b></a>
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
	        <a class="btn btn-dark" href="login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>
	      </li>
	    </ul>
	  </div>
	</navbar>
</div>
<div class="container" style="max-height:cover; padding-top:70px; padding-bottom:120px" align="center">
	<img src="assets/img/logo-jombang.png"><hr>
	<a class="text-light" style="font-size:15pt"><strong>Web Aplikasi Pelayanan Surat Desa</strong></a><br>
	<a class="text-light" style="font-size:15pt"><strong>Kabupaten Jombang</strong></a><hr>
	<a href="surat/" class="btn btn-outline-light" style="font-size:15pt"><i class="fas fa-envelope"></i> BUAT SURAT</a>
</div>
<div class="footer bg-transparent text-center mb-3 ">
    	<span class="text-light"><strong>Copyright &copy; 2019 <a href="#" class="text-decoration-none text-white">e-SuratDesa</a>.</strong> All rights reserved.</span>
</div>
</body>
</html>