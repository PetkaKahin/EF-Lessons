<?php

declare(strict_types=1);

namespace Task9;

use RuntimeException;
use Throwable;

function sum(int $a, int $b): int
{
    return $a + $b;
}

function getException()
{
    throw new RuntimeException('Вызываю ошибку');
}
?>

<table>
    <tr>
        <th>TypeError</th>
        <th>RuntimeException</th>
        <th>Error</th>
    </tr>
    <tr>
        <td>
            <?php
                try {
                    echo sum(1, "2");
                } catch (Throwable $e) {
                    echo $e->getMessage() . "<br><br>";
                    echo $e::class;
                }
            ?>
        </td>
        <td>
            <?php
            try {
                echo getException();
            } catch (Throwable $e) {
                echo $e->getMessage() . "<br><br>";
                echo $e::class;
            }
            ?>
        </td>
        <td>
            <?php
            try {
                echo sum2();
            } catch (Throwable $e) {
                echo $e->getMessage() . "<br><br>";
                echo $e::class;
            }
            ?>
        </td>
    </tr>
</table>
