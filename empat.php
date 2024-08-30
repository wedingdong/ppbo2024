<?php

class Author {
    public String $name;
    public String $description;
    public array $show_type;

    public function __construct(String $name, String $description) {
        $this->name = $name;
        $this->description = $description;
        $this->show_type = [];
    }
}

class Book {
    public int $ISBN;
    public String $title;
    public String $description;
    public String $category;
    public String $language;
    public int $numberOfPage;
    public Author $author;
    public Publisher $publisher;
    public array $showAll;
    public array $detail_ISBN;

    public function __construct(int $ISBN, String $title, String $description, String $category, 
                                String $language, int $numberOfPage, Author $author, Publisher $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->showAll = [];
        $this->detail_ISBN = [];
    }
}

class Publisher {
    public String $name;
    public String $address;
    private String $phone;

    public function __construct(String $name, String $address, String $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(int $phone): void {
        $this->phone = (String)$phone;
    }

    public function getPhone(): int {
        return (int)$this->phone;
    }
}

?>
