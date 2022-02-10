<html>
<head>
  <style>
  /*body{
  background-image: url('book2.jpg');
}*/
</style>
</head>
<body>

<?php
class Book {
  // Properties
  public $book_name;
  public $book_author_name;
  public $book_cost;
  public $book_pushished_year;

  public function set_book_detail($book_name,$book_author_name,$book_cost,$book_pushished_year){
    $this->book_name=$book_name;
    $this->book_author_name=$book_author_name;
    $this->book_cost=$book_cost;
    $this->book_pushished_year=$book_pushished_year;

  }

   public function get_book_detail(){
    echo "<br>Book_name: ".$this->book_name;
    echo "<br>Author name: ".$this->book_author_name;
    echo "<br>Cost of Book: ".$this->book_cost;
    echo "<br>Book Published Year: ".$this->book_pushished_year;
    
    /*echo $this->book_name.":".$this->book_author_name.":".$this->book_cost.":".$this->book_pushished_year;
*/
  }
}
$book_detail=new Book();
$book2_detail=new Book();
$book3_detail=new Book();
$book_detail->set_book_detail('Fly of wings','APJ Abdul Kalam',200,1999);
$book_detail->get_book_detail();
echo "<br>";
$book2_detail->set_book_detail('Reaper Man','Terry Pratchett',450,2001);
$book2_detail->get_book_detail();
echo "<br>";
$book2_detail->set_book_detail('Think Like Monk','Jay Shetty',338,2020);
$book2_detail->get_book_detail();
?>
</body>
</html>