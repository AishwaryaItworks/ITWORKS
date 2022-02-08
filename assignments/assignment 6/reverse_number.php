
<html>
<head>
  <title>Reverse Number</title>
</head>
<body>  
<form method="post">  
Enter number to reverse:  
<input type="number" name="number1" /><br><br>  

<input  type="submit" name="submit" value="reverse_number">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        
          $forThisNumber = $number1;
          $rev = 0;
          while($number1 > 0)
          {
            $a = $number1 % 10; // 1st time = 5
            $rev = ($rev * 10) + $a; // 1st time (0 * 10 = 0 + 5 = 13)
            $number1 = (int)($number1 / 10); // 1st time remained = 1234
          }
          echo "original number is =  <b> $forThisNumber </b> <br/>  Reverse of number is = <b> $rev </b>";
        }
?>  



</body>  
</html>  
