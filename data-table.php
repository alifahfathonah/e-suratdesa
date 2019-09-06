<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th><strong>No</strong></th>
					<th><strong>NIK</strong></th>
					<th><strong>Nama</strong></th>
					<th><strong>Tempat Lahir</strong></th>
					<th><strong>Jenis Kelamin</strong></th>
					<th><strong>Agama</strong></th>
				</tr>
			</thead>
			<tbody>
                <?php
                  	include ('config/koneksi.php');
	                $no = 1;
					$qTampil = mysqli_query($connect, "SELECT * FROM penduduk");
					while($row = mysqli_fetch_assoc($qTampil)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nik'].'</td>
							<td>'.$row['nama'].'</td>
							<td>'.$row['t_lahir'].'</td>
							<td>'.$row['j_kelamin'].'</td>
							<td>'.$row['agama'].'</td>
						</tr>
						';
						$no++;
					}
				?>
            </tbody>
 		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script>
	    $(document).ready(function(){
	        $('#tabel-data').DataTable();
	    });
	</script>
</body>
</html>