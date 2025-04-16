<?php


trait IndonesianGender
{
    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya"
        };
    }
}

// enum seperti class
enum Gender: string
{

    use IndonesianGender;
    case Male = 'Mr';
    case Female = "Mrs";
}