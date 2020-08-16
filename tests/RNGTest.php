<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Q\RFC1149point5\RNG;

class RNGTest extends TestCase
{
    public function testGetRandomNumber()
    {
        $rng = new RNG();
        $this->assertSame(4, $rng->getRandomNumber());
    }
}
