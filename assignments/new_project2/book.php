<?php
require 'connection.php';
require 'navbar.php';
?>

<div class="container-fluid">
<div class="col-md-9">
	<div class="well">
	<h3>Book Details</h3>
</div>


<div class="container-fluid">
     <div class="row">
     <div class="col">
     <?php if(isset($_SESSION['message'])): ?>
     <div class="alert alert-success">
     <?php echo $_SESSION['message']; ?>
     </div>
<?php endif; ?>
<?php unset($_SESSION['message']); ?>
     </div>
     </div>
    </div>


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

		$book_join="SELECT books.*,user.user_name from books RIGHT OUTER JOIN user on books.book_id=user.user_id";
		
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

<script>
    /*Remove the alert which are showing after few seconds*/
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
    </script>
