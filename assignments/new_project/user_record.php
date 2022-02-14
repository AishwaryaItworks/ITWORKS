<?php
require 'connection.php';
require 'navbar.php';
?>
<div class="col-md-9">
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>user_id</th>
				<th>user_name</th>
				<th>user_email</th>
				<th>user_password</th>
				<th>created_date</th>
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
				<a href="update_record.php? id=<?php echo $fetch_records['user_id'];?>"><button type="button">Update</button></a>
				<a href="delete_record.php? id=<?php echo $fetch_records['user_id'];?>"><button type="button">Delete</button></a>
			</td>
		</tr>
		<?php  }?>
		
		
		
		
	</table>
</div>
<!-- </div> -->