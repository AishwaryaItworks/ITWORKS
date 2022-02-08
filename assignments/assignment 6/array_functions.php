<?php

//Indexed array
$Colour=array('Blue','Red','Yellow','Green','Orange','Purple');
echo "<font color=blue>Elements in Array Colour:</font> ";
for($i=0;$i<count($Colour);$i++){
	echo " $Colour[$i]" ;
}

echo "<br>";
print_r($Colour);
echo "<br>";
echo "Length of an Array Colour: ".count($Colour)."<br>"; 
echo "<hr>";
//Associative Array
$age=array('Aishwarya'=>'25','Nikita'=>'32','Pratik'=>'27','Komal'=>'20');
echo "<font color=blue>Associative Array(Age) Elements</font>";
foreach ($age as $key => $value) {
	// code...
	echo"<br>";
	echo "Name: ".$key." Age:".$value;
	
}
echo "<hr>";

//Multidimensional Array
$student=array(array('Hailey','17','India'),
array('John','20','Australia'),
array('Bela','18','Japan'),
array('Chris','16','US'),);
echo "<font color=blue>Multidimensional Array Student:</font><br>";
for ($row=0; $row <4; $row++) { 
  echo "<p><b>Roll Number: $row</b></p>";
 
  for ($col = 0; $col <3; $col++) 
  {
    echo "".$student[$row][$col]." ";
  }
 
}
	// code...

$student1=array(array('Name'=>'Hailey','Age'=>'17','Marks'=>'85'),
array('Name'=>'John','Age'=>'20','Marks'=>'75'),
array('Name'=>'Bela','Age'=>'18','Marks'=>'60'),
array('Name'=>'Chris','Age'=>'16','Marks'=>'87'),);

//Array Function
echo "<hr>";
//convert array to lower case
echo"Array to Lower Case:";
print_r(array_change_key_case($age,CASE_LOWER)); 

//convert array to upper case
echo"<br><br>Array to Upper Case:";
print_r(array_change_key_case($age,CASE_UPPER));

//Array divided in group of two
echo"<br><br>Array to chunk:";
print_r(array_chunk($Colour,2)); 

//Access Value of Array using array column
echo"<br><br>Access Value of Array using array column:";
$Marks = array_column($student1, 'Marks');
print_r($Marks);

//Combine two array
echo "<br><br>Combine two array";
$employee=array('Lisa','Jennie','Jisoo','Rose');
$department=array('IT','R&D','HR','Account');
$employee_value=array_combine($employee, $department);
print_r($employee_value);

//Array difference
echo "<br><br>Array difference";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
$result=array_diff_assoc($a1,$a2);
print_r($result);

//Print keys of array
echo "<br><br>Print keys of array age ";
print_r(array_keys($age));

//Sort the Elements of array
echo"<br><br>Sort the Elements of array: ";
array_multisort($Colour);
print_r($Colour);

//Pop the Element of array

echo"<br><br>Pop the Element of array: ";
array_pop($Colour);
print_r($Colour);

//Push the Element of array: 
echo"<br><br>Push the Element in array 'black': ";

array_push($Colour,'black');
print_r($Colour);

//Reverse the Element of array
echo"<br><br>Reverse the Element of array: ";
$arr=array_reverse($Colour);
print_r($arr);

//Current,next,previous Element of array
echo"<br><br>Current,next,previous Element of array: <br>";
echo current($Colour) . "<br>";
echo next($Colour) . "<br>";
echo prev($Colour);
?>