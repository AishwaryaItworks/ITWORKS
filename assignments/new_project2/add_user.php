<?php
require 'connection.php';
require 'navbar.php';
?>
<!-- <div class="conatiner-fluid"> -->
<div class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
  <br/>
  
  
  <form id="my2form" name="my_form" action="db_form.php" method="post" autocomplete="off">
    <fieldset>
      <legend>Add User Details</legend>
      <!-- To display error message -->
       <?php
      if(isset($_GET['error'])){ ?>
      <p class="error">
        <?php echo $_GET['error']; ?>
      </p>
      <?php } ?>
      <div class="form-group">
        <!-- <label for="user_name">User Id</label> -->
        <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="user_name">User Name</label>
          <input type="text" class="form-control" id="user_name" placeholder="user_name" name="user_name">
          
        </div>
        <div class="form-group col-md-6">
          <label for="user_email">User Email</label>
          <input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email">
          
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="password">User Password</label>
          <input type="password" class="form-control" id="user_password" placeholder="Password" name="user_password">
          
        </div>
        
        <div class="form-group col-md-6">
          <label for="user_city">User City</label>
          <input type="text" class="form-control" id="user_city" placeholder="user_city" name="user_city">
        </div>
      </div>
      <input type="hidden" class="form-control" id="user_detail_id" placeholder="user_detail_id" name="user_detail_id">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="user_address">User Address</label>
          <input type="text" class="form-control" id="user_address" placeholder="user_address" name="user_address">
        </div>
        <div class="form-group col-md-6">
          <label for="user_pincode">User Pincode</label>
          <input type="number" class="form-control" id="user_pincode" placeholder="user_pincode" name="user_pincode">
        </div>
      </div>
      
      <!-- <label for="user_name">User Id</label> -->
      <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id">
    
      <div class="form-row">
        <div class="form-group col-md-6">
          <button type="submit" class="btn btn-primary" name="submit">Add user</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>

<script>
  /*<script>*/
$(document).ready(function() {
$("#my2form").validate({
    rules: {

    user_name : {
    required: true,
    },

    user_email: {
    required: true,
    email: true,
    },


    user_password:{
      required:true,
      password:true
    },

    }
    });
    });
</script>
