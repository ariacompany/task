<?php
namespace App\Repositories\CategoryRepo;

use app\Category;

class CategoryRepo implements ICategoryRepo
{
    protected $category;

    function __construct(Category $a)
    {
        $this ->category = $a;
    }
}