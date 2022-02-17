<?php
 require 'connection.php';
 require 'navbar.php';

 $id=$_GET['id'];

 $query="DELETE FROM user where user_id=".$id;

 if($mysqli->query($query)){

    $_SESSION['message'] = "Record Got Deleted!!!";
            header("Location: user_record.php");
 	/*echo "<b>Record Deleted</b>"*/;

 }
 else{
 	$_SESSION['message'] = "Fail to delete Record!!!";
            header("Location: user_record.php");
 }
?>