<?php
declare(strict_types=1);

session_start();

echo 'Количество открытий предыдущей страницы: ' . $_SESSION['count'];