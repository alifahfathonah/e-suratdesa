<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../assets/img/mini-logo.png">
	<title>e-SuratDesa</title>
	<link rel="stylesheet" href="../../assets/fontawesome-5.10.2/css/all.css">
	<link rel="stylesheet" href="../../assets/bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
 	<navbar class="navbar navbar-expand-lg navbar-dark bg-info">
   	<a class="navbar-brand ml-4 mt-1" href="../../"><img src="../../assets/img/e-SuratDesa.png"></a>
   	<button class="navbar-toggler mr-4 mt-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
   		<span class="navbar-toggler-icon"></span>
   	</button>
   	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
   		<ul class="navbar-nav ml-auto mt-lg-3 mr-5 position-relative text-right">
     		<li class="nav-item">
     			<a class="nav-link" href="../../">HOME</a>
     		</li>
     		<li class="nav-item active">
     			<a class="nav-link" href="#"><i class="fas fa-envelope"></i>&nbsp;BUAT SURAT</a>
     		</li>
     		<li class="nav-item">
     			<a class="nav-link" href="../../tentang/">TENTANG <b>e-SuratDesa</b></a>
     		</li>
    		<li class="nav-item active ml-5">
          <?php
            session_start();

            if(empty($_SESSION['username'])){
                echo '<a class="btn btn-light text-info" href="../../login/"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</a>';
            }else if(isset($_SESSION['lvl'])){
              echo '<a class="btn btn-transparent text-light" href="../../admin/"><i class="fa fa-user-cog"></i> '; echo $_SESSION['lvl']; echo '</a>';
              echo '<a class="btn btn-transparent text-light" href="../../login/logout.php"><i class="fas fa-power-off"></i></a>';
            }
          ?>
        </li>
   		</ul>
   	</div>
 	</navbar>