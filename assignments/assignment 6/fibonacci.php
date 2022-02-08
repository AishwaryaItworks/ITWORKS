<html>
<head>
  <title>Fibonacci</title>
</head>
<body>  
<form method="post">  
Enter number to get fibonacci series:  
<input type="number" name="string" /><br><br>  

<input  type="submit" name="submit" value="fibonacci_series">  
</form>  
<?php  

   function Fibonacci($n){
  
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}


if(isset($_POST['submit']))  
{  
    $string = $_POST['string'];  
    Fibonacci($string);
}
        
?>  
</body>  
</html>  




