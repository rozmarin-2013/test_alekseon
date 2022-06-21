<?php

declare(strict_types=1);

namespace App\Product;

use App\Collection\Collection;

class ProductCollection extends Collection
{
    protected function getType(): string
    {
        return Product::class;
    }
}
