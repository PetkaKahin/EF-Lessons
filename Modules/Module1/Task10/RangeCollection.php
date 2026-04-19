<?php

declare(strict_types=1);

namespace Modules\Module1\Task10;

use Countable;
use Iterator;

class RangeCollection implements Iterator, Countable
{
    private int $current;

    public function __construct(
        private readonly int $start,
        private readonly int $end,
    ) {
        $this->rewind();
    }

    public function current(): int
    {
        return $this->current;
    }

    public function next(): void
    {
        $this->current++;
    }

    public function key(): int
    {
        return $this->current;
    }


    public function valid(): bool
    {
        if ($this->current <= $this->end &&
            $this->current >= $this->start)
        {
            return true;
        }

        return false;
    }

    public function rewind(): void
    {
        $this->current = $this->start;
    }

    public function count(): int
    {
        return $this->end - $this->start + 1;
    }
}