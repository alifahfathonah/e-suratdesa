<?php
	session_start();

	if(empty($_SESSION['username'])){
	    header("location:../../../");
	}else if(!isset($_SESSION['admin'])){
		header("location:../../../");
	}
?>