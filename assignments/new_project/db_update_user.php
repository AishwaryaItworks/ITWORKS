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

		$_SESSION['message'] = "Record Got Updated!!!";
            header("Location: user_record.php");
		
S
	}
	else{

		$_SESSION['message'] = "fail to update Record";
            header("Location: user_record.php");
		
	}
?>