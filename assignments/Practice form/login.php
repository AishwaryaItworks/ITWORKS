<html>
	<head>
		<title>Login</title>
		<!--Bootstrap file-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!--end of file-->
		<!-- CSS file-->
		<link rel="stylesheet" href="style.css">
		<!-- CSS file end-->

		<!--Jquery file for validation-->
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
		<!---->
	</head>
	<body>
		<div class="container-fluid bg">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">	
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<form class="form-container" method="post" id="my_form" name="my_form">
						<h2>Sign In</h2>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="remember"> Remember me</label>
						</div>
						<button type="submit" class="btn btn-default" name="btnclick">Submit</button>
					</form>
					
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
		</div>
<script>
	  $(document).ready(function() {
      $("#my_form").validate({
      rules: {
         email:{
            required:true,
        },
        password:{
            required:true,
            minlength:8,
            maxlength:15,
         },
     },
     messages:{
     	email:
         {
            email:"Please enter valid email id"
         },
         password:{
            minlength:"Password should be 8 to 15 characters",
            maxlength:"Password should be 8 to 15 characters"
            
         },
     },

     });
});

</script>
	</body>
</html>

<!-- php code
/*if(isset($_POST["btnclick"])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$_SESSION['status']=false;

	if($email=="abc@gmail.com" && $password=="12345678"){
		$_SESSION["email"]=$email;
		$_SESSION["status"]=true;
		header("Location:demo.php");
	}
	else{
		echo "invalid credentials";
	}
}*/end of code-->