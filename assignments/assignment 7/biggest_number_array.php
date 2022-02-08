<?php
$max_array = array(10,20,67,60,89,22,56,45,30,95,83);
$length = count($max_array);
$max = $max_array[0];

echo " Array elements: <br>";
for($i=0;$i<$length;$i++){
	echo " $max_array[$i]" ;
}

for($i=1;$i<$length;$i++)
{
if($max_array[$i]>$max)
{
$max = $max_array[$i];
}
}
Echo "<br>The biggest number in the array is ".$max;
?>