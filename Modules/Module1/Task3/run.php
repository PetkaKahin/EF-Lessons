<?php

declare(strict_types=1);

namespace Modules\Module1\Task3;

$arr = range(1, 200000);

function passByValue(array $a): int
{
    return count($a);
}

function passByValueAndModify(array $a): int
{
    $a[] = 999;
    return passByValue($a);
}

function passByReference(array &$a): int
{
    $a[] = 999;
    return passByValue($a);
}

?>

<table>
    <tr>
        <th>passByValue</th>
        <th>passByValueAndModify</th>
        <th>passByReference</th>
    </tr>
    <tr>
        <td>
            <?php
            echo "memory_get_peak_usage (до): " . memory_get_peak_usage(false) . " <br>";
            echo "microtime (до): " . microtime(true) . " <br>";
            echo "items: " . passByValue($arr) . "<br>";
            echo "memory_get_peak_usage (после): " . memory_get_peak_usage(false) . " <br>";
            echo "microtime (после): " . microtime(true) . " <br>";
            ?>
        </td>
        <td>
            <?php
            echo "memory_get_peak_usage (до): " . memory_get_peak_usage(false) . " <br>";
            echo "microtime (до): " . microtime(true) . " <br>";
            echo "items: " . passByValueAndModify($arr) . "<br>";
            echo "memory_get_peak_usage (после): " . memory_get_peak_usage(false) . " <br>";
            echo "microtime (после): " . microtime(true) . " <br>";
            ?>
        </td>
        <td>
            <?php
            echo "memory_get_peak_usage (до): " . memory_get_peak_usage(false) . " <br>";
            echo "microtime (до): " . microtime(true) . " <br>";
            echo "items: " . passByReference($arr) . "<br>";
            echo "memory_get_peak_usage (после): " . memory_get_peak_usage(false) . " <br>";
            echo "microtime (после): " . microtime(true) . " <br>";
            ?>
        </td>
    </tr>
</table>

