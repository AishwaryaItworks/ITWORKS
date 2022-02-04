<?php

$Colour=array('Blue','Red','Yellow','Green','Orange','Purple');
$count_array=0;
echo "<font color=blue>Elements in Array Colour:</font> ";
for($i=0;$i<count($Colour);$i++){
	echo " $Colour[$i]" ;
	$count_array=$count_array+1;
}

echo "<br>Length of an Array Colour: ".$count_array."<br>"; 
?>