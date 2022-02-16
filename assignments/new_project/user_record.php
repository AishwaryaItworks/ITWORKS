<?php
require 'connection.php';
require 'navbar.php';
?>


<div class="container-fluid">

<div class="col-md-9">
    
	<h3>User Details</h3><br>&nbsp;
	<a href="add_user.php"><button type="button" class="btn bg-primary">Add User +</button></a>
    
	

	<div class="table-responsive">
	<table class="table table-bordered ">
		<thead>
			<tr class="bg-warning">
				<th>User id</th>
				<th>User name</th>
				<th>User email</th>
				<th>User password</th>
				<th>Created Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
		
		$query="SELECT * FROM users";
		$result=$mysqli->query($query);
		
		while($fetch_records=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $fetch_records['user_id']; ?></td>
			<td><?php echo $fetch_records['user_name']; ?></td>
			<td><?php echo $fetch_records['user_email']; ?></td>
			<td><?php echo $fetch_records['user_password']; ?></td>
			<td><?php echo $fetch_records['created_date']; ?></td>
			<td>
				<a href="update_record.php? id=<?php echo $fetch_records['user_id'];?>"><button type="button" class="btn bg-primary">Update</button></a>
				<a href="delete_record.php? id=<?php echo $fetch_records['user_id'];?>"><button type="button"class="btn btn-danger">Delete</button></a>
			</td>
		</tr>
		<?php  }?>
		
		
		
		
	</table>
</div>
</div>
<!-- </div> -->
</div>
<!-- </div> -->