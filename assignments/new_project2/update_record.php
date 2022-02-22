<?php
require 'connection.php';
require 'navbar.php';
/*require 'navbar.php';
*/$query="SELECT * FROM user where user_id=".$_GET['id'];
$result=$mysqli->query($query);
while($fetch_records=$result->fetch_assoc()){
	$user_id=$fetch_records['user_id'];
	$user_name=$fetch_records['user_name'];
	$user_email=$fetch_records['user_email'];
	$user_password=$fetch_records['user_password'];
	// $created_date=$fetch_records['created_date'];
	
}
?>
  
  <!-- <div class="conatiner-fluid"> -->
<div class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
 <br/>
 <!-- <h3>&nbsp;&nbsp;Update the User Detail</h3> -->
 <form action="db_update_user.php" method="post" class="new_form" autocomplete="off">
  <fieldset>
    <legend>Update User Details</legend>
   <div class="form-group">
    <!-- <label for="user_name">User Id</label> -->
    <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo $_GET['id'] ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="user_name">User Name</label>
      <input type="text" class="form-control" id="user_name" placeholder="user_name" name="user_name" value="<?php echo $user_name ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="user_email">User Email</label>
      <input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email" value="<?php echo $user_email ?>">
    </div>
  </div>

  <!-- <label for="user_name">User Id</label> -->
        <input type="hidden" class="form-control" id="user_detail_id" placeholder="user_detail_id" name="user_detail_id">

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">User Password</label>
    <input type="password" class="form-control" id="user_password" placeholder="Password" name="user_password" value="<?php echo $user_password ?>">
  </div>

  <div class="form-group col-md-6">
    
</div>

  <div class="form-row">
  <div class="form-group col-md-4 col-md-offset-4">
    
   <button type="submit" class="btn btn-primary">update</button>
 </div>
</div>
</fieldset>
 </form>
</div>

</body>
</html>
