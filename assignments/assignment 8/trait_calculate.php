<html>
<head></head>
<body>

<form method="post">  
Enter first Number:  
<input type="number" name="number1" /><br><br>  
Enter second Number:  
<input type="number" name="number2" /><br><br>  
 
<input  type="submit" name="submit" value="calculate">  
</form>  
<?php
   trait Addition{
      public function add($var1,$var2){
         return $var1+$var2;
      }
   }
   trait Multiplication {
      public function multiplication($var1,$var2){
         return $var1*$var2;
      }
   }

   trait Substraction {
      public function substract($var1,$var2){
         return abs($var1-$var2);
      }
   }
   trait Division {
      public function divide($var1,$var2){
         return $var1/$var2;
      }
   }
   class File {
      use Addition,Substraction;
      use Multiplication,Division;
      public function calculate($var1,$var2){
         echo "<br>Result of Addition:".$this->add($var1,$var2) ."\n";
         echo "<br>Result of Multiplication:".$this->multiplication($var1,$var2);
         echo "<br>Result of Substraction:".$this->substract($var1,$var2);
         echo "<br>Result of Division:".$this->divide($var1,$var2);
      }
   }
   $o = new File();

   if(isset($_POST['submit']))  
    {  
        $num1 =$_POST['number1']; 
        $num2=$_POST['number2'];

        $o->calculate($num1,$num2);
        
    }
   
?>
</body>
<html>