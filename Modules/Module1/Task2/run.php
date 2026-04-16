<?php

declare(strict_types=1);

use Modules\Module1\Task2\CountableClass;
use Modules\Module1\Task2\CountableIteratorClass;

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
echo 'intersection ok: ' . countAndIterate(new CountableIteratorClass()) . "<br>";

try {
    echo countAndIterate(new CountableClass()) . "<br>";
} catch (TypeError $e) {
    echo 'intersection без Iterator: ' . $e->getMessage() . "<br>";
}
