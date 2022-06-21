<?php

declare(strict_types=1);

namespace App\Catalog;

use App\Category\Category;
use App\Category\CategoryCollection;
use App\Collection\UniqueTitle;

class EcommerceCatalog
{
    private CategoryCollection $roots;

    public function __construct()
    {
        $this->roots = new CategoryCollection(new UniqueTitle());
    }

    public function addRootCategory(Category $category): void
    {
        $this->roots->add($category);
    }
}
