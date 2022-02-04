<html>
<head>
	<title>Factorial</title>
</head>
<body>  
<form method="post">  
Enter Number to get factorial:  
<input type="number" name="number1" /><br><br>  

<input  type="submit" name="submit" value="fact">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $fact2=1;
        for($i=$number1;$i>=1;$i--)
        {
            $fact2=$fact2*$i;
        }
          
echo "Factorial of $number1 is: $fact2</br>";  }  
?>  



</body>  
</html>  