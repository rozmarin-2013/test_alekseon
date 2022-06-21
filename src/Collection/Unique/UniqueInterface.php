<?php

declare(strict_types=1);

namespace App\Collection;

interface UniqueInterface
{
    public function validate(object $validatedElement, array $elements);
}
