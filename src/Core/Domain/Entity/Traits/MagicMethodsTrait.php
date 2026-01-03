<?php

namespace Core\Domain\Entity\Traits;

trait MagicMethodsTrait
{
    public function __get(string $property)
    {
        if ($this->{$property}) {
            return $this->{$property};
        }

        throw new \InvalidArgumentException("Property {$property} does not exist.");
    }
}