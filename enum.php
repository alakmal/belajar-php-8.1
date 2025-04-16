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

    public function __toString()
    {
        if ($this->gender == Gender::Male) {
            return "Hello Mr. {$this->name}" . PHP_EOL;
        } elseif ($this->gender == Gender::Female) {
            return "Hello Mrs. {$this->name}";
        } else {
            return "Hello {$this->name}";
        }
    }
}






$customer = new Customer('Budi', Gender::Male);
$customer2 = new Customer("Sarah", Gender::Female);


var_dump((string)$customer);
var_dump((string) $customer2);
var_dump(Gender::cases()); // arry
var_dump(Gender::Male);