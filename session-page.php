<?php
declare(strict_types=1);

session_start();

echo 'Сессия началась!' . '</br >';

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

if ($_SESSION['count'] === 3) {
    header("Location: /redirect-session-page.php");
    exit;
}

echo 'Количество открытий страницы: ' . $_SESSION['count'];