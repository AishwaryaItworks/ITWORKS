<?php

$account_balance=5000; //Variable Declaration
$amount=array(500,125,600,220,440,666,3400,300); //Array Declaration

echo "Account balance is: ".$account_balance; //Display Value
echo "<br>"; //New line
for($i=0;$i<count($amount);$i++) //For loop declaration
{
	if($amount[$i]%5==0 && $amount[$i]<=$account_balance) //If condition
	{
		
		echo "<br>Transaction is allowed to $i: for $amount[$i]";
		/*echo"<br>";*/
		$account_balance=($account_balance-$amount[$i])-60;
		/*echo "Account balance is: $account_balance";*/
		
	}
	else
	{
		echo "<br><font color=red>Transaction is not allowed to $i of $amount[$i] </font>";
	}
	echo "<br>";
	
}
echo "<br>";
echo "<font color=blue>Account balance is: $account_balance</font>";

?>