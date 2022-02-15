<?php require 'navbar.php';
require 'connection.php';
?>
<div class="container-fluid">
	<div class="row">
		
		
		
		<div class="col-md-9">
			
			<div class="well well-sm">
				<nav class="navbar">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">HOME</a>
					</div>
				</nav>
			</div>
			<!-- <div class="col-sm-3 padding-0">
				<div class="rotate">
					<i class="fa fa-user fa-4x"></i>
				</div>
				<h6 class="text-uppercase">Total Insurance Agencies</h6>
				<h1 class="display-4">134</h1>
			</div> -->
			<div class="col-md-4">
				<?php
				$query="SELECT * FROM users";
				$result=$mysqli->query($query);
					$count=mysqli_num_rows($result);
					if($count>0){
				?>
				<i class="fa fa-user fa-4x"></i>
				<h3>Total Book issued</h3>
				
				<?php
				echo " <b>$count</b>";
				}
				?>
			</div>
			<div class="col-md-4">
				<?php
				$query2="SELECT * FROM books";
				$book_result=$mysqli->query($query2);
				$count2=mysqli_num_rows($book_result);
				
				
					if($count2>0){
				?>
				<i class="fa fa-user fa-4x"></i>
				<h3>Total User</h3>
				
				<?php
				echo " <b>$count2</b>";
				}
				?>
				
				
			</div>
			
		</div>
	</div>