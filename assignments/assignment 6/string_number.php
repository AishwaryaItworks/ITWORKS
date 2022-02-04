<html>
<head>
  <title>Factorial</title>
</head>
<body>  
<form method="post">  
Enter string to reverse:  
<input type="text" name="number1" /><br><br>  

<input  type="submit" name="submit" value="reverse_string">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1']; 
 
    $length = strlen($number1);  
    for ($i=($length-1) ; $i >= 0 ; $i--)   
    {  
      echo $number1[$i];  
    }  
    }
?>  