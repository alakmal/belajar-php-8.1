<?php

// enum seperti class
enum Gender: string
{

    case Male = 'Mr';
    case Female = "Mrs";

    function sayHello(): string
    {
        return "Hello  {$this->value}" . PHP_EOL;
    }

    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya"
        };
    }
}



// menggunakan enum method

$gender = Gender::Male;
echo $gender->sayHello();
echo $gender->inIndonesia() . PHP_EOL;