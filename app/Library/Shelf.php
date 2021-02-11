<?php

declare(strict_types=1);

namespace App\Library;

class Shelf
{

    private $books;

    public function addBook(Book $book): Shelf
    {
        $this->books[] = $book->getTitle();
        return $this;
    }

    public function titles(): array
    {
        return $this->books;
    }
}
