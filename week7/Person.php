<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function getClassification()
    {
        return ($this->age >= 18) ? "adult" : "child";
    }
}
