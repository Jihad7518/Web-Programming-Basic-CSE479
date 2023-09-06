<!-- You are developing a blog platform. Create a class named Post that represents a blog post. The class
should have properties for title, content, author, and publication date. Implement a method to
display the post's details. -->

<?php

class Post{
    public $title;
    public $content;
    public $author;
    public $publicationDate;

    public function __construct($title, $content, $author, $publicationDate){
        $this->title=$title;
        $this->content=$content;
        $this->author=$author;
        $this->publicationDate=$publicationDate;

    }

    function displayDetails(){
        echo "Title:" . $this->title . "\n";
        echo "Content: " . $this->content . "\n";
        echo "Author:" . $this->author . "\n";
        echo "Publication Date:". $this->publicationDate. "\n";
    }

}

// exmple
$post = new Post(
    "Sample Blog Post",
    "This is the content of the blog post...",
    "John Doe",
    "2023-09-06"
);

$post->displayDetails();

?>