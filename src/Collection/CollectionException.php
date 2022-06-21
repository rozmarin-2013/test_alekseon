<?php

declare(strict_types=1);

namespace App\Collection;

use \RuntimeException;

class CollectionException extends RuntimeException
{
    public static function invalidType(string $expected, string $actual): self
    {
        return new self("Invalid type. Expected: $expected. Actual: $actual");
    }

    public static function duplicateElement(string $title): self
    {
        return new self("Element with title $title already exist");
    }
}
