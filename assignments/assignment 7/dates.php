<html>
<head></head>
<body>
<?php
$now = time(); // or your date as well
$your_date = strtotime("2022-01-31");
$datediff = $now - $your_date;

$date_diff=round($datediff / (60 * 60 * 24));
echo "Difference between current date and 2022-01-31 is: ".$date_diff;
?>


  
  
 
</body>
</html>