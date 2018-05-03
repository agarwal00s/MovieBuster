<?php
	session_start();
	$user=$_POST['email'];
	$pass=$_POST['pass'];
	$conn=new mysqli("localhost","root","","movie");
	$sql="select name from user_details where BINARY email_id='".$user."' and BINARY password='".$pass."'";
	$row=$conn->query($sql);
	$us=mysqli_fetch_array($row);
	$count=mysqli_num_rows($row);
	if($count==0)
		echo "1";
	else{
			$_SESSION['useremail']=$user;
			
			echo "0";
	}
	$conn->close();
?>
