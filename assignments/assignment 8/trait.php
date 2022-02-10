<html>
<head></head>
<body>

<form method="post">  
Enter Your Name:  
<input type="text" name="name" /><br><br>  

 
<input  type="submit" name="submit" value="welcome">  
</form>  

<?php
trait StaticExample {
    public static $word="Welcome to ITWORKS";
    public static $word2="Software Developer";
    public static function doSomething($name) {
        echo "<b>Hello $name</b>: ".self::$word2;
    }
}

class Example {
    use StaticExample;
}


if(isset($_POST['submit']))  
    {  
        $name =$_POST['name']; 
        /*$num2=$_POST['number2'];*/

        echo Example::doSomething($name);
        echo "<br>".Example::$word;
        
    }

?>

</body>
</html>