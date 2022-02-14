<?php
require 'connection.php';
require 'navbar.php';
/*require 'navbar.php';
*/$query="SELECT * FROM users where user_id=".$_GET['id'];
$result=$mysqli->query($query);
while($fetch_records=$result->fetch_assoc()){
	$user_id=$fetch_records['user_id'];
	$user_name=$fetch_records['user_name'];
	$user_email=$fetch_records['user_email'];
	$user_password=$fetch_records['user_password'];
	$created_date=$fetch_records['created_date'];
	
}
?>
  
  <form action="db_update_user.php" method="post" class="new_form">
    
        <div class="form-group">
          
          <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id" value="<?php echo $_GET['id'] ?>">
        </div>
        <div class="form-group">
          <label for="user_name">User Name</label>
          <input type="text" class="form-control" id="user_name" placeholder="user_name" name="user_name" value="<?php echo $user_name ?>">
        </div>
      

    	<div class="form-group">
    	<label for="user_email">user_email</label>
    	<input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email" value="<?php echo $user_email ?>">
    	</div>
	
  	
    	<div class="form-group">
    	<label for="user_password">user_password</label>
    	<input type="user_password" class="form-control" id="user_password" placeholder="Password" name="user_password" value="<?php echo $user_password ?>">
    	</div>

    
    	<div class="form-group">
      	<label for="created_date">Created Date</label>
      	<input type="date" class="form-control" id="created_date" name="created_date" value="<?php echo $created_date?>">
    	</div>
      
        <button type="submit" class="btn btn-primary">update</button>
      
  </form>
</div>
</div>
</div>
 </div>


		
</div>
<!-- </div>
 --></body>
</html>
