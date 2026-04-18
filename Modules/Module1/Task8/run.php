<?php

declare(strict_types = 1);

namespace Modules\Module1\Task8;

use Generator;

$n = 2000000;

function arraySource(int $n): array
{
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        $result[] = $i;
    }
    return $result;
}


function generatorSource(int $n): Generator
{
    for ($i = 1; $i <= $n; $i++) {
        yield $i;
    }
}

$sum = 0;

$memoryStart = memory_get_usage();
$timeStart = microtime(true);

$source = arraySource($n);

foreach ($source as $item) {
    $sum += $item;
}

$memoryEnd = memory_get_usage();
$timeEnd = microtime(true);
?>


<table>
    <tr>
        <th>arraySource()</th>
        <th>generatorSource()</th>
    </tr>
    <tr>
        <td>
            Время до: <?php echo $timeStart; ?><br>
            Память до: <?php echo $memoryStart; ?><br>
            Сумма: <?php echo $sum; ?><br>
            Время после: <?php echo $timeEnd; ?><br>
            Память после: <?php echo $memoryEnd; ?><br><br>
            Разница во времени: <?php echo $timeEnd - $timeStart; ?><br>
            Разница в памяти: <?php echo $memoryEnd - $memoryStart; ?><br>
        </td>
        <?php
        gc_collect_cycles();

        $sum = 0;

        $memoryStart = memory_get_usage();
        $timeStart = microtime(true);

        $source = arraySource($n);

        foreach ($source as $item) {
            $sum += $item;
        }

        $memoryEnd = memory_get_usage();
        $timeEnd = microtime(true);
        ?>
        <td>
            Время до: <?php echo $timeStart; ?><br>
            Память до: <?php echo $memoryStart; ?><br>
            Сумма: <?php echo $sum; ?><br>
            Время после: <?php echo $timeEnd; ?><br>
            Память после: <?php echo $memoryEnd; ?><br><br>
            Разница во времени: <?php echo $timeEnd - $timeStart; ?><br>
            Разница в памяти: <?php echo $memoryEnd - $memoryStart; ?><br>
        </td>
    </tr>
</table>

<?php
$source1 = $source; // чтобы не был сброс памяти после того, как цикл отработал
?>