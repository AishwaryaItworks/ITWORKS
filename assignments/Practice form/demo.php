<!-- start of php code
session_start();

if($_SESSION['status']!=true){
	header("Location:login.php");
}
?> end of code-->

<!DOCTYPE html>
<html>
	<head>
		<title>demo file</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<?php require 'navbar.php';
					?>
				</div>
				<div class="col-md-9">
					<nav class="navbar navbar-default">
						<!-- <div class="container-fluid"> -->
						
						<!-- Brand/logo -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-1" aria-expanded="false">
							<span class="sr-only">Dashboard</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

							</button>
							<a class="navbar-brand" href="#">Dashboard</a>
						</div>
						
						<!-- Collapsible Navbar -->
						<div class="collapse navbar-collapse" id="example-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Link 1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Link 2</a></li>
								<li><a href="#">Link 3</a></li>
								<li><a href="#"><i class="fa fa-sign-out icon-font"> Log out</i></a></li>
							</ul>
						</div>
						
						
					</nav>
					<!-- <div class="well well-sm">
							<nav class="navbar navbar-nav">
									<div class="navbar-header">
											<a class="navbar-brand" href="#">Dashboard</a>
									</div>
									<ul class="nav navbar-nav navbar-right">
											<li class="active"><a href="#">Home</a></li>-
											<li class="dropdown"><a class=" btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user icon-font"> CW Admin</i><span class="caret"></span></a>
											<ul class="dropdown-menu">
													<li><a href="#"><i class="fa fa-cogs icon-font"> Account Settings</i></a></li>
													<li><a href="#"><i class="fa fa-sign-out icon-font"> Log out</i></a></li>
											</ul>
									</li>
							</ul>
							
					</nav>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>