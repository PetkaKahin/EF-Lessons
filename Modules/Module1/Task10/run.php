<?php

declare(strict_types=1);

namespace Modules\Module1\Task10;

$collection = new RangeCollection(5, 10);
?>

<table>
    <tr>
        <th>count()</th>
        <th>foreach</th>
    </tr>
    <tr>
        <td><?php echo count($collection); ?></td>
        <td>
            <?php
            foreach ($collection as $item) {
                echo $item . "<br>";
            }
            ?>
        </td>
    </tr>
</table>
