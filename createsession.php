<?php
	session_start();
	$_SESSION['movietotal']=$_POST['cost'];
	$_SESSION['moviedetails']=$_POST['moviedetail'];
	echo "1";
?>