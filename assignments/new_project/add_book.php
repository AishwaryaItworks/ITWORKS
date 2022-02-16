<?php
 require 'connection.php';
 require 'navbar.php';


?>

<div class="new_font">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Add Book Details</h3>
</div>
<form id="myform" name="myform" action="db_fom_book.php" method="post">
    
        <div class="form-group">
          <label for="book_id">Book id</label>
          <input type="book_id" class="form-control" id="book_id" name="book_id">
        </div>
        <div class="form-group">
          <label for="book_name">Book name</label>
          <input type="text" class="form-control" id="book_name" name="book_name">
        </div>
      

    	<div class="form-group">
    	<label for="book_author">Book author</label>
    	<input type="text" class="form-control" id="book_author" name="book_author">
    	</div>
	
  	
    	<div class="form-group">
    	<label for="book_price">Book price</label>
    	<input type="text" class="form-control" id="book_price" name="book_price">
    	</div>

    
    	<div class="form-group">
      	<label for="user_id">User id</label>
      	<input type="text" class="form-control" id="user_id" name="user_id">
    	</div>
      
        <button type="submit" class="btn btn-primary">Add Book</button>
      
  </form>