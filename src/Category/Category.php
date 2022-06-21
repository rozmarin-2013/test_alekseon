<?php

declare(strict_types=1);

namespace App\Category;

use App\Collection\UniqueTitle;
use App\Product\Product;
use App\Product\ProductCollection;

class Category
{
    private string $title;
    private ProductCollection $productCollection;
    private CategoryCollection $categoryCollection;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->categoryCollection = new CategoryCollection(new UniqueTitle());
        $this->productCollection = new ProductCollection(new UniqueTitle());
    }

    public function addChildCategory(self $category): void
    {
        $this->categoryCollection->add($category);
    }

    public function addProduct(Product $product): void
    {
        $this->productCollection->add($product);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getProductCollection(): ProductCollection
    {
        return $this->productCollection;
    }

    public function setProductCollection(ProductCollection $productCollection): void
    {
        $this->productCollection = $productCollection;
    }

    public function getCategoryCollection(): CategoryCollection
    {
        return $this->categoryCollection;
    }

    public function setCategoryCollection(CategoryCollection $categoryCollection): void
    {
        $this->categoryCollection = $categoryCollection;
    }
}
