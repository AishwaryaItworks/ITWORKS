<?php
require 'connection.php';
require 'navbar.php';
?>

<div class="container-fluid">
<div class="col-md-9">
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>book_id</th>
				<th>book_name</th>
				<th>book_author</th>
				<th>book_price</th>
				<th>user_id</th>
				<!-- <th>Action</th> --><!--  -->
			</tr>
		</thead>
		<?php
		

		/*SELECT books.*,users.user_name FROM books join users on books.user_id=users.user_id;*/
		$query="SELECT * FROM books";
		$result=$mysqli->query($query);
		
		while($fetch_records=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $fetch_records['book_id']; ?></td>
			<td><?php echo $fetch_records['book_name']; ?></td>
			<td><?php echo $fetch_records['book_author']; ?></td>
			<td><?php echo $fetch_records['book_price']; ?></td>
			<td><?php echo $fetch_records['user_id']; ?></td>
			
		</tr>
		<?php  }?>
		
		
		
		
	</table>
	<a href="book_record.php"><button type="button">show users name issued book</button></a>
</div>
</div>
<!-- </div> -->