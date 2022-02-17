<?php
require 'connection.php';
require 'navbar.php';

     /*$book_id=$_POST['book_id'];*/
	$book_name=$_POST['book_name'];
	$book_author=empty($_POST['book_author']) ? "null" : $_POST['book_author'];

	/*$book_author=$_POST['book_author'];*/
	$book_price=$_POST['book_price'];
	$user_id=$_POST['user_id'];

	$query="INSERT INTO books(book_name,book_author,book_price,user_id)VALUES('".$book_name."','".$book_author."','".$book_price."','".$user_id."')";

  if($mysqli->query($query)){
  	echo "     Record Added";

  }
  
  else{
  	echo "    Fail To Add Record";
  }

?>