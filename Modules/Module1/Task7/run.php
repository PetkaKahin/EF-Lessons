<?php

declare(strict_types=1);

namespace Modules\Module1\Task7;

$x = 10;

// замыкание (функция запоминает окружение)
$a = function() use ($x) {
    return $x;
};

$x = 20;
?>

<table>
    <tr>
        <th>Передаём $x</th>
        <th>Передаём $x по ссылке</th>
    </tr>
    <tr>
        <td>
            $x = <?php echo $x; ?><br>
            $a = <?php echo $a(); ?>
        </td>
        <?php
            $x = 10;

            $a = function() use (&$x) {
                return $x;
            };

            $x = 20;
        ?>
        <td>
            $x = <?php echo $x; ?><br>
            $a = <?php echo $a(); ?>
        </td>
    </tr>
</table>
