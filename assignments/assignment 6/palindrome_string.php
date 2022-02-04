<html>
<head>
  <title>palindrome</title>
</head>
<body>  
<form method="post">  
Enter string:  
<input type="text" name="string" /><br><br>  

<input  type="submit" name="submit" value="Check_Palindrome">  
</form>  
<?php  

   function Palindrome($MyString) {
  $l = 0;
  $r = strlen($MyString) - 1;
  $flag = 0;

  while($r > $l){
    if ($MyString[$l] != $MyString[$r]){
      $flag = 1;
      break;
    }
    $l++;
    $r--;
  }

  if ($flag == 0){
    echo $MyString." is a Palindrome string.\n";
  } else {
    echo $MyString." is not a Palindrome string.\n";
  }
}





if(isset($_POST['submit']))  
{  
    $string = $_POST['string'];  
    Palindrome($string);
}
        
?>  
</body>  
</html>  


