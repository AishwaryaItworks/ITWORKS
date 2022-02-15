<?php
require 'connection.php';
require 'navbar.php';

     $user_id=$_POST['user_id'];
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	$created_date=$_POST['created_date'];

	$query="INSERT INTO USERS(user_id,user_name,user_email,user_password,created_date)VALUES('".$user_id."','".$user_name."','".$user_email."','".$user_password."','".$created_date."')";

  if($mysqli->query($query)){
  	echo "REcord Added";

  }
  
  else{
  	echo "Failed";
  }

?>