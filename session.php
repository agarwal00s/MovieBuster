<?php
	session_start();
	
	$_SESSION['moname']=$_POST['moviename'];
	$_SESSION['tname']=$_POST['theatername'];
	$_SESSION['mtime']=$_POST['movietime'];
	$_SESSION['dayno']=$_POST['dayn'];
	echo "1";
?>
