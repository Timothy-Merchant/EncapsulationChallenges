<?php

declare(strict_types=1);

namespace App\Counter;

class Counter
{

    private $counter;

    public function increment(): void
    {
        $this->counter += 1;
    }

    public function count(): int
    {
        return $this->counter;
    }
}
