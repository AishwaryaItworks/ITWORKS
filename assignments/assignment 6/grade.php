<html>  
<head>
	<title>Grade</title>
</head>
<body>  
<form method="post">  
Enter your Marks:  
<input type="number" name="marks" /><br><br>  
 
<input  type="submit" name="submit" value="marks">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $marks = $_POST['marks'];  
        if($marks>=60 and $marks<100){
            echo "Your Grade is: First";
        }
        else if($marks>=45 and $marks<60){
            echo "Your Grade is: Second";
        }
        else if($marks>=33 and $marks<45){
            echo "Your Grade is: Third";
        }
        else if($marks<=33){
            echo "You are Fail";
        }
        else if($marks>100){

            echo "Please enter valid number";
        }
    }
        
?>  