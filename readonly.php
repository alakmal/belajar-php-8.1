<?php



class Category
{


    public readonly string $id;
    public readonly string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $name;
        $this->name = $name;
    }
}

$category = new Category("a", "akmal");
// $category->id  = "halo"; // error 