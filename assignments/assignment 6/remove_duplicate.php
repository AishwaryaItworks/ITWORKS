<?php

$array = array(9,9, 2, 18, 34, 3, 10, 15,3,2,9);
// get the size of array
echo "Previous Array <br>";
print_r($array);
echo "<br>";
$count = count($array);
$new=array();
for($i=0;$i<count($array);$i++){
	if(in_array($array[$i],$new))
	{

	}
	else{
		array_push($new,$array[$i]);


	}
	
}
echo "<br>New Array after Removing Duplicate element";
print_r($new);
?>