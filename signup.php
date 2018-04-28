<?php
	session_start();
	$alliswell=true;
	$name=$_POST['fullname'];
	$email=$_POST['emailid'];
	$pass=$_POST['password'];
	$conn=new mysqli("localhost","root","","movie");
	$sql="select email_id from user_details where email_id='".$email."'";
	$row=$conn->query($sql);
	$us=mysqli_fetch_array($row);
	if($us[0]==$email){
		echo "2";
		$alliswell=false;
	}
	if($alliswell==true)
	{
	$sql="insert into user_details values('".$name."','".$email."','".$pass."','')";
			$conn->query($sql);
			$conn->close();
	}
	
?>