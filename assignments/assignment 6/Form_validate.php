<html>
	<head>
		<title>Form Validation jQuery:Demo Preview</title>
		<meta content="noindex, nofollow" name="robots">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<style>
		@import "http://fonts.googleapis.com/css?family=Droid+Sans";
		@import "http://fonts.googleapis.com/css?family=Roboto+Slab";
		
		h1 {
		    text-align: center;
		    
		    display; block;
		}
        .pcl{
        	font-size:15px;
		color:red;
		margin-left:500px
		}

        
		p {
		font-size:12px;
		color:red;
		margin-left:185px
		}
		body {
            background-color: lightskyblue;
            font-family: Verdana;
            text-align: left;
        }

        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .form-control label {
            display: block;
            margin-bottom: 10px;
        }

       button {
            background-color: pink;
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }
		
		.error{
			color: red;
            margin-left: 5px;
            font-size:12px;
		}
		
		</style>
	</head>
	<body>
		<div class="main">
			<h1>Form Validation Using jQuery</h1>
			<div id="form">
				<!-- <p id="head" class="pcl"></p> --> <!-- This Segment Displays The Validation Rule -->
				
				<form action="data.php" method="post" id="first_form"> <!-- Form Starts From Here -->
				<div class="form-control">
				<label>Full Name:</label>
				<input id='name' name='name' type='text'>
				<p id="p1"></p> <!--This Segment Displays The Validation Rule For Name-->
			    </div>

				<div class="form-control">
				<label>Mobile Number:</label>
				<input id='mobileno' name='mobileno' type='number'>
				<p id="p2"></p> <!-- This Segment Displays The Validation Rule For Mobile Number -->
			    </div>

				<div class="form-control">
				<label>Email:</label>
				<input id='email' name='email' type='email'>
				<p id="p3"></p> <!-- This Segment Displays The Validation Rule For Email -->
				</div>

				<div class="form-control">
				<label>Password:</label>
				<input id='password' name='password' type='password'>
				<p id="p5"></p> <!-- This Segment Displays The Validation Rule For Password -->
			    </div>

				<div class="form-control">
				<label>Pin Code:</label>
				<input id='pincode' name='pincode' type='number'>
				<p id="p6"></p> <!-- This Segment Displays The Validation Rule For Pincode -->
			    </div>
				<button type="submit" value="submit" required/>Submit</button>
			</form>
		</div>
	</div>
	<script>
  $(document).ready(function() {

  $('#first_form').submit(function(e) {
   /* e.preventDefault();*/
    var name = $('#name').val();
    var pincode = $('#pincode').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var mobileno = $('#mobileno').val();

    $(".error").remove();

    if (name.length < 1) {
      $('#name').after('<span class="error">This field is required</span>');
      return false;
    }
    
    if (mobileno.length < 1) {
      $('#mobileno').after('<span class="error">This field is required</span>');
      return false;

    } else {
      var mobileno_regex=/^[789]\d{9}$/;
      var validmobileno = mobileno.match(mobileno_regex);
      if (!validmobileno) {
        $('#mobileno').after('<span class="error">Mobile number should be 10 digit number</span>');
        return false;
      }
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



    if (pincode.length < 1) {
      $('#pincode').after('<span class="error">This field is required</span>');
      return false;
    } else {
      var pincode_regEx = /^[1-9][0-9]{5}$/;
      var validEmail = pincode.match(pincode_regEx);
      if (!validEmail) {
        $('#pincode').after('<span class="error">Please enter a valid pin code</span>');
        return false;
      }
    }
    
  });  
});


	</script>
</body>
</html>