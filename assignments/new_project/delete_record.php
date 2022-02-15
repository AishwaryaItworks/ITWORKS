<?php
 require 'connection.php';
 require 'navbar.php';

 $id=$_GET['id'];

 $query="DELETE FROM users where user_id=".$id;

 if($mysqli->query($query)){
 	echo "<b>Record Deleted</b>";

 }
 else{
 	echo "<b>Failed</b>";
 }
?>