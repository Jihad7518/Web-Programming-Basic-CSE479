

<!-- You are building a system to manage a library&#39;s book inventory. Create a PHP class named Book with
properties such as title, author, and publication year. Include a constructor method to initialize these
properties when an object is created. Also, add a method named displayInfo that displays the book&#39;s
information. -->

<?php
class Book {
    // Properties
    private $title;
    private $author;
    private $publicationYear;

    // Constructor method
    public function __construct($title, $author, $publicationYear) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }

    // Method to display book information
    public function displayInfo() {
        echo "Title: " . $this->title . "\n";
        echo "Author: " . $this->author . "\n";
        echo "Publication Year: " . $this->publicationYear . "\n";
    }
}

// Example usage:
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);

// Display book information
$book1->displayInfo();
$book2->displayInfo();
?>