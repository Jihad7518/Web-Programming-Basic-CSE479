<!-- You are building a content management system for a website. Create a class named Page that
represents a web page. The class should have properties for page title, content, and last modified
date. Implement methods to update the page content and display the page information.
Additionally, create a subclass named Homepage that inherits from the Page class. The Homepage
class should have an additional property for featured image URL and a method to display the
homepage information. -->

<?php
class Page {
    protected $pageTitle;
    protected $content;
    protected $lastModifiedDate;

    public function __construct($pageTitle, $content) {
        $this->pageTitle = $pageTitle;
        $this->content = $content;
        $this->lastModifiedDate = date("Y-m-d"); // Initialize with the current date
    }

    public function updateContent($newContent) {
        $this->content = $newContent;
        $this->lastModifiedDate = date("Y-m-d"); // Update the last modified date
    }

    public function displayPageInfo() {
        echo "Page Title: " . $this->pageTitle . "\n";
        echo "Content: " . $this->content . "\n";
        echo "Last Modified Date: " . $this->lastModifiedDate . "\n";
    }
}

class Homepage extends Page {
    private $featuredImageUrl;

    public function __construct($pageTitle, $content, $featuredImageUrl) {
        parent::__construct($pageTitle, $content);
        $this->featuredImageUrl = $featuredImageUrl;
    }

    public function displayHomepageInfo() {
        parent::displayPageInfo();
        echo "Featured Image URL: " . $this->featuredImageUrl . "\n";
    }
}

// Example usage for Page:
$page = new Page("About Us", "This is the about us page content.");
$page->displayPageInfo();

// Example usage for Homepage:
$homepage = new Homepage("Welcome to Our Website", "Welcome to our homepage content.", "https://example.com/featured-image.jpg");
$homepage->displayHomepageInfo();
?>
