<?php

declare(strict_types=1);

namespace App\Category;

use App\Collection\Collection;

class CategoryCollection extends Collection
{
    protected function getType(): string
    {
        return Category::class;
    }
}
