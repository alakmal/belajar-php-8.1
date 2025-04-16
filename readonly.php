<?php



class Category
{




    public function __construct(
        public readonly string $id,
        public readonly string $name,
    ) {}
}

$category = new Category("a", "akmal");
// $category->id  = "halo"; // error 