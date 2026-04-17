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
            <?php require_once dirname(__DIR__) . '/Modules/Module1/Task5/run.php'; ?>
        </div>
    </section>
</main>

<style>
    :root {
        color-scheme: dark;
        --bg: #2b2b2b;
        --surface: #313335;
        --surface-strong: #2b2b2b;
        --border: #3c3f41;
        --border-strong: #5b4b63;
        --text: #a9b7c6;
        --text-muted: #808080;
        --accent: #9876aa;
        --accent-soft: #b39ddb;
    }

    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        min-height: 100%;
    }

    body {
        font-family: "Segoe UI", sans-serif;
        color: var(--text);
        background: var(--bg);
    }

    .page {
        width: 100%;
        margin: 0;
        padding: 28px 32px 48px;
    }

    .page-header {
        margin-bottom: 24px;
        padding-bottom: 16px;
        border-bottom: 1px solid var(--border);
    }

    .page-kicker {
        display: inline-block;
        margin-bottom: 8px;
        color: var(--accent-soft);
        font-size: 0.76rem;
        font-weight: 600;
        letter-spacing: 0.16em;
        text-transform: uppercase;
    }

    .page-header h1 {
        margin: 0;
        font-size: 2.4rem;
        font-weight: 700;
        letter-spacing: -0.04em;
    }

    .task-card {
        margin-bottom: 18px;
        padding: 18px;
        border: 1px solid var(--border);
        border-radius: 14px;
        background: var(--surface);
    }

    .task-head {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 14px;
    }

    .task-label {
        display: inline-flex;
        align-items: center;
        padding: 6px 10px;
        border: 1px solid var(--border-strong);
        border-radius: 999px;
        background: rgba(152, 118, 170, 0.16);
        color: var(--accent-soft);
        font-size: 0.74rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .task-head h2 {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
        letter-spacing: -0.02em;
    }

    .task-output {
        padding: 18px 20px;
        border: 1px solid var(--border);
        border-radius: 8px;
        background: var(--surface-strong);
        color: var(--text);
        font-family: "Consolas", "Cascadia Mono", monospace;
        font-size: 0.95rem;
        line-height: 1.65;
        overflow-x: auto;
    }

    .task-output--none-bg {
        background: none;
        border: none;
    }

    .task-output > :first-child {
        margin-top: 0;
    }

    .task-output > :last-child {
        margin-bottom: 0;
    }

    .task-output h3 {
        margin: 0 0 12px;
        padding: 0;
        color: var(--accent-soft);
        font-family: inherit;
        font-size: inherit;
        font-weight: 600;
        letter-spacing: normal;
        text-transform: none;
    }

    .task-output table {
        width: 100%;
        min-width: 860px;
        border-collapse: collapse;
        font-family: "Segoe UI", sans-serif;
        color: var(--text);
    }

    .task-output th,
    .task-output td {
        padding: 12px 14px;
        border: 1px solid #4a4d50;
        vertical-align: top;
    }

    .task-output th {
        background: #3a3d41;
        color: #dfe6ee;
    }

    .task-output td {
        background: #26282a;
        color: #cfd8e3;
    }

    .task-output tr:nth-child(even) td {
        background: #2e3133;
    }
</style>
</body>
</html>
