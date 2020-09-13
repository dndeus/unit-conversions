<?php

namespace Dndeus\UnitConversions;

class Weight
{
    private float $kilograms;

    private function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new self($kilograms);
    }

    public function toLibs() : float
    {
        return $this->kilograms * 2.204623;
    }
}
