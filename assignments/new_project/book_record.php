<?php
require 'connection.php';
require 'navbar.php';
?>

<div class="container-fluid">
<div class="col-md-9">
	<h3>Issued Books</h3>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr class="bg-warning">
				<th>Book id</th>
				<th>Book name</th>
				<th>Book author</th>
				<th>Book price</th>
				<th>User id</th>
				<th>User name</th>
				<!-- <th>Action</th> --><!--  -->
			</tr>
		</thead>
		<?php
		

		$query="SELECT books.*,users.user_name FROM books join users on books.user_id=users.user_id";
/*		$query="SELECT * FROM books";
*/		$result=$mysqli->query($query);
		
		while($fetch_records=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $fetch_records['book_id']; ?></td>
			<td><?php echo $fetch_records['book_name']; ?></td>
			<td><?php echo $fetch_records['book_author']; ?></td>
			<td><?php echo $fetch_records['book_price']; ?></td>
			<td><?php echo $fetch_records['user_id']; ?></td>
			<td><?php echo $fetch_records['user_name']; ?></td>
			
		</tr>
		<?php  }?>
		
		
		
		
	</table>
	
</div>
</div>
<!-- </div> -->