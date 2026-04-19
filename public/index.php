<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effective Mobile Lessons | Module 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="page">
    <header class="page-header">
        <span class="page-kicker">Effective Mobile Lessons</span>
        <h1>Module 1</h1>
    </header>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 1. strict_types и типизация</span>
        </div>
        <div class="task-output">
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task1/run_loose.php'; ?>
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task1/run_strict.php'; ?>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 2. Union и Intersection types</span>
        </div>
        <div class="task-output">
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task2/run.php'; ?>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 3. Copy-on-write и память</span>
        </div>
        <div class="task-output task-output--none-bg">
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task3/run.php'; ?>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 5. Garbage Collector и циклические ссылки</span>
        </div>
        <div class="task-output task-output--none-bg">
            <span>Для терминала:</span>
            <div class="task-output task-output">
                <p>docker compose exec php php Modules/Module1/Task5/run.php --mode=no-gc</p>
                <p>docker compose exec php php Modules/Module1/Task5/run.php --mode=with-gc</p>
            </div><br>
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task5/run.php'; ?>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 6. FPM vs CLI vs long-running (состояние)</span>
        </div>
        <span>Задание для терминала:</span>
        <div class="task-output task-output">
            <p>docker compose exec php php Modules/Module1/Task6/worker.php</p>
            <p>docker compose exec php php Modules/Module1/Task6/cli_once.php</p>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 7. Closures: use и ссылка</span>
        </div>
        <div class="task-output task-output--none-bg">
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task7/run.php'; ?>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 8. Generators vs массивы</span>
        </div>
        <div class="task-output task-output--none-bg">
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task8/run.php'; ?>
        </div>
    </section>

    <section class="task-card">
        <div class="task-head">
            <span class="task-label">Задание 9. Errors vs Exceptions (Throwable)</span>
        </div>
        <div class="task-output task-output--none-bg">
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task9/run.php'; ?>
        </div>
    </section>
</main>
</body>
</html>
