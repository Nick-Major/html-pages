<?php
declare(strict_types=1);

session_start();

echo 'Сессия началась!' . '</br >';

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 0;

if ($_SESSION['count'] === 3) {
    header("Location: http://localhost:8000/redirect-session-page.php");
}

echo 'Количество открытий страницы: ' . $_SESSION['count'];