<?php

declare(strict_types=1);

namespace App\Tricksy\Bike;

class Wheel
{
    private $size;
    private $type;
    private $acceptableTypes;

    public function __construct(int $size, string $type)
    {
        $this->size = $size;
        $this->type = $type;
        $this->acceptableTypes = collect([
            "hybrid",
            "road",
            "town",
            "mountain"
        ]);
    }

    public function validateType(string $type): void
    {
        if ($this->acceptableTypes->contains($type)) {
            $this->type = $type;
        }
    }

    public function setType(string $type): Wheel
    {
        if ($this->acceptableTypes->contains($type)) {
            $this->type = $type;
        }
        return $this;
    }

    public function type(): string
    {
        return $this->type;
    }
}
