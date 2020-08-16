<?php

declare(strict_types=1);

namespace Q\RFC1149point5;

class RNG
{
    public function getRandomNumber()
    {
        return 4; // chosen by fair dice roll.
                  // guaranteed to be random.
    }
}
