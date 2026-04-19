<?php

declare(strict_types=1);

namespace Task2;

use Countable;
use Iterator;
use TypeError;

function normalizeId(int|string $id): string
{
    return trim((string) $id);
}

function countAndIterate(Countable&Iterator $obj): int
{
    $count = 0;

    foreach ($obj as $item) {
        $count++;
    }

    return $count;
}

echo 'union с int: ' . normalizeId(123) . "<br>";
echo 'union со string: ' . normalizeId('  abc  ') . "<br>";
echo 'intersection: ' . countAndIterate(new CountableIteratorClass()) . "<br>";

try {
    echo countAndIterate(new CountableClass()) . "<br>";
} catch (TypeError $e) {
    echo 'intersection без Iterator: ' . $e->getMessage() . "<br>";
}
