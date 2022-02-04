<?php

$new_string="It fills my heart with joy unspeakable to rise.";
echo "Given String is: ".$new_string;
echo "<br>Length of string: ".strlen($new_string);
echo "<br>Word count of string: ".str_word_count($new_string);
echo "<br>Reverse the string: ".strrev($new_string);
echo "<br>Position Word in string: ".strpos($new_string,'to');
echo "<br>Replace word in string: ".str_replace('joy','happy',$new_string);
echo "<br>Add slashes after 'O': ".addcslashes($new_string, "o");
echo "<br>Add slashes before and after 'and': ".addslashes('Be happy "and" healthy');
echo "<br>Convert string 'passion' to hexadecimal value: ".bin2hex('passion');
echo"<br>Print Ascii value of 'S' :".ord("S");

//strcmp return 0 if strings are equal
echo "<br>Compare string 'Hi Bela','Hi Jennie': ".strcmp("Hi Bela","Hi Jennie");

//Print the number of characters found before 'O'
echo "<br>Print the number of characters found before 'O': ".strcspn($new_string,'joy');

echo "<br>Convert string to lower: ".strtolower($new_string);
echo "<br>Convert string to upper: ".strtoupper($new_string);

?>