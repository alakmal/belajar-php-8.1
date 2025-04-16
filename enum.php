<?php


enum Gender
{

    case Male;
    case Female;
}

class Customer
{

    public string $name;
    public Gender $gender;
    public function __construct(string $name, Gender $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}