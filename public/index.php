<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

?>

<h1>Module 1</h1>

<hr>
<h2>Task 1</h2>
<?php
    require_once dirname(__DIR__) . '/Modules/Module1/Task1/run_loose.php';
    require_once dirname(__DIR__) . '/Modules/Module1/Task1/run_strict.php';
?>
