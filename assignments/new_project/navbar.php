<?php
session_start();
if($_SESSION['status']!=true){
  header("Location:login.php");
}
?> 
<html>
	<head>
		<title>header</title>
		<!--Bootstrap file-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!--Font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS file end-->
	</head>
	<body>
		
    <nav class="navbar navbar-inverse visible-xs">
     <!--  <div class="container-fluid"> -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></i></li>
            <li><a href="#">Book List</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      
    </nav>
    <!-- <div class="container"> -->
      <div class="row content sidebarheight">
        <div class="col-md-3 sidenav hidden-xs">
          <h2>Library<b>Online</b></h2>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="demo.php"><i class="fa fa-home icon-font">Home</i></a></li>
            <li><a href="book.php"><i class="fa fa-users icon-font">Book List</i></a></li>
            <li><a href="user_record.php"><i class="fa fa-users icon-font">Users</i></a></li>
            <li><a href="my_account.php"><i class="fa fa-align-justify icon-font">My Account</i></a></li>
            <li><a href="logout.php"><i class="fa fa-cog icon-font">Logout</i></a></li>
            
          </ul><br>

        </div>
        <div class="col-md-9">
        
    </div>
    

		
	
/*if(isset($_POST['logout'])){
	header("Location:logout.php");
} */
