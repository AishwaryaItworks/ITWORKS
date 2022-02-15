<?php
 require 'connection.php';
 require 'navbar.php';


?>
<form id="my_form" name="my_form" action="db_form.php" method="post">
    
        <div class="form-group">
          <!-- <label for="user_name">User Id</label> -->
          <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id">
        </div>
        <div class="form-group">
          <label for="user_name">User Name</label>
          <input type="text" class="form-control" id="user_name" placeholder="user_name" name="user_name">
        </div>
      

    	<div class="form-group">
    	<label for="user_email">User Email</label>
    	<input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email">
    	</div>
	
  	
    	<div class="form-group">
    	<label for="user_password">User Password</label>
    	<input type="password" class="form-control" id="user_password" placeholder="Password" name="user_password">
    	</div>

    
    	<div class="form-group">
      	<label for="created_date">Created Date</label>
      	<input type="date" class="form-control" id="created_date" name="created_date">
    	</div>
      
        <button type="submit" class="btn btn-primary">Add user</button>
      
  </form>