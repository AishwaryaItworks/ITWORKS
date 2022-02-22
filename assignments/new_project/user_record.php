<?php
require 'connection.php';
require 'navbar.php';
?>
<div class="container-fluid">
	<div class="col-md-9">
		<!-- <div class="container-fluid">
			<div class="row">
				<div class="col"> -->
					<?php if(isset($_SESSION['message'])): ?>
					<div class="alert alert-success">
						<?php echo $_SESSION['message']; ?>
					</div>
					<?php endif; ?>
					<?php unset($_SESSION['message']); ?>
				<!-- </div>
			</div>
		</div> -->
		
		<div class="well">
		<h3>User Details</h3>
	    </div>
		<a href="add_user.php"><button style="float:right;" type="button" class="btn bg-primary">Add User +</button></a>
		<br><br>
		
		
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
						
						  <a href="update_record.php?id=<?php echo $fetch_records['user_id'];?>">
          <button class="btn btn-primary">Update</button>
        </a>
						

						<!-- For delete record -->
						<button type="button" class="btn btn-danger" id="btn2" data-toggle="modal" data-target="#exampleModal_<?php echo $fetch_records['user_id']; ?>">
						Delete
						</button>
							
						<!-- Modal -->
						<div class="modal fade" id="exampleModal_<?php echo $fetch_records['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										Are you sure you want to delete this record?
									</div>
									<div class="modal-footer">
										<a href="delete_record.php?id=<?php echo $fetch_records['user_id'];?>"> 
											<button type="button" class="btn btn-danger">Yes</button>
											<button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
											
										</div>
									</div>
								</div>
							</div>
							
						<!--  -->
						</td>
					</tr>
					<?php  }?>
					
					
					
					
				</table>
			</div>
		</div>
		
	</div>
	<!-- </div> -->
</div>

<script>
    /*Remove the alert which are showing after few seconds*/
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
    </script>
