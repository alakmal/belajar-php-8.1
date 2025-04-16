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

    static function fromIndonesia(string $value): Gender
    {
        return match ($value) {
            "Tuan" => Gender::Male,
            "Nyonya" => Gender::Female,
            default => throw new \Exception('Unsuported value')
        };
    }
}



// menggunakan enum method
try {
    echo Gender::fromIndonesia('Tuan')->value . PHP_EOL;
} catch (\Exception $exception) {

    echo "error : {$exception->getMessage()}";
}

try {
    echo Gender::fromIndonesia('hgag')->value . PHP_EOL;
} catch (\Exception $exception) {

    echo "error : {$exception->getMessage()}";
}