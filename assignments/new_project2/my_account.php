<?php
require 'connection.php';
require 'navbar.php';

?>


<div class="col-md-9">
<div class="well">
<h3>&nbsp;&nbsp;<i class='fa fa-user'><?php
echo $_SESSION["user_email"];


/*$r=session_id();
echo "the session id: ".$r;
*/

?></i></h3>
</div>
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
				<th>User detail id</th>
				<th>User city</th>
				<th>User address</th>
				<th>User pincode</th>
				<!-- <th>Action</th> -->
			</tr>
		</thead>
		<?php

		

	/*SELECT user.*,user_details.* FROM user join user_details on user.user_id=user_details.user_id;*/

	/*SELECT user.*,user_details.* FROM user join user_details on user.user_id=user_details.user_id where user.user_email='shreya123@gmail.com';
		*/

   /* SELECT user.*,user_details.* FROM user RIGHT OUTER join user_details on user.user_id=user_details.user_id where user.user_email='shreya123@gmail.com';*/

		$user=$_SESSION['user_email'];

		$query="SELECT user.*,user_details.* FROM user RIGHT OUTER join user_details on user.user_id=user_details.user_id where user.user_email='$user'";

       /*$query="select * from user where user_email='$user'";*/
        $result=$mysqli->query($query);

		
		while($fetch_records=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $fetch_records['user_id']; ?></td>
			<td><?php echo $fetch_records['user_name']; ?></td>
			<td><?php echo $fetch_records['user_email']; ?></td>
			<td><?php echo $fetch_records['user_password']; ?></td>
			<td><?php echo $fetch_records['created_date']; ?></td>
			<td><?php echo $fetch_records['user_detail_id']; ?></td>
			<td><?php echo $fetch_records['user_city']; ?></td>
			<td><?php echo $fetch_records['user_address']; ?></td>
			<td><?php echo $fetch_records['user_pincode']; ?></td>
		
		
		</tr>
		<?php  }?>
		
		
		
		
	</table>
</div>

</div>
</div>

</body>
</html>
