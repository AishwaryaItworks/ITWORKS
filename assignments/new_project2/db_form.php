<?php
require 'connection.php';
require 'navbar.php';
     
     /*Add user*/
     $user_id=$_POST['user_id'];
	$user_name=$_POST['user_name'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];
	
	/*Add user_details*/
     $user_detail_id=$_POST['user_detail_id'];
	$user_city=$_POST['user_city'];
	$user_address=$_POST['user_address'];
	$user_pincode=$_POST['user_pincode'];
	$user_id=$_POST['user_id'];
	
	
     /*insert values into user table*/
	$query="INSERT INTO user(user_id,user_name,user_email,user_password)VALUES('".$user_id."','".$user_name."','".$user_email."','".$user_password."')";

     /*Execute mysql query*/
	$res=$mysqli->query($query);

     /*select user_id from user table*/
     $query3="SELECT user_id from user where user_email='$user_email' && user_password='$user_password'";

    /*execute query*/
     $query_result=$mysqli->query($query3);
     $res3=mysqli_fetch_array($query_result);
     /*echo $res3;*/
     $use_id=$res3['user_id'];


	$query2="INSERT INTO user_details(user_city,user_address,user_pincode,user_id)VALUES('".$user_city."','".$user_address."','".$user_pincode."','".$use_id."')";

    
    $res1=$mysqli->query($query2);

  if($res && $res1){

  	$_SESSION['message'] = "Record is Added!!!";
            header("Location: user_record.php");
  	/*echo "     Record Added";*/

  }
  
  else{
  	$_SESSION['message'] = "Fail to add Record!!!";
            header("Location: user_record.php");
  	/*echo "     Failed";*/
  }

?>