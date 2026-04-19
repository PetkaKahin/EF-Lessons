<?php

declare(strict_types=1);

namespace Task11;

$users = [];

for ($i = 1; $i <= 200000; $i++) {
    $users[] = [
        'id'    => $i,
        'name'  => 'User ' . $i,
    ];
}

$activeIds = [];

for ($i = 1; $i <= 50000; $i++) {
    $activeIds[] = $i;
}

// Перемешиваем итемы в массивах
shuffle($activeIds);
shuffle($users);

function fastFilter(array $users, array $activeIds): array
{
    $flippedIds = array_flip($activeIds);
    $activeUsers = [];

    foreach ($users as $user) {
        if (isset($flippedIds[$user['id']])) {
            $activeUsers[] = $user;
        }
    }

    return $activeUsers;
}

function longFilter(array $users, array $activeIds): array
{
    $activeUsers = [];

    foreach ($users as $user) {
        if (in_array($user['id'], $activeIds, true)) {
            $activeUsers[] = $user;
        }
    }

    return $activeUsers;
}

$timeStart = microtime(true);
$activeUsersLong = longFilter($users, $activeIds);
$timeEnd = microtime(true);
?>

<table>
    <tr>
        <th>Медленная версия</th>
        <th>Быстрая версия</th>
    </tr>
    <tr>
        <td>
            Время до: <?php echo $timeStart?> <br>
            Время полсе: <?php echo $timeEnd?> <br>
            Разница: <?php echo $timeEnd - $timeStart?> <br>
        </td>
        <?php
        $timeStart = microtime(true);
        $activeUsersFast = fastFilter($users, $activeIds);
        $timeEnd = microtime(true);
        ?>
        <td>
            Время до: <?php echo $timeStart?> <br>
            Время полсе: <?php echo $timeEnd?> <br>
            Разница: <?php echo $timeEnd - $timeStart?> <br>
        </td>
    </tr>
</table>

<p>
    Проверка на равенство (===): <?php
        if ($activeUsersLong === $activeUsersFast) echo 'true';
        else echo 'false';
    ?>
</p>
