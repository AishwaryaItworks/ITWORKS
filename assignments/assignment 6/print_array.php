<?php

$age=array('Aishwarya'=>'25','Nikita'=>'32','Pratik'=>'27','Komal'=>'20');
echo "<font color=blue>Associative Array(Age) Elements</font>";
foreach ($age as $key => $value) {
	// code...
	echo"<br>";
	echo "Name: ".$key." Age:".$value;
	
}
?>