<html>  
<head>
	<title>Concatenate String</title>
</head>
<body>  
<form method="post">  
Enter first String:  
<input type="text" name="number1" /><br><br>  
Enter second string:  
<input type="text" name="number2" /><br><br>  
 
<input  type="submit" name="submit" value="concate string">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $string1 =$_POST['number1']; 
        $string2=$_POST['number2'];

        echo "Concatenated string is: ".$string1.$string2;
        
    }
?> 
</body>
</html> 