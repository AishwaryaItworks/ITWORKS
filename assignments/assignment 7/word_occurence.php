<html>
<head>
	<title>Occurrence of a word in a string</title>
</head>
<body>  
<form method="post">  
Enter string:  
<input type="text" name="str" /><br><br>  

<input  type="submit" name="submit" value="Occurrence of word">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $string = $_POST['str'];  
        $words=array();
        $words=explode(",",$string);
        $count=count($words);
        $new="hello";
        if(str_contains($string, $new)){
        	echo "Word is present in string";
        }
        else{
        	echo "Word is not present";
        }
        

          }  
?>  


 
<!-- /*$text="php - count number of character occurrences in a string in PHP without using function php";
$searchchar="php";
$count="0"; //zero -->
 
<!-- for($i="0"; $i<strlen($text); $i=$i+1){
     
    $str = explode(' ', $text);
 
    if($str[$i] == $searchchar){
    
       $count=$count+1;
    }
 
}echo $count

 */ -->
 



</body>  
</html>  