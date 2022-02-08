<?php
 
$array = array(9, 2, 18, 34, 3, 10, 15);

$count = count($array);

echo " Array elements: <br>";
for($i=0;$i<$count;$i++){
    echo " $array[$i]" ;
}
/*echo "<pre>";*/

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "<br>Smallest number in array: ".$array[0];
?>
