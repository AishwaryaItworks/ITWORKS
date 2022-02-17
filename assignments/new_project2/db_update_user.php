<?php
require 'connection.php';
require 'navbar.php';

$user_id=$_POST['user_id'];
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	/*$created_date=$_POST['created_date'];*/
	/*$user_id=$_POST['user_id'];*/

	$query = "UPDATE user set user_name = '".$user_name."',user_email='".$user_email."',user_password='".$user_password."' where user_id = ".$user_id;


	if($mysqli->query($query)){
		echo "<b>record updated</b>";

	}
	else{
		echo "failed";
	}
?>