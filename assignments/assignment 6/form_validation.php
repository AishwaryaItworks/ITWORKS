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
				<p id="head" class="pcl"></p> <!-- This Segment Displays The Validation Rule -->
				
				<form action="data.php" method="post" id='myform'> <!-- Form Starts From Here -->
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
				<button id="submit">Check Form</button>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function() {
	$('#myform').submit(function() {
	// Initializing Variables With Form Element Values
	/*e.preventDefault();*/
	var name = $('#name').val();
	var mobileno = $('#mobileno').val();
	var email = $('#email').val();
	var password= $('#password').val();
	var pincode=$('#pincode').val();
     
     $(".error").remove();
	// Initializing Variables With Regular Expressions
	var name_regex = /^[a-zA-Z]+$/;
	var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var pin_regex=/^[1-9][0-9]{5}$/;
	var mobileno_regex=/^[789]\d{9}$/;
	var password_regex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

	// To Check Empty Form Fields.
	if (name.length == 0) {
	$('#head').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
    return false;
	}
	
	// Validating Name Field.
	else if (!name.match(name_regex) || name.length == 0) {
	$('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
	/*$("#name").focus();*/
	return false;
	}

	// Validating Mobile number Field.
     /*if (mobileno.length < 1) {
      $('#mobileno').after('<span class="error">*This field is required*</span>');
    } else {
      
      if (!mobileno.match(mobileno_regex)) {
        $('#mobileno').after('<span class="error">*This mobile number is not valid*</span>');
        return false;
      }
    }
*/
	else if (!mobileno.match(mobileno_regex) || mobileno.length == 0) {
	$('#p2').text("* Mobile number should be 10 digit number *"); // This Segment Displays The Validation Rule For Username
	$("#mobileno").focus();

	return false;
	}

     /*if(!mobileno.match(mobileno_regex) || mobileno.length ==0)
        {
            $("#mobile_err").text("Mobile number should be 10 digit number");
            return false;
        }else 
        {
            if(mobileno.length ==10)
            {
                
            }
            else
            {
                $("#mobile_err").text("Mobile Number must be 10 digit");
                return false;
            }
        }*/


	/*else if (mobileno.match(mobileno_regex) && mobileno.length ==10) {
	$('#p2').text("* Mobile number should be 10 digit number *"); // This Segment Displays The Validation Rule For Username
	$("#mobileno").focus();
	
	
	}
*/
	// Validating Email Field.
	else if (!email.match(email_regex) || email.length == 0) {
	$('#p3').text("* Please enter a valid email address *"); // This Segment Displays The Validation Rule For Email
	$("#email").focus();
	return false;
	}
	
	
	// Validating password Field.
	else if (!password.match(password_regex) || password.length == 0) {
	$('#p5').text("* Please enter password with 8 to 15 character should contain at least one lowercase,one uppercase,one numeric,one special character *"); // This Segment Displays The Validation Rule For Address
	$("#password").focus();
	return false;
	}
	
	// Validating pincode Field.
	else if (!pincode.match(pin_regex) || pincode.length == 0) {
	$('#p6').text("* Please enter a valid pin code *"); // This Segment Displays The Validation Rule For Zip
	$("#pincode").focus();
	return false;
	} else {
	alert("Form Submitted Successfully!");
	return true;
	}
	});
	});
	</script>
</body>
</html>