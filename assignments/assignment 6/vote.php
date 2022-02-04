<html>  
<head>
	<title>Vote</title>
</head>
<body>  
<form method="post">  
Enter your Age:  
<input type="number" name="number1" /><br><br>  
 
<input  type="submit" name="submit" value="vote">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        if($number1<18){
            echo "You are not eligible to vote";
        } 
        else{
            echo "You are eligible";
        }
       }
?>  