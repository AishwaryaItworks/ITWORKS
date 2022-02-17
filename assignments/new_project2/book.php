<?php
require 'connection.php';
require 'navbar.php';
?>

<div class="container-fluid">
<div class="col-md-9">
	<h3>Book Details</h3>
	<div class="table-responsive">
	<table class="table table-bordered ">
		<thead>
			<tr class="bg-warning">
				<th>Book id</th>
				<th>Book name</th>
				<th>Book author</th>
				<th>Book price</th>
				<th>User id</th>
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
</div>
	<a href="book_record.php"><button type="button" class="btn btn-warning">Users Name Issued book</button></a>
	<a href="add_book.php"><button type="button" class="btn btn-primary">Add book record</button></a>
</div>
</div>
