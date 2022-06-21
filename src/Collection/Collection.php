<?php

namespace App\Collection;

abstract class Collection
{
    protected string $type;
    protected array $elements = [];
    protected UniqueInterface $unique;

    public function __construct(UniqueInterface $unique, array $elements = [])
    {
        $this->type = $this->getType();
        $this->unique = $unique;

        foreach ($elements as $element) {
            $this->add($element);
        }
    }

    abstract protected function getType(): string;

    public function add(object $element): self
    {
        if (!$element instanceof $this->type) {
            throw CollectionException::invalidType($this->type, get_class($element));
        }

        $this->unique->validate($element, $this->elements);
        $this->elements[] = $element;

        return $this;
    }
}
