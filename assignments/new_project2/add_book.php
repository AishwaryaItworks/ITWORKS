<?php
 require 'connection.php';
 require 'navbar.php';


?>

<div class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
 <br/>
 <!-- <h3>&nbsp;&nbsp;Add User Details</h3> -->
 
 <form id="myform" name="myform" action="db_fom_book.php" method="post">
  <fieldset>
  <legend>Add Book details</legend>
  <div class="form-row">
    <!-- <div class="form-group col-md-6">
    <label for="user_name">Book Id</label>
    <input type="hidden" class="form-control" id="book_id" placeholder="book_id" name="book_id">
  </div> -->

  
    <div class="form-group col-md-6">
      <label for="book_name">Book name</label>
          <input type="text" class="form-control" id="book_name" name="book_name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="book_author">Book author</label>
      <input type="text" class="form-control" id="book_author" name="book_author">
    </div>
    
  <div class="form-group col-md-6">
    <label for="book_price">Book price</label>
      <input type="text" class="form-control" id="book_price" name="book_price">
  </div>
</div>
  

 <div class="form-row">
  <div class="form-group col-md-6">
    <label for="user_id">User id</label>
        <input type="text" class="form-control" id="user_id" name="user_id">
  </div>
</div>
 <div class="form-group col-md-6"> 
<button type="submit" class="btn btn-primary">Add Book</button>
</div>

</fieldset>
</form>

</div>




  