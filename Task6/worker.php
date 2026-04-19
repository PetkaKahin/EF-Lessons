<?php

namespace Task6\Worker;

static $number = 0;

for ($i = 1; $i <= 30; $i++) {
    $number++;
    echo $number . "\n";
    usleep(200 * 1000);
}
