
 <?php
class Book {
  // Properties
  public $book_name;
  public $book_author_name;
  public $book_cost;
  public $book_pushished_year;
  /*public $color;*/

  // Methods
  function set_name($book_name) {
    $this->book_name = $book_name;
    /*$this->book_author_name=$book_author_name;
    $this->book_cost=$book_cost;
    $this->book_pushished_year=$book_pushished_year;*/

  }
  function set_author_name($book_author_name) {
    $this->book_author_name=$book_author_name;
  }

  function get_name() {
    return $this->book_name;
  }
function get_author_name() {
    return $this->book_author_name;
  }

  
}

$book_detail = new Book();
/*$banana = new Fruit();*/
$book_detail->set_name('Fly of wings');

$book_detail->set_author_name('APJ Abdul Kalam');


echo "Name of Book: ".$book_detail->get_name();
echo "<br>";

echo "Name of Author: ".$book_detail->get_author_name();

?> 