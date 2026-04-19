<?php

declare(strict_types=1);

namespace Task2;

use Countable;
use Iterator;

class CountableIteratorClass implements Countable, Iterator
{
    private int $index = 0;
    public array $items = [
        '1',
        '2',
        '3',
        '4',
        '5',
    ];

    public function count(): int
    {
        return count($this->items);
    }

    public function current(): string
    {
        return $this->items[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): int
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }
}
