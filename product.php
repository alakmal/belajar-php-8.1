<?php

require_once __DIR__ . '/Category.php';

class Product
{


    public function __construct(
        public string $name,

        public Category $category = new Category("0", "Uknown")
    ) {}
}


function printProduct(Product $product = new Product("Unknown"))
{
    echo $product->name . " " . $product->category->name . PHP_EOL;
}

printProduct();
printProduct(new Product("Laptop"));