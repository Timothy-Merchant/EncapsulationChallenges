<?php

declare(strict_types=1);

// Bike: should accept a Frame object. Should have an addWheel method which you pass a Wheel object - it should keep track of all the wheels added.

// It should also have a describe method which tells you: "I am a frame-variation framed bike. I am made of frame-material. I have number-of-wheels wheels"

namespace App\Tricksy\Bike;

class Bike
{
    private $wheels;
    private $frame;

    public function __construct(Frame $frame)
    {
        $this->frame = $frame;
        $this->wheels = collect();
    }

    public function addWheel(Wheel $wheel): Bike
    {
        $this->wheels->push($wheel);
        return $this;
    }

    public function describe(): string
    {
        return "I am a {$this->frame->getVariation()} framed bike. I am made of {$this->frame->getMaterial()}. I have {$this->wheels->count()} wheels";
    }
}
