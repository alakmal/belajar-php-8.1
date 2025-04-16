<?php


enum Gender: string
{

    case Male = 'Mr';
    case Female = "Mrs";
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
        if ($this->gender == null) {
            return "Hello {$this->name}" . PHP_EOL;
        } else {
            return "Hello {$this->gender->value}  {$this->name}" . PHP_EOL;
        }
    }
}






$customer = new Customer('Budi', Gender::from("Mr"));
$customer2 = new Customer("Sarah", Gender::from("Mrs"));


var_dump((string)$customer);
var_dump((string) $customer2);
var_dump(Gender::Male); // enum
var_dump(Gender::Male->value); // string