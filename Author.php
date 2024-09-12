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