<?php
$number=array(23,33,44,55,66);
$result=0;
echo "Elements of an Array: ";
for($i=0;$i<count($number);$i++)
{
  echo "<br>$number[$i]";
  $result=$result+$number[$i];
}

echo "<br>Sum of array is: ".$result;
?>