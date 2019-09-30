<?php  
	session_start();
	if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Administrator')){
?>
<a href="index.php">Kembali</a>
<?php  
	} else {
		include('../part/404-not-found.php');
	}
?>