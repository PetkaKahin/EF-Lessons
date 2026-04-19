<?php

declare(strict_types=1);

namespace Task5;

const ITERATIONS = 50000;
const REPORT_EVERY = 1000;

function run(bool $isUseGc, bool $isCli): void
{
    for ($iteration = 1; $iteration <= ITERATIONS; $iteration++) {
        $a = new Node();
        $b = new Node();

        $a->ref = $b;
        $b->ref = $a;

        if ($iteration % REPORT_EVERY === 0) {
            echo 'Итерация ' . $iteration . ' | memory_get_usage: ' . memory_get_usage();

            if ($isCli) echo "\n";
            else echo "<br>";
        }

        if ($isUseGc) {
            gc_collect_cycles();
        }
    }
}

if (php_sapi_name() === 'cli') {
    require_once dirname(__DIR__) . '/vendor/autoload.php';

    $arg = $argv[1] ?? null;

    if ($arg === '--mode=no-gc') {
        run(false, true);
    }
    if ($arg === '--mode=with-gc') {
        run(true, true);
    }
} else {
?>

<table>
    <tr>
        <th>без gc_collect_cycles()</th>
        <th>c gc_collect_cycles()</th>
    </tr>
    <tr>
        <td>
            <?php
            run(false, false);
            ?>
        </td>
        <td>
            <?php
            run(true, false);
            ?>
        </td>
    </tr>
</table>
<?php } ?>
