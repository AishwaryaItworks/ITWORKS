<?php
require 'connection.php';
require 'navbar.php';
?>


<div class="container-fluid">

<div class="col-md-9">
    
	<h3>User Details</h3><br>
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
		
		$query="SELECT * FROM user";
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
				<a href="delete_record.php? id=<?php echo $fetch_records['user_id'];?>"><button type="button"class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button></a>
			</td>
		</tr>
		<?php  }?>
		
		
		
		
	</table>
</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->
</div>



<!-- </div> -->