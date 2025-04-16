<?php


interface HasBrand
{

    function getBrand(): string;
}

interface HasName
{

    function getName(): string;
}


function printBrandAndName(HasBrand & HasName $value)
{

    echo $value->getBrand() . "-" . $value->getName();
}