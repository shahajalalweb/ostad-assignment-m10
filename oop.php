<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "Book borrowed: " . $this->title . "\n";
        } else {
            echo "No copies available for " . $this->title . "\n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
        echo "Book returned: " . $this->title . "\n";
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        echo $this->name . " is trying to borrow " . $book->getTitle() . "\n";
        $book->borrowBook();
    }

    public function returnBook($book) {
        echo $this->name . " is returning " . $book->getTitle() . "\n";
        $book->returnBook();
    }
}

// Usage

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member 1 borrows book 1
$member1->borrowBook($book1);

// Member 2 borrows book 2
$member2->borrowBook($book2);

// Print available copies of the books
echo $book1->getTitle() . " - Available Copies: " . $book1->getAvailableCopies() . "\n";
echo $book2->getTitle() . " - Available Copies: " . $book2->getAvailableCopies() . "\n";
?>
