<html>  
<head>
	<title>Swap Value</title>
</head>
<body>  
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="submit" value="swap">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $number1 =  $number1+$number2; 
        $number2=$number1-$number2;
        $number1=$number1-$number2;    
        echo "Value of number1: $number1</br>";  
echo "Value of number2: $number2</br>";  }  
?>  



</body>  
</html>  