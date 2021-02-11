<?php

declare(strict_types=1);

namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf): Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles(): array
    {
        return $titles = $this->shelves->flatmap(fn ($shelf) => $shelf->titles())->all();
    }
}
