<?php
require 'connection.php';
require 'navbar.php';
?>

<!-- <div class="conatiner-fluid"> -->
<div class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
 <br/>
 
 
 <form id="my_form" name="my_form" action="db_form.php" method="post">
  <fieldset>
  <legend>Add User details</legend>
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

  <!-- <label for="user_name">User Id</label> -->
        <!-- <input type="hidden" class="form-control" id="user_detail_id" placeholder="user_detail_id" name="user_detail_id"> -->

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="password">User Password</label>
    <input type="password" class="form-control" id="user_password" placeholder="Password" name="user_password">
    
  </div>
  <!-- <input type="hidden" class="form-control" id="user_detail_id" placeholder="user_detail_id" name="user_detail_id">
 -->
  <div class="form-group col-md-6">
    <label for="user_city">User City</label>
    <input type="text" class="form-control" id="user_city" placeholder="user_city" name="user_city">
  </div>
</div>
<input type="hidden" class="form-control" id="user_detail_id" placeholder="user_detail_id" name="user_detail_id">

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="user_address">User Address</label>
    <input type="text" class="form-control" id="user_address" placeholder="Password" name="user_address">
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
<button type="submit" class="btn btn-primary" name="submit" required>Add user</button>
</div>
</div>
</fieldset>
</form>

</div>

<!-- Validation in jquery -->
<script>
  $(document).ready(function() {

  $('#my_form').submit(function(e) {
   
    var name = $('#user_name').val(); 
    var email = $('#user_email').val();
    var password = $('#user_password').val();
    

    $(".error").remove();

    if (name.length < 1) {
      $('#name').after('<span class="error">This field is required</span>');
      return false;
    }

    if (email.length < 1) {
      $('#email').after('<span class="error">This field is required</span>');
      return false;
    } else {
      var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var validEmail = email.match(regEx);
      if (!validEmail) {
        $('#email').after('<span class="error">*Enter a valid email*</span>');
        return false;
      }
    } 

    if (password.length < 1) {
      $('#password').after('<span class="error">*This field is required*</span>');
      return false;
    } else {
      var password_regex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
      var validEmail = password.match(password_regex);
      if (!validEmail) {
        $('#password').after('<span class="error">Please enter password with 8 to 15 character should contain at least one lowercase,one uppercase,one numeric,one special character </span>');
        return false;
      }
    }


  });  
});


  </script>



<!-- <script>
    $(document).ready(function() {
      $("#my_form").submit({
      rules: {
         user_name:{
            required:true,
        },
        user_email:{
          required:true,
        }
        user_password:{
            required:true,
            minlength:8,
            maxlength:15,
         },
     },
     messages:{
      user_name:
         {
            email:"Please enter your name"
         },
         user_email:
         {
            email:"Please enter valid email id"
         },
         user_password:{
            minlength:"Password should be 8 to 15 characters",
            maxlength:"Password should be 8 to 15 characters"
            
         },
     },

     });
});

</script> -->


