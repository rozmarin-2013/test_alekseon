<?php

declare(strict_types=1);

namespace App\Product;

class Product
{
    private string $title;
    private int $quantity;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function addQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}
