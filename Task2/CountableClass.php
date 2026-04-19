<?php

declare(strict_types=1);

namespace Task2;

use Countable;

class CountableClass implements Countable
{
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
}