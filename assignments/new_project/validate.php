<?php

session_start();

require 'connection.php';

if(isset($_POST["submit"])){
	$email=$_POST['user_email'];
	$password=$_POST['user_password'];
	$_SESSION['status']=false;

	$query="SELECT * FROM user where user_email='$email' and user_password='$password'";
	$result=$mysqli->query($query);
	$count=mysqli_num_rows($result);


	if($count>0)
	{
      $_SESSION["user_email"]=$email;
      $_SESSION["user_password"]=$password;
		$_SESSION["status"]=true;
		header("Location:demo.php");

	}
	else
	{
		header("Location:login.php?error=Invalid Credential");
		
	}


}
?>