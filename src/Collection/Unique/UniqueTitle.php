<?php

declare(strict_types=1);

namespace App\Collection;

class UniqueTitle implements UniqueInterface
{
    public function validate(object $validatedElement, array $elements): void
    {
        foreach ($elements as $element) {
            if ($element->getTitle() === $validatedElement->getTitle()) {
                throw CollectionException::duplicateElement($validatedElement->getTitle());
            }
        }
    }
}
