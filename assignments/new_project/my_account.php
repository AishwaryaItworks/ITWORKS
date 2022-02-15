<?php
require 'connection.php';
require 'navbar.php';

?>



<div class="well well-sm">
<h3>&nbsp;&nbsp;<i class='fa fa-user'><?php
echo $_SESSION["user_email"];


/*$r=session_id();
echo "the session id id: ".$r;*/


?></i></h3>
</div>


<div class="container-fluid">
<div class="col-md-9">
	<div class="table-responsive">
<table class="table table-bordered">
		<thead>
			<tr class="bg-warning">
				<th>User id</th>
				<th>User name</th>
				<th>User email</th>
				<th>User password</th>
				<th>Created date</th>
				<!-- <th>Action</th> -->
			</tr>
		</thead>
		<?php
		
		$user=$_SESSION['user_email'];

       $query="select * from users where user_email='$user'";
        $result=$mysqli->query($query);

		
		while($fetch_records=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $fetch_records['user_id']; ?></td>
			<td><?php echo $fetch_records['user_name']; ?></td>
			<td><?php echo $fetch_records['user_email']; ?></td>
			<td><?php echo $fetch_records['user_password']; ?></td>
			<td><?php echo $fetch_records['created_date']; ?></td>
		
		</tr>
		<?php  }?>
		
		
		
		
	</table>
</div>

</div>
</div>

</body>
</html>
