<?php
$choice="addition";
$x=20;
$y=60;
switch($choice){
	case "addition":
	$c=$x+$y;
	echo "Addition of $x and $y is: ".$c;
	break;

	case "substraction":
	$c=$x-$y;
	echo "substraction of $x and $y is: ".$c;
	break;

	case "division":
	$c=$x/$y;
	echo "division of $x and $y is: ".$c;
	break;

	case "multiplication":
	$c=$x*$y;
	echo "multiplication of $x and $y is: ".$c;
	break;

	default:
	echo "Your choice is wrong!!!";

}
?>