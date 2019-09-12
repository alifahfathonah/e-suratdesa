<?php
	include ('../../config/koneksi.php');
	 
	$nik = $_POST['fnik'];
	 
	$qCekNik = mysqli_query($connect,"SELECT * FROM penduduk WHERE nik = '$nik'");
	$row = mysqli_num_rows($qCekNik);
	 
	if($row > 0){
		$data = mysqli_fetch_assoc($qCekNik);
		if($data['nik']==$nik){
?>
<?php 
  include ('../part/header.php');
?>
<body class="bg-light">
	<div class="container" style="max-height:cover; padding-top:60px;  padding-bottom:60px; position:relative; min-height: 100%;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<h5 class="card-header"><i class="fas fa-envelope"></i> Informasi Surat</h5>
					<br>
					<form method="post" action="aksi-surat.php">
						<h6 class="container-fluid" align="right"><i class="fas fa-user"></i> Informasi Pribadi</h6><hr width="97%">
						<div class="row">
						  	<div class="col-sm-6">
						      	<div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">NIK</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fnik" class="form-control" placeholder="NIK" disabled>
						           	</div>
						        </div>
						  	</div>
							<div class="col-sm-6">
							    <div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Nama</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fnama" class="form-control" placeholder="Nama" disabled>
						           	</div>
						        </div>
							</div>
							<div class="col-sm-6">
							    <div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Tempat, Tgl Lahir</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="ftempat_tgl_lahir" class="form-control" placeholder="Tempat, Tgl Lahir" disabled>
						           	</div>
						        </div>
							</div>
							<div class="col-sm-6">
							    <div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Jenis Kelamin</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fjenis_kelamin" class="form-control" placeholder="Jenis Kelamin" disabled>
						           	</div>
						        </div>
							</div>
						</div>
						<div class="row">
						  	<div class="col-sm-6">
						      	<div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Alamat</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="falamat" class="form-control" placeholder="Alamat" disabled>
						           	</div>
						        </div>
						  	</div>
							<div class="col-sm-6">
							    <div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Agama</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fagama" class="form-control" placeholder="Agama" disabled>
						           	</div>
						        </div>
							</div>
							<div class="col-sm-6">
							    <div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Pekerjaan</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fpekerjaan" class="form-control" placeholder="Pekerjaan" disabled>
						           	</div>
						        </div>
							</div>
							<div class="col-sm-6">
							    <div class="form-group">
						           	<label class="col-sm-5" style="font-weight: 500;">Kewarganegaraan</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fkewarganegaraan" class="form-control" placeholder="Kewarganegaraan" disabled>
						           	</div>
						        </div>
							</div>
						</div>
						<br>
						<h6 class="container-fluid" align="right"><i class="fas fa-user"></i> Informasi Pribadi</h6><hr width="97%">
						<div class="row">
						  	<div class="col-sm-12">
						      	<div class="form-group">
						           	<label class="col-sm-12" style="font-weight: 500;">Keperluan</label>
						           	<div class="col-sm-12">
						               	<input type="text" name="fkeperluan" class="form-control" placeholder="Keperluan">
						           	</div>
						        </div>
						  	</div>
						</div>
						<hr width="97%">
						<div class="container-fluid">
		                	<input type="reset" class="btn btn-warning" value="Batal">
		                	<input type="submit" name="submit" class="btn btn-info" value="Submit">
		              	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?php 
  include ('../part/footer.php');
?>
<?php
		}
	}else{
		header("location:index.php?pesan=gagal");
	}
?>