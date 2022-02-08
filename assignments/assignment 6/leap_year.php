<html>  
<head>
	<title>Leap Year</title>
</head>
<body>  
<form method="post">  
Enter Year:  
<input type="number" name="year" /><br><br>  
 
<input  type="submit" name="submit" value="Check_leap_Year">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $year = $_POST['year'];  
        if($year%4==0 && $year%400==0){
            echo "Year is leap year";
        } 
        else{
            echo "Year is not leap year";
        }
       }
?>  