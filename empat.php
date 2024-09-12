<?php
require_once 'class_definitions.php';

$author = new Author("John Doe", "Bestselling author");
$publisher = new Publisher("Great Publisher", "123 Main St", "555-1234");
$book = new Book(1234567890, "My Book", "This is a great book", "Fiction", "English", 350, $author, $publisher);

echo "Author: " . $author->name . "\n";
echo "Publisher: " . $publisher->name . "\n";
echo "Book: " . $book->title . "\n";
?>
