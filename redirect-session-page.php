<?php
declare(strict_types=1);

session_start();

if ($_SESSION['count'] === 3) {
    echo 'Количество открытий предыдущей страницы: ' . $_SESSION['count'];
}

