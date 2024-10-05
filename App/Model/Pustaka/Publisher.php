<?php

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