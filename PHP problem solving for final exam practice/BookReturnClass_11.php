
<!-- Create a class named Book with properties title, author, and publicationYear. Implement a function
called getSummary() that returns a string containing the book&#39;s title, author, and publication year. -->


<?php
class Book {
    private $title;
    private $author;
    private $publicationYear;

    public function __construct($title, $author, $publicationYear) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }

    public function getSummary() {
        return "Title: " . $this->title . "\n" .
               "Author: " . $this->author . "\n" .
               "Publication Year: " . $this->publicationYear . "\n";
    }
}

// Example usage:
$book = new Book("The Catcher in the Rye", "J.D. Salinger", 1951);

$summary = $book->getSummary();
echo $summary;
?>
