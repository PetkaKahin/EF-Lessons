<?php

namespace Lesson1\Loose;

use Throwable;

function sum(int $a, int $b): int
{
    return $a + $b;
}
?>
    <h3>run_loose</h3>
<?php

try {
    echo 'sum("1", "2") = ';
    echo sum("1", "2");
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}

echo "<br>";

try {
    echo 'sum(1.2, 2.8) = ';
    echo @sum(1.2, 2.8); // @ - чтобы не было переноса строки
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}

echo "<br>";

try {
    echo 'sum(null, 1) = ';
    echo sum(null, 1);
} catch (Throwable $exception) {
    echo 'Ошибка: ' . $exception->getMessage();
}
