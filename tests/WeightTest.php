<?php

namespace Dndeus\UnitConversions\Tests;

use Dndeus\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_converts_kilograms_to_libs()
    {
        $kilograms = Weight::fromKilograms(100);

        $libs = $kilograms->toLibs();

        $this->assertEquals(220.4623, $libs);
    }
}
