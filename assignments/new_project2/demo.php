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
			
			<div class="col-md-4">
				<?php
				$query="SELECT * FROM user";
				$result=$mysqli->query($query);
					$count=mysqli_num_rows($result);
					if($count>0){
				?>
				<i class="fa fa-user fa-4x"></i>
				<h4>Total Book issued</h4>
				
				<?php
				echo " <b><h3>$count</h3></b>";
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
				<h4>Total User</h4>
				
				<?php
				echo " <b><h3>$count2</h3></b>";
				}
				?>
				
				
			</div>
			
		</div>
	</div>
</div>